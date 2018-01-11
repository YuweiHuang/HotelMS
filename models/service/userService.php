<?php 
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../entity/customer.php';
	require_once __DIR__.'/../entity/membertype.php';
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../entity/roomtype.php';
	require_once __DIR__.'/../entity/user.php';

	require_once __DIR__.'/../dao/billDao.php';
	require_once __DIR__.'/../dao/bookrecordDao.php';
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
		*账号存在返回false 成功注册返回true
		*/
		public function userRegister($user)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = $userDao->findUserInfoByAccount($user->user_account);
			if($userdb->user_id==null)
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
			$userdb = $userDao->findUserInfoByAccount($user->user_account);
			if($userdb->user_id==null)
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
				echo "success";
				return 3;
			}
		}
		
		/*
		*会员，管理员，超级管理员登陆   
		*input：user实体
		*return：账户不存在：0 密码错误：1 权限错误：2 登陆成功：3
		*/
		public function userAdminLogin($user)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = $userDao->findUserInfoByAccount($user->user_account);
			if($userdb->user_id==null)
			{
				echo "error:the account does not exist";
				return 0;
			}
			else if($userdb->user_password!=$user->user_password)
			{
				echo "Password error";
				return 1;
			}
			else if($userdb->authority==0)
			{
				echo "authority error";
				return 2;
			}
			else
			{
				echo "success";
				return 3;
			}
		}

		/*
		显示用户账号信息
		input:用户账号
		return:user object
		*/
		public function scanSingleUser($user_account)
		{
			$userDao = new userDao();
			$userdb = $userDao->findUserInfoByAccount($user_account);
			return $userdb;
		}

		/*
		*用户修改个人信息		管理员修改用户信息	超级管理员修改管理员，用户信息
		*/
		public function userUpdate($user)
		{
			$userDao = new userDao();
			$userDao->updateUser($user);
		}
		/*修改密码*/
		public function userChangePW($user)
		{
			$userDao = new userDao();
			$userDao->updateUserPassword($user);
		}

		public function userChangePoint($user_id, $total_point)
		{
			$userDao = new userDao();
			$userDao->updateUserPoint($user_id, $total_point);
		}
		/*
		*超级管理员删除admin user
		*/
		public function deleteUserOrAdmin($user_id)
		{
			$userDao = new userDao();
			$userdb = new user();
			$userdb = $userDao->findUserInfoByID($user_id);
			if($userdb->user_id==null)
			{
				echo "user does not exist";
				return false;
			}
			else 
			{
				$userDao->deleteUser($user_id);
				echo "success";
				return true;
			}
		}

		/*
		*超管查看所有人员信息
		*返回user对象的数组
		*/
		public function scanAllUser($authority1)
		{
			$userDao = new userDao();
			$tempList = array();
			$userList  = $userDao->findUserInfo($authority1);
			// echo $userList[0]->user_id;
			for($i=0;$i<count($userList);$i++)
			{
				$temp = array('user_id' =>$userList[$i]->user_id,'authority'=>$userList[$i]->authority,
							'register_time' => $userList[$i]->register_time,
							'user_account' => $userList[$i]->user_account,
							'user_password'=>$userList[$i]->user_password,
							'truename'=>$userList[$i]->truename,
							'total_point'=>$userList[$i]->total_point,
							'member_type_id'=>$userList[$i]->member_type_id);
				array_push($tempList, $temp);
			}
			// echo $tempList;
			return $tempList;
		}

		/*增加顾客*/
		public function customerAdd($customer)
		{
			$customerDao = new customerDao();
			$customerDao->addCustomer($customer);
		}
		public function customerUpdate($customer)
		{
			$customerDao = new customerDao();
			$customerDao->updateCustomer($customer);
		}
		public function customerDelete($customer_id)
		{
			$customerDao = new customerDao();
			$customerDao->deleteCustomer($customer);
		}
		public function customerScan()
		{
			$customerDao = new customerDao();
			return $customerDao->findCustomerInfo();
		}
		public function customerScanAll($user_id)
		{
			// $customerDao = new customerDao();
			return $customerDao->findCustomerInfoByUserId($user_id);
		}

		/*
		浏览用户的订单
		input user_id
		return bill object list(or empty list)
		*/
		public function scanAllCustomerByUser($user_id)
		{
			// $billList = new array();
			$customerDao = new customerDao();
			$customerList = $customerDao->findAllCustomerInfoByUserId($user_id);
			$tempList = array();
			for ($i=0; $i < count($customerList); $i++) { 
				$temp = array('name' => $customerList[$i]->customer_name,
						  'country' => $customerList[$i]->country,
						  'city' => $customerList[$i]->city,
						  'tel' => $customerList[$i]->phone,
						  'id_type' => $customerList[$i]->indentity_type,
						  'id' => $customerList[$i]->indentity);
				array_push($tempList, $temp);
			}
			return $tempList;
		}
	}
 ?>