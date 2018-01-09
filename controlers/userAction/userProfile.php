<?php 
	require_once __DIR__.'/../../models/service/userService.php';
	require_once __DIR__.'/../../models/entity/user.php';

	// require_once __DIR__.'/../entity/user.php';
	session_start();
	$user = new user();
	$userService = new userService();
	$user_account = $_SESSION['user_account'];
	$user = $userService->scanSingleUser($user_account);
	$userData = array(
			'name' => $user->username, 
			'account' => $user->user_account,
			'password' => $user->user_password,
			'truename' => $user->truename,
			'point' => $user->total_point,
			'member_type' => $user->member_type_id);
	echo json_encode($userData);
 ?>