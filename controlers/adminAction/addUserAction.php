
<!-- 添加用户信息 -->


<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';

	if (isset($_POST["submit_addu"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$set_utruename = test_input($_POST["set_utruename"]);
			$set_uname = test_input($_POST["set_uname"]);
			$set_uaccount = test_input($_POST["set_uaccount"]);
			$set_upwd = test_input($_POST["set_upwd"]);
			$set_uauthority = test_input($_POST["set_uauthority"]);

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
      		alert('添加用户信息成功！');
      		self.location='../html/admin.php';
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