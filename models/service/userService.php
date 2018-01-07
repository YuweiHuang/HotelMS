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
	* services for user
	*/
	class userService
	{
		
		/*
		*用户注册
		*/
		public function userRegister($user)
		{
			$uerDao = new userDao();
			$userdb = new user();
			$userdb = $userDao->findUserInfoByAccount($user->account);
			if(empty($userdb->account))
			{
				$userDao->addUser($user);
				return true;
			}
			else 
			{
				echo "error:the account already exist";
				return false;
			}
		}

		/*
		*登陆
		*/
		public function userLogin($user)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = findUserInfoByAccount($account);
			if(empty($userdb->account))
			{
				echo "error:the account does not exist";
				return false;
			}
			else if($userdb->password==$user->password)
			{
				return true;
			}
			else
			{
				echo "Password error";
				return false;
			}
		}
		/*
		*修改个人信息
		*/
	}

 ?>