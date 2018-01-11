
<!-- 删除管理员信息 -->


<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/userService.php';


		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_id = test_input($_POST["getId"]);

			$userService = new userService();

			$userService->deleteUserOrAdmin($user_id);

			

		}
	

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>