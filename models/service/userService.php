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
		*用户注册	超管添加用户，管理员
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
		*会员，管理员，超级管理员登陆   
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
			else if($userdb->password!=$user->password)
			{
				echo "Password error";
				return false;
			}
			else if($userdb->authority!=$user->authority)
			{
				echo "authority error";
				return false;
			}
			else
			{
				return true;
			}
		}
		/*
		*用户修改个人信息		管理员修改用户信息	超级管理员修改管理员，用户信息
		*/
		public function userUpdate($user)
		{
			$userDao = new userDao();
			$userDao->updateUser($user);
		}
		/*
		*超级管理员删除admin user
		*/
		public function deleteUserOrAdmin($user_id)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = findUserInfoByID($user_id);
			if(empty($userdb->user_id)||$userdb->delmark==1)
			{
				echo "user does not exist";
				return false;
			}
			else 
			{
				$userdb->delmark=1;
				$userDao->updateUser($userdb);
				retun true;
			}
		}

		/*
		*超管查看所有人员信息
		*/
		public function scanAllUser()
		{
			$userDao = new userDao();
			return $userDao->findUserInfo();
		}





	}


 ?>