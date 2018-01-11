<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	$user_account = "";
	$user_password = "";
	if (isset($_POST["adc_submit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_account = test_input($_POST["adaccount_c"]);
			$user_password = test_input($_POST["adpwd_c"]);
			$user_rpassword = test_input($_POST["radpwd_c"]);
			$user_truename = test_input($_POST["adtruename_c"]);

			if($user_password != $user_rpassword) {
				echo "<script language='JavaScript'> 
      			alert('两次输入密码不一致！'); 
				self.location='../../views/admin/adProfile.php'; </script> ";
			}

			else {

				$userService = new userService();
				$user = new user();

				$user = $userService->scanSingleUser($user_account);

				$user->user_account = $user_account;
				$user->user_password = $user_password;
				$user->user_truename = $user_truename;

				$userService->userUpdate($user);

				echo "<script type='text/javascript'>
      			alert('修改个人信息成功！');

      			self.location='../../views/admin/admin.php';
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