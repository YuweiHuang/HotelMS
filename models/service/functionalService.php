<?php 
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../entity/customer.php';
	require_once __DIR__.'/../entity/membertype.php';
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../entity/roomtype.php';
	require_once __DIR__.'/../entity/user.php';

	require_once __DIR__.'/../dao/billDao.php';
	require_once __DIR__.'/../dao/customerDao.php';
	require_once __DIR__.'/../dao/membertypeDao.php';
	require_once __DIR__.'/../dao/roomDao.php';
	require_once __DIR__.'/../dao/roomtypeDao.php';
	require_once __DIR__.'/../dao/userDao.php';

	/**
	* services for functions
	*/
	class functionalService
	{
		
		function __construct()
		{

		}

		public function scanRoomType()
		{
			$roomtypeDao = new roomtypeDao();
			

		}

		public function bookRoomType($roomtype)
		{

		}

		public function cancelBookRoomType()
		{

		}

		public function customerConfirm()
		{

		}

		public function scanBill()
		{
			
		}

		public function evaluateBill()
		{

		}
	}
 ?>