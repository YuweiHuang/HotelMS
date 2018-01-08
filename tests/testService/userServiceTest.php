<?php
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/dao/userDao.php';
	require_once __DIR__.'/../../models/service/userService.php';


	$userServiceTest = new userService();
	$adduser  = new user();

	$adduser->authority = 0;
	$adduser->register_time = '2018-01-12 01:01:01';
	$adduser->user_account = '156';
	$adduser->user_password = 'zxy';
	$adduser->total_point = 0;
	$adduser->member_type_id = 1;

//	$userServiceTest->userRegister($adduser);

	$user = new user();
	$user->user_id = 4;
	$user->user_password = 'zxyz';
	$user->authority = 0;
	$user->username = 'zzz';
	$user->truename = 'zhaoxinyu';
	$user->total_point = 10;
	$user->member_type_id = 2;

	//$userServiceTest->userLogin($user);
//	$userServiceTest->userUpdate($user);
//	$userServiceTest->deleteUserOrAdmin(4);
	$array = $userServiceTest->scanAllUser();
	$num = count($array); 
	for($i=0;$i<$num;++$i){ 
		echo $array[$i]->user_account.'<br />'; 
	} 











?>