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

			$user = $userService->scanSingleUser($user_account);
			$loginStatus = $userService->userLogin($user);

			if($loginStatus === 0)
			{
				echo "<script language='JavaScript'> 
						alert('用户名不存在!'); 
						self.location='../../views/user/userLogin.php';
					  </script> ";
			}
			elseif($loginStatus === 1)
			{
				echo "<script language='JavaScript'> 
						alert('密码错误'); 
						self.location='../../views/user/userLogin.php';
					  </script> ";
			}
			elseif($loginStatus === 2)
			{
				echo "<script language='JavaScript'> 
						alert('权限错误!'); 
						self.location='../../views/user/userLogin.php'; 
					  </script> ";
			}
			else
			{
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['authority'] = $user->authority;
				$_SESSION['register_time'] = $user->register_time;
				$_SESSION['username'] = $user->username;
				$_SESSION['user_account'] = $user->user_account;
				$_SESSION['user_password'] = $user->user_password;
				$_SESSION['truename'] = $user->truename;
				$_SESSION['user_account'] = $user->user_account;
				$_SESSION['total_point'] = $user->total_point;
				$_SESSION['member_type_id'] = $user->member_type_id;
				echo "<script language='JavaScript'> 
						alert('登录成功!'); 
						self.location='../../views/user/welcome.php'; 
					  </script> ";
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