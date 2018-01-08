<?php 
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../entity/customer.php';
	require_once __DIR__.'/../entity/membertype.php';
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../entity/roomtype.php';
	require_once __DIR__.'/../entity/user.php';
	require_once __DIR__.'/../entity/bookrecord.php';

	require_once __DIR__.'/../dao/billDao.php';
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
			$roomList = new array();
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
			$roomtype = $roomtypeDao->findRoomtypeInfoByID($room->room_type_id)
			date_default_timezone_set('Etc/GMT-8');     //这里设置了时区
            $book_time = date("Y-m-d H:i:s");//获取当前时间
			$bill = new bill($user_id, $roomtype->price, $book_time, $roomtype->price)
			$bill_id = $billDao->addBillAndGetID($bill)
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

			if ($billDao->deleteBill($bill_id) & $bookrecordDao->delBookRecord($bill_id) & $liveDao->deleteLive($bill_id)) {
				return true;
			}
			else
			{
				return false;
			}
		}

		/*
		浏览用户的订单
		input user_id
		return bill object list(or empty list)
		*/
		public function scanAllBillByUser($user_id)
		{
			$billList = new array();
			$billDao = new billDao();
			$billList = $billDao->findAllBillInfoByUserID($user_id);
			return $billList;
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