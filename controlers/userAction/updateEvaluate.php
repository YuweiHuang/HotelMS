<?php 
	require_once __DIR__.'/../../models/entity/bill.php';
	require_once __DIR__.'/../../models/service/functionalService.php';
	// session_start();
	// $user_account = "";
	// $user_password = "";
	if (isset($_POST["getId"])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// $user_account = test_input($_SESSION["user_account"]);
			$bill_id = test_input($_POST["getId"]);
			$comment = test_input($_POST["comment"]);
			$point = test_input($_POST["point"]);
			// $user_truename = test_input($_POST["truename_new"]);


			$functionalService = new functionalService();
			$bill = new bill();

			// $bill = $functionalService->scanSingleUser($user_account);
			if($functionalService->evaluateBill($bill_id,$point,$comment))
			{
				echo "<script type='text/javascript'>
  			alert('修改成功！');
  			self.location='../../views/user/myOrder.php';
  			</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
  			alert('修改失败！');
  			self.location='../../views/user/myOrder.php';
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