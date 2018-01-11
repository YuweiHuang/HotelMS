<?php 
	require_once __DIR__.'/../../models/entity/bill.php';
	require_once __DIR__.'/../../models/service/functionalService.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	// $user_account = "";
	// $user_password = "";
	if (isset($_POST["room_type"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// $user_account = test_input($_POST["uaccount"]);
			// $user_password = test_input($_POST["upwd"]);

			$room_type = test_input($_POST["room_type"]);
			$room_id = test_input($_POST["room_id"]);
            $start_time = test_input($_POST["start_time"]);
            $end_time = test_input($_POST["end_time"]);
            $customer = test_input($_POST["customer"]);
            $phone = test_input($_POST["phone"]);
            $idnumber = test_input($_POST["idnumber"]);
            $price = test_input($_POST["price"]);
            $user_id = $_SESSION["user_id"];
            $total_point = $_SESSION["total_point"];
            $functionalService = new functionalService();
            // echo $user_id;
            // echo 'room_id'+$room_id;
            // echo $start_time;
            // echo $end_time;
            // echo 'hhh:'.$room_id;
			$bookStatus = $functionalService->bookRoom($user_id, $room_id, $start_time, $end_time);
			// $bookStatus = true;
			if($bookStatus)
			{
				$total_point = $total_point + $price;
				$userService = new userService();
				$userService->userChangePoint($user_id, $total_point);
				/*echo "<script language='JavaScript'> 
						alert('预定成功!'); 
						self.location='../../views/user/welcome.php';
					  </script> ";*/
			}
			else
			{
				/*echo "<script language='JavaScript'> 
						alert('预定失败!'); 
						self.location='../../views/user/welcome.php';
					  </script> ";*/
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