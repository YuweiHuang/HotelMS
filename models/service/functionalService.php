<?php 
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../entity/live.php';
	require_once __DIR__.'/../entity/customer.php';
	require_once __DIR__.'/../entity/membertype.php';
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../entity/roomtype.php';
	require_once __DIR__.'/../entity/user.php';
	require_once __DIR__.'/../entity/bookrecord.php';

	require_once __DIR__.'/../dao/billDao.php';
	require_once __DIR__.'/../dao/liveDao.php';
	require_once __DIR__.'/../dao/customerDao.php';
	require_once __DIR__.'/../dao/membertypeDao.php';
	require_once __DIR__.'/../dao/roomDao.php';
	require_once __DIR__.'/../dao/roomtypeDao.php';
	require_once __DIR__.'/../dao/userDao.php';
	require_once __DIR__.'/../dao/bookrecordDao.php';

	/**
	* services for functions
	*/
	class functionalService
	{
		/*
		浏览空房间
		input: start_time, end_time
		return: 空房间列表
		*/
		public function scanEmptyRoom($start_time, $end_time)
		{
			// $roomList = new array();
			$bookRecordDao = new bookrecordDao();
			$roomList = $bookRecordDao->findEmptyRoomList($start_time, $end_time);
			return $roomList;
		}

		/*
		浏览空房间
		input: start_time, end_time
		return: 空房间列表
		*/
		public function scanAllEmptyRoom($start_time, $end_time)
		{
			// $roomList = new array();
			$bookRecordDao = new bookrecordDao();

			// $billList = new array();
			$bookRecordDao = new bookRecordDao();
			// $customerDao = new customerDao();
			$roomList = $bookRecordDao->findEmptyRoomList($start_time, $end_time);
			$roomDao = new roomDao();
			$roomtypeDao = new roomtypeDao();
			$tempList = array();
			for ($i=0; $i < count($roomList); $i++) { 
				// $liveDao = new liveDao();
				// $live = $liveDao->findLiveInfoByBillID($roomList[$i]->bill_id);
				// $customer = $customerDao->findCustomerInfoByID($live->customer_id);
				$room = new room();
				$room = $roomDao->findRoomInfoByID($roomList[$i]);
				$roomtypeInfo = $roomtypeDao->findRoomtypeInfoByID($room->room_type_id);
				$temp = array('room_id' => $room->room_id,
						  'room_name' => $room->room_name,
						  'room_type_id' => $room->room_type_id,
						  'location' => $room->location,
						  'room_tel' => $room->room_tel,
							'room_type' => $roomtypeInfo->room_type,
							'bedwidth' => $roomtypeInfo->bedwidth,
							'roomarea' => $roomtypeInfo->roomarea,
							'wifi' => $roomtypeInfo->wifi,
							'bathroom' => $roomtypeInfo->bathroom,
							'addbed' => $roomtypeInfo->addbed,
							'occupantnum' => $roomtypeInfo->occupantnum,
							'price' => $roomtypeInfo->price,
							'deposit' => $roomtypeInfo->deposit
						  );
				array_push($tempList, $temp);
			}
			return $tempList;
		}
		/*
		预定房间
		input: 房间id start_time, end_time
		return: 是否预定成功
		*/
		public function bookRoom($user_id, $room_id, $start_time, $end_time)
		{
			$roomDao = new roomDao();

			$room = $roomDao->findRoomInfoByID($room_id);
			$roomtypeDao = new roomtypeDao();
			$roomtype = $roomtypeDao->findRoomtypeInfoByID($room->room_type_id);
			// echo $room->room_type_id;
			date_default_timezone_set('PRC');     //这里设置了时区
			// date.timezone = 'PRC';
            $book_time = date("Y-m-d H:i:s");//获取当前时间
			$bill = new bill();
			$bill->user_id = $user_id;
			$bill->total_cost = $roomtype->price;
			$bill->book_time = $book_time;
			$bill->total_point = $roomtype->price;
			$bill->evaluate_score = 0;
			$bill->evaluate_words = '';
			$billDao = new billDao();
			$bill_id = $billDao->addBillAndGetID($bill);
			if($bill_id !== 0)
			{
				// $bookrecord = new bookrecord($room_id, $bill_id, $start_time, $end_time);
				$bookrecord = new bookrecord();
				$bookrecord->room_id = $room_id;
				$bookrecord->bill_id = $bill_id;
				$bookrecord->in_time = $start_time;
				$bookrecord->out_time = $end_time;
				$bookrecord->delmark = 0;
				$bookrecordDao = new bookrecordDao();
				if($bookrecordDao->addBookRecord($bookrecord))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		// 取消预定房间
		// input: bill_id
		// return: 是否预定成功
		public function cancelBookRoomType($bill_id)
		{
			$billDao       = new billDao();
			$bookrecordDao = new bookrecordDao();
			$liveDao       = new liveDao();

			if ($billDao->deleteBill($bill_id) & $bookrecordDao->deleteBookRecord($bill_id) & $liveDao->deleteLive($bill_id)) {
				return true;
			}
			else
			{
				return false;
			}
		}

		// 入住登记
		// input: live object
		// return: 是否登记成功
		public function liveRecord($live)
		{
			$liveDao = new liveDao();
			if($liveDao->addLive($live))
			{
				return true;
			}
			else
			{
				false;
			}
		}
		/*
		浏览用户的订单
		input user_id
		return bill object list(or empty list)
		*/
		public function scanAllBillByUser($user_id)
		{
			// $billList = new array();
			$billDao = new billDao();
			$customerDao = new customerDao();
			$bookrecordDao = new bookrecordDao();
			$billList = $billDao->findAllBillInfoByUserID($user_id);
			$tempList = array();
			for ($i=0; $i < count($billList); $i++) { 
				// $liveDao = new liveDao();
				// $live = $liveDao->findLiveInfoByBillID($billList[$i]->bill_id);
				$bookrecord = $bookrecordDao->findBookRecordByBillID($billList[$i]->bill_id);
				// $customer = $customerDao->findCustomerInfoByID($live->customer_id);
				$temp = array('bill_id' => $billList[$i]->bill_id,
						  'total_cost' => $billList[$i]->total_cost,
						  'book_time' => $billList[$i]->book_time,
						  'total_point' => $billList[$i]->total_point,
						  'evaluate_score' => $billList[$i]->evaluate_score,
						  'evaluate_words' => $billList[$i]->evaluate_words,
						  // 'customer_name' => $customer->customer_name,
						  'in_time' => $bookrecord->in_time,
						  'out_time' => $bookrecord->out_time
						);
				array_push($tempList, $temp);
			}
			return $tempList;
		}

		/*
		评价订单
		input bill 对象
		return 成功与否
		*/
		public function evaluateBill($bill_id,$point,$comment)
		{
			$billDao = new billDao();
			if($billDao->updateBillEvaluate($bill_id,$point,$comment))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
 ?>