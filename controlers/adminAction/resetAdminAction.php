<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	$user_account = "";
	$user_password = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_id = test_input($_POST["getId"]);
			$password = test_input($_POST["password"]);
			$account = test_input($_POST["account"]);
			$username = test_input($_POST["username"]);
			$member_type_id = test_input($_POST["member_type_id"]);
			$truename = test_input($_POST["truename"]);
			$point = test_input($_POST["point"]);

				$userService = new userService();
				$user = new user();
				
				$user->user_id = $user_id;
				$user->user_password = $password;
				$user->user_truename = $truename;
				$user->total_point = $point;
				$user->member_type_id = $member_type_id;
				$userService->userUpdate($user);

				echo "<script type='text/javascript'>
      			alert('修改成功！');
      			self.location='../../views/admin/admin.php';
      			</script>";
			}
			
		}
	

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>