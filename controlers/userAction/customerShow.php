<?php 
	require_once __DIR__.'/../../models/service/userService.php';
	require_once __DIR__.'/../../models/entity/user.php';

	session_start();
	$user = new user();
	$userService = new userService();
	$user_id = $_SESSION['user_id'];
	$userList = $userService->scanAllCustomerByUser($user_id);

	echo json_encode($userList);
 ?>