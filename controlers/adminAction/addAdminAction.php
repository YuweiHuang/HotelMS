
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
			$set_uauthority = test_input($_POST["adauthority"]);

			$user = new user();
			$userService = new userService();

			$user->username = $set_uname;
			$user->user_account = $set_uaccount;
			$user->user_password = $set_upwd;
			$user->truename = $set_utruename;
			$user->uauthority = $set_uauthority;
			$user->total_point = 0;
			$user->member_type_id = 1;
			$user->delmark = 0;
			$user->register_time = date("Y/m/d");


			$userService->userRegister($user);

			echo "<script type='text/javascript'>
      		alert('添加管理员信息成功！');
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