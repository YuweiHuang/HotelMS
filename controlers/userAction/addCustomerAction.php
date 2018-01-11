<?php 
	require_once __DIR__.'/../../models/entity/customer.php';
	require_once __DIR__.'/../../models/service/userService.php';
	session_start();
	if (isset($_POST["name_c"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$name_c = test_input($_POST["name_c"]);
			$tel = test_input($_POST["tel"]);
			$age = test_input($_POST["age"]);
			$gender = test_input($_POST["gender"]);
			$country = test_input($_POST["country"]);
			$city = test_input($_POST["city"]);
			$IDnum = test_input($_POST["IDnum"]);
			// $select_id_type = test_input($_POST["select_id_type"]);

			$customer = new customer();
			$userService = new userService();

			
			$customer->user_id = $_SESSION['user_id'];
			$customer->customer_name = $name_c;
			$customer->age = $age;
			$customer->gender = get_gender($gender);
			$customer->country = $country;
			$customer->city = $city;
			$customer->phone = $tel;
			$customer->indentity_type = 0;
			$customer->indentity = $IDnum;
			$customer->delmark = 0;


			$userService->customerAdd($customer);

			echo "<script type='text/javascript'>
      		alert('添加住客信息成功！hhhh ');
      		self.location='../../views/user/reservation.php';
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

	function get_gender($gender)
	{
		if($gender=='男')
			return 1;
		else
			return 0;
	}
 ?>