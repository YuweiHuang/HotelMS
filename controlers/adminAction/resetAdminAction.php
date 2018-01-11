<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';


		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_id = test_input($_POST["getId"]);
			$register_time = test_input($_POST["register_time"]);
			$password = test_input($_POST["password"]);
			$account = test_input($_POST["account"]);
		
			$truename = test_input($_POST["truename"]);
			$point = test_input($_POST["point"]);
			$member_type_id = test_input($_POST["member_type_id"]);


			$userService = new userService();

			$user = new user();
			$user->user_id = $user_id;
			$user->authority = 0;
			$user->register_time= $register_time;
			$user->user_password = $password;
			$user->user_account = $account;
			
			$user->truename = $truename;
			$user->total_point = $point;
			$user->member_type_id = $member_type_id;
			$user->delmark = 0;

			$userService->userUpdate($user);

	
		}
	

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>