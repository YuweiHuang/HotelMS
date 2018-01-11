
<!-- 删除用户信息 -->


<?php 
	require_once __DIR__.'/../../models/entity/room.php';
	require_once __DIR__.'/../../models/service/productService.php';


		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$room_id = test_input($_POST["getId"]);

			$productService = new productService();

			$productService->deleteRoom($room_id);

		}
	

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>