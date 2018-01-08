<?php 

	require_once __DIR__.'/../../models/dao/userDao.php';
	require_once __DIR__.'/../../models/entity/user.php';

	$userDaoTest = new userDao();

///////////////////////////////////
	//3种方法finduserinfo的测试
	$userid = new user();
	$useracc = new user();
	$user_account = 'zs@qq.com';
	
	$userid = $userDaoTest->findUserInfoByID(4); 
	$useracc =  $userDaoTest->findUserInfoByAccount($user_account);
	$all = $userDaoTest->findUserInfo();
	
	echo $userid->user_account;
	echo "</br>";
	echo $useracc->register_time;
	echo "</br>";
	echo $all[0]->user_account;
	echo "</br>";
	echo $all[1]->user_account;
	echo "</br>";
	echo $all[2]->user_account;

/////////////////////////////////////
	//添加用户测试
	$adduser = new user();
	$adduser->authority = 0;
	$adduser->register_time = '2018-01-12 01:01:01';
	$adduser->user_account = 'zhaoxinyu';
	$adduser->user_password = 'zxy';
	$adduser->total_point = 0;
	$adduser->member_type_id = 1;
	$userDaoTest->addUser($adduser);

/////////////////////////////////////////
	//更改用户信息   可以更改authority,username,user_password,truename,total_point,member_type_id
	$userid->user_password = 'zhaoxin';
	$userDaoTest->updateUser($userid);

//////////////////////////
	$userDaoTest->deleteUser(1);   //删除测试
 ?>