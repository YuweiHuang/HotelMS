
<!-- 添加管理员信息 -->


<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';

	if (isset($_POST["adr_submit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$set_utruename = test_input($_POST["adtruename"]);
			$set_uname = test_input($_POST["adname"]);
			$set_uaccount = test_input($_POST["account"]);
			$set_upwd = test_input($_POST["radpwd"]);

			$user = new user();
			$userService = new userService();

			$user->username = $set_uname;
			$user->user_account = $set_uaccount;
			$user->user_password = $set_upwd;
			$user->truename = $set_utruename;
			$user->authority = 1;
			$user->total_point = 0;
			$user->member_type_id = 1;
			$user->delmark = 0;
			date_default_timezone_set('PRC');     //这里设置了时区
            $user->register_time = date("Y-m-d H:i:s");//
			$userService->userRegister($user);
			echo "<script type='text/javascript'>
      		
      		self.location='../../views/admin/admindel.php';
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