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
	* service for product
	*/
	class productService
	{
		/*
		浏览房间类型
		return: 所有房间类型列表
		*/
		public function scanRoomType()
		{
			$roomtypelist =  new array();
			$roomtypeDao = new roomtypeDao();
			$roomtypelist = $roomtypeDao->findRoomtypeInfo();
			return $roomtypelist;
		}
		/*
		*删除房间类型
		*/
		public function deleteRoomType($room_type_id)
		{
			$roomtypeDao = new roomtypeDao();
			$roomtypedb = new roomtype();
			$roomtypedb = $roomtypeDao->findRoomtypeInfoByID($room_type_id);
			if($roomtypedb->room_type_id==null)
			{
				echo "roomtype does not exist";
				return false;
			}
			else 
			{
				$roomtypeDao->deleteRoomtype($room_type_id);
				echo "success";
				return true;
			}
		}
		/*
		*修改房间类型
		*/
		public function updateRoomType($roomtype)
		{
			$roomtypeDao = new roomtypeDao();
			$roomtypeDao->updateRoomtype($roomtype);
		}
		/*
		*增加房间类型
		*/
		public function addRoomType($roomtype)
		{
			$roomtypeDao = new roomtypeDao();
			$roomtypeDao->addRoomtype($roomtype);
		}
		/*
		浏览房间
		return: 所有房间列表
		*/
		public function scanRoom()
		{
			$roomlist =  new array();
			$roomDao = new roomDao();
			$roomlist = $roomDao->findRoomInfo();
			return $roomlist;
		}

		/*
		*删除房间
		*/
		public function deleteRoom($room_id)
		{
			$roomDao = new roomDao();
			$roomdb = new room();
			$roomdb = $roomDao->findRoomInfoByID($room_id);
			if($roomdb->room_id==null)
			{
				echo "room does not exist";
				return false;
			}
			else 
			{
				$roomDao->deleteRoom($room_id);
				echo "success";
				return true;
			}
		}
		/*
		*修改房间信息
		*/
		public function updateRoom($room)
		{
			$roomDao = new roomDao();
			$roomDao->updateRoom($room);
		}
		/*
		*增加房间
		*/
		public function addRoom($room)
		{
			$roomDao = new roomDao();
			$roomDao->addRoom($room);
		}

	}
?>