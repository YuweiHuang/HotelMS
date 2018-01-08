<?php 
	/**
	* bill DAO
	*/
	require_once __DIR__.'/../entity/customer.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class customerDao
	{
		/*
		查看住客信息
		input:住客id
		return: customer 对象
		*/
		public function findCustomerInfoByID($customer_id)
		{
			$customer = new customer();
			
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql    = "SELECT * FROM customer WHERE customer_id="'$customer_id'";";
			$result = null;
			$result = mysqli_query($con, $sql);
			$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);

			$customer->customer_id    = $row['customer_id'];
			$customer->user_id        = $row['user_id'];
			$customer->customer_name           = $row['customer_name'];
			$customer->age            = $row['age'];
			$customer->gender         = $row['gender'];
			$customer->country        = $row['country'];
			$customer->city           = $row['city'];
			$customer->phone          = $row['phone'];
			$customer->indentity_type = $row['indentity_type'];
			$customer->indentity      = $row['indentity'];
			$customer->delmark        = $row['delmark'];

  			$dbCon->closeConnect();

  			return $customer;
		}

		/*
		添加住客
		input:customer 对象
		return:是否添加成功
		*/
		public function addCustomer($customer)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO customer (
					user_id,
					customer_name,
					age,
					gender,
					country,
					city,
					phone,
					indentity_type,
					indentity,
					delmark) VALUES ("
					'$customer->user_id'","
					'$customer->customer_name'","
					'$customer->age'","
					'$customer->gender'","
					'$customer->country'","
					'$customer->city'","
					'$customer->phone'","
					'$customer->indentity_type'","
					'$customer->indentity'","
					'$customer->delmark'");";

			if (mysqli_query($con, $sql)) 
			{
				return true;
			}
			else
			{
				echo "error:".$sql."</br>".mysqli_error($con);
				return false;
			}
		}

		/*
		用于删除住客
		input:$customer_id
		return:是否成功
		*/
		public function deleteCustomer($customer_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE customer SET delmark = 1 WHERE customer_id = "'$customer_id'";";

			if (mysqli_query($con, $sql)) 
			{
				return true;
			}
			else
			{
				echo "error:".$sql."</br>".mysqli_error($con);
				return false;
			}
		}

		/*
		用于更新住客信息
		input:$customer
		return:是否成功
		*/
		public function updateCustomer($customer)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE customer SET 
					user_id           = "'$customer->user_id'",
					customer_name              = "'$customer->customer_name'",
					age               = "'$customer->age'",
					gender            = "'$customer->gender'",
					country           = "'$customer->country'",
					city              = "'$customer->city'",
					phone             = "'$customer->phone'",
					indentity_type    = "'$customer->indentity_type'",
					indentity         = "'$customer->indentity'",
					delmark           = "'$customer->delmark'"
					WHERE customer_id = "'$customer->customer_id'";";

			if (mysqli_query($con, $sql)) 
			{
				return true;
			}
			else
			{
				echo "error:".$sql."</br>".mysqli_error($con);
				return false;
			}
		}
	}
 ?>