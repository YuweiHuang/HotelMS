<?php 
	require_once __DIR__.'/../../models/entity/room.php';
	require_once __DIR__.'/../../models/service/productService.php';


		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$room_id = test_input($_POST["getId"]);
			$room_name = test_input($_POST["room_name"]);
			$room_type_id = test_input($_POST["room_type_id"]);
			$location = test_input($_POST["location"]);
			$room_tel = test_input($_POST["room_tel"]);


			$productService = new productService();
			$room = new room();

			$room->room_id = $room_id;
			$room->room_name = $room_name;
			$room->room_type_id = $room_type_id;
			$room->location = $location;
			$room->room_tel = $room_tel;
			 
			$productService->updateRoom($room);
	
		}
	

	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
 ?>