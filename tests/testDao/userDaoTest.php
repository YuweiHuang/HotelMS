<?php 

	require_once __DIR__.'/../../models/dao/userDao.php';
	require_once __DIR__.'/../../models/entity/user.php';

	$userDaoTest = new userDao();
	$user = new user();
	$user = $userDaoTest->findUserInfoByID(1);

	echo $user->account;
 ?>