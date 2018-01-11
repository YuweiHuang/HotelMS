
<!-- 添加房间信息 -->


<?php 
	require_once __DIR__.'/../../models/entity/room.php';
	require_once __DIR__.'/../../models/service/productService.php';

	if (isset($_POST["submit_add"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$set_rname = test_input($_POST["set_rid"]);
			$set_rtype = test_input($_POST["set_rtype"]);
			$set_rlocation = test_input($_POST["set_rlocation"]);
			$set_rtel = test_input($_POST["set_rtel"]);
			$set_rdelmark = 0;

			if($set_rtype == "普通大床房"){
				$set_rtype=1;
			}
			if($set_rtype == "精选大床房"){
				$set_rtype=2;
			}
			if($set_rtype == "豪华大床房"){
				$set_rtype=3;
			}
			if($set_rtype == "商务大床房"){
				$set_rtype=4;
			}
			if($set_rtype == "豪华套房"){
				$set_rtype=5;
			}
			if($set_rtype == "总统套房"){
				$set_rtype=6;
			}

			$room = new room();
			$productService = new productService();

			$room->room_name = $set_rname;
			$room->room_type_id = $set_rtype;
			$room->location = $set_rlocation;
			$room->room_tel = $set_rtel;
			$room->delmark = $set_rdelmark;

			$productService->addRoom($room);

			echo "<script type='text/javascript'>
      		
      		self.location='../../views/admin/roomadmindel.php';
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