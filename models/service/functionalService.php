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
		public function bookRoom($room_id, $start_time, $end_time)
		{
			$bill
			$billDao->addBillAndGetID();
			$bookrecord = new bookrecord($room_id, $start_time, $end_time);
			$bookrecord
			$bookrecordDao = new bookrecordDao();
			$bookrecordDao = $bookrecordDao->addBookRecord($bookrecord);
		}

		
		public function cancelBookRoomType()
		{

		}

		public function customerConfirm()
		{

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