<?php 

	require_once __DIR__.'/../../models/service/userService.php';
	require_once __DIR__.'/../../models/dao/userDAO.php';
	require_once __DIR__.'/../../models/entity/user.php';

	$userService = new userService();
	$userdao=new userDao();
	//$userList = $userdao->findUserInfo();
	$userList1 = $userService->scanAllUser(1);

	
	

	
	
	// echo "hcb";
	// header("content-type:application/json"); 
	//echo json_encode($userList,JSON_UNESCAPED_UNICODE); 
	echo json_encode($userList1); 
?>