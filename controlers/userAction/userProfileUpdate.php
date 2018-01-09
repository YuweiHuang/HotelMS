<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	$user_account = "";
	$user_password = "";
	if (isset($_POST["uc_submit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_account = test_input($_SESSION["user_account"]);
			$user_password = test_input($_POST["password_new"]);
			$user_rpassword = test_input($_POST["rpassword_new"]);
			// $user_truename = test_input($_POST["truename_new"]);

			if($user_password != $user_rpassword) {
				echo "<script language='JavaScript'> 
      			alert('两次输入密码不一致！'); 
				self.location='../../views/user/userProfile.php'; </script> ";
			}

			else {

				$userService = new userService();
				$user = new user();

				$user = $userService->scanSingleUser($user_account);

				$user->user_account = $user_account;
				$user->user_password = $user_password;
				// $user->user_truename = $user_truename;

				$userService->userUpdate($user);

				echo "<script type='text/javascript'>
      			alert('修改密码成功！');
      			self.location='../../views/user/welcome.php';
      			</script>";
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