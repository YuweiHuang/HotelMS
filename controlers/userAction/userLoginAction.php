<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	$user_account = "";
	$user_password = "";
	if (isset($_POST["c_submit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_account = test_input($_POST["uaccount"]);
			$user_password = test_input($_POST["upwd"]);
			$userService = new userService();
			$user = new user();
			$user->user_account = $user_account;
			$user->user_password = $user_password;
			$user->authority = 0;

			$loginStatus = $userService->userLogin($user);

			if($loginStatus === 0)
			{
				echo "<script language='JavaScript'> 
						alert('用户名不存在!'); 
						self.location='../../views/user/userLogin.html';
					  </script> ";
			}
			elseif($loginStatus === 1)
			{
				echo "<script language='JavaScript'> 
						alert('密码错误'); 
						self.location='../../views/user/userLogin.html';
					  </script> ";
			}
			elseif($loginStatus === 2)
			{
				echo "<script language='JavaScript'> alert('权限错误!'); 
				self.location='../../views/user/welcome.html'; </script> ";
			}
			else
			{
				$_SESSION['user_account'] = $user_account;
				$_SESSION['user_password'] = $user_password;
				echo "<script language='JavaScript'> alert('登录成功!'); 
				self.location='../../views/user/welcome.html'; </script> ";
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