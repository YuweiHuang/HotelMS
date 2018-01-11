<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();

	if (isset($_POST["rsubmit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$truename = test_input($_POST["rname"]);
			$user_account = test_input($_POST["raccount"]);
			$user_password = test_input($_POST["rpwd"]);
			$user_rpassword = test_input($_POST["rrpwd"]);

			if($user_password != $user_rpassword) {
				echo "<script language='JavaScript'> 
      			alert('两次输入密码不一致！'); 
				self.location='../../views/user/userRegister.php'; </script> ";
			}
			else{

				$userService = new userService();
				$user = new user();

				$user->truename = $truename;
				$user->user_account = $user_account;
				$user->user_password = $user_password;
				$user->username = "";
				$user->authority = 0;
				$user->total_point = 0;
				$user->register_time = date("Y-m-d H:i:s");
				$user->member_type_id = 1;
				$user->delmark=0;

				$result = $userService->userRegister($user);
				if($result == true){
					echo "<script language='JavaScript'> 
      				alert('注册成功！');  
					self.location='../../views/user/userLogin.php'; </script> ";
				}else{
					echo "<script language='JavaScript'> 
      				alert('用户已存在！'); 
					self.location='../../views/user/userRegister.php'; </script> ";
				}
			}

			
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