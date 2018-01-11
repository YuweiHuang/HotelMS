<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	if($_POST['choose']==1)
		$_SESSION['user_id'] = $_POST['getId'];
	else
		unset($_SESSION['user_id']);
 ?>