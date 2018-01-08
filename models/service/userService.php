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
			$userdb = $userDao->findUserInfoByAccount($user->user_account);
			if(empty($userdb->user_account))
			{
				$userDao->addUser($user);
				return true;
			}
			else 
			{
				echo "error:the useraccount already exist";
				return false;
			}
		}

		/*
		*会员，管理员，超级管理员登陆   
		*input：user实体
		*return：账户不存在：0 密码错误：1 权限错误：2 登陆成功：3
		*/
		public function userLogin($user)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = findUserInfoByAccount($user_account);
			if(empty($userdb->user_account))
			{
				echo "error:the account does not exist";
				return 0;
			}
			else if($userdb->user_password!=$user->user_password)
			{
				echo "Password error";
				return 1;
			}
			else if($userdb->authority!=$user->authority)
			{
				echo "authority error";
				return 2;
			}
			else
			{
				return 3;
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
				deleteUser($user_id);
				return true;
			}
		}

		/*
		*超管查看所有人员信息
		*返回user对象的数组
		*/
		public function scanAllUser()
		{
			$userDao = new userDao();
			return $userDao->findUserInfo();
		}
	}
 ?>