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
			date_default_timezone_set('PRC');     //这里设置了时区
			// date.timezone = 'PRC';
            $book_time = date("Y-m-d H:i:s");//获取当前时间
			$bill = new bill($user_id, $roomtype->price, $book_time, $roomtype->price);
			$bill_id = $billDao->addBillAndGetID($bill);
			if($bill_id !== 0)
			{
				$bookrecord = new bookrecord($room_id, $bill_id, $start_time, $end_time);
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
			$billList = $billDao->findAllBillInfoByUserID($user_id);
			$tempList = array();
			for ($i=0; $i < count($billList); $i++) { 
				$liveDao = new liveDao();
				$live = $liveDao->findLiveInfoByBillID($billList[$i]->bill_id);
				$customer = $customerDao->findCustomerInfoByID($live->customer_id);
				$temp = array('bill_id' => $billList[$i]->bill_id,
						  'total_cost' => $billList[$i]->total_cost,
						  'book_time' => $billList[$i]->book_time,
						  'total_point' => $billList[$i]->total_point,
						  'evaluate_score' => $billList[$i]->evaluate_score,
						  'evaluate_words' => $billList[$i]->evaluate_words,
						  'customer_name' => $customer->customer_name,
						  'in_time' => $live->in_time,
						  'check_time' => $live->check_time,
						  'phone' => $customer->phone);
				// $temp = array('bill_id' => 2,
				// 		  'total_cost' => 2200,
				// 		  'book_time' => '29827',
				// 		  'total_point' => 200,
				// 		  'evaluate_score' => 5,
				// 		  'evaluate_words' => '哈哈哈哈',
				// 		  'customer_name' => '哈哈',
				// 		  'in_time' => '29827',
				// 		  'out_time' => '29827',
				// 		  'phone' => '669869869');
				array_push($tempList, $temp);
			}
			return $tempList;
		}

		/*
		评价订单
		input bill 对象
		return 成功与否
		*/
		public function evaluateBill($bill)
		{
			$billDao = new billDao();
			if($billDao->updateBill($bill))
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