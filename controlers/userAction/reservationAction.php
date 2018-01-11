<?php 
	require_once __DIR__.'/../../models/entity/user.php';
	require_once __DIR__.'/../../models/service/functionalService.php';
	session_start();

	if (isset($_POST["accom_submit"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$user_id = 3;
			$room_id = 1; //获取房间id 前端待修改
			$start_date = test_input($_POST["set_dt1"]); //datetimepicker获取起始日期
			$end_date = test_input($_POST["set_dt2"]); //datetimepicker获取结束日期

			$functionalService = new functionalService();
			$result = $functionalService->bookRoom($user_id, $room_id, $start_date, $end_date);

			if($result == true){
				/*
					具体相关操作，alert提示或者跳转
				*/
				echo "<script type='text/javascript'>
	      		self.location='../../views/user/reservation_step3.php';
	      		</script>";
			}
			else{
				/*
					具体相关操作，alert提示或者跳转
				*/
				echo "<script type='text/javascript'>
	      		alert('系统繁忙!请重新选择!');
	      		// self.location='../../views/user/reservation_step2.php';
	      		</script>";
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