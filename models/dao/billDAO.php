<?php 
	/**
	* bill DAO
	*/
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class billDao
	{
		/*
		input:订单id
		return: bill 对象
			包括花费、总房间数量、积分、评语等
		*/
		public function findBillInfoByID($billId)
		{
			$bill = new bill();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM bill WHERE bill_id='$billId';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$bill->user_id = $row['user_id'];
  			$bill->total_cost = $row['total_cost'];
  			$bill->book_time = $row['book_time'];
  			$bill->total_point = $row['total_point'];
  			$bill->evaluate_score = $row['evaluate_score'];
  			$bill->evaluate_words = $row['evaluate_words'];
  			$bill->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $bill;
		}

		/*
		input:用户id
		return: bill 对象 array(可能为空数组)
			包括花费、总房间数量、积分、评语等
		*/
		public function findAllBillInfoByUserID($userid)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM bill WHERE user_id = '$userid';";
			$result = null;
			$result = mysqli_query($con, $sql);
			
			$all_bill = array();

			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$bill = new bill();
					$bill->bill_id = $row['bill_id'];
					$bill->user_id = $row['user_id'];
		  			$bill->total_cost = $row['total_cost'];
		  			$bill->book_time = $row['book_time'];
		  			$bill->total_point = $row['total_point'];
		  			$bill->evaluate_score = $row['evaluate_score'];
		  			$bill->evaluate_words = $row['evaluate_words'];
		  			$bill->delmark = $row['delmark'];
		  			array_push($all_bill, $bill);
				}
			} 
			
  			$dbCon->closeConnect();
  			// echo $all_bill;
  			return $all_bill;
		}

		/*
		input:bill 对象
		return:是否添加成功
		*/
		public function addBill($bill)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO bill (
					user_id, 
					totalroom, 
					total_cost, 
					book_time, 
					total_point, 
					evaluate_score, 
					evaluate_words, 
					delmark) VALUES (
					'$bill->user_id',
					'$bill->totalroom',
					'$bill->total_cost',
					'$bill->book_time',
					'$bill->total_point',
					'$bill->evaluate_score',
					'$bill->evaluate_words',
					'$bill->delmark');";

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
		input:bill 对象
		return:bill_id (0表示满意插入成功)
		*/
		public function addBillAndGetID($bill)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO bill (
					user_id, 
					totalroom, 
					total_cost, 
					book_time, 
					total_point, 
					evaluate_score, 
					evaluate_words, 
					delmark) VALUES (
					'$bill->user_id',
					'$bill->totalroom',
					'$bill->total_cost',
					'$bill->book_time',
					'$bill->total_point',
					'$bill->evaluate_score',
					'$bill->evaluate_words',
					'$bill->delmark');";

			if (mysqli_query($con, $sql)) 
			{
				return mysqli_insert_id($con);
			}
			else
			{
				echo "error:".$sql."</br>".mysqli_error($con);
				return 0;
			}
		}

		/*
		用于删除订单
		input:$bill_id
		return:是否成功
		*/
		public function deleteBill($bill_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE bill SET delmark = 1 WHERE bill_id = '$bill_id';";

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
		用于评价订单
		input:$bill
		return:是否成功
		*/
		public function updateBill($bill)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE bill SET 
					totalroom = '$bill->totalroom',
					total_cost = '$bill->total_cost',
					evaluate_score = '$bill->evaluate_score',
					evaluate_words = '$bill->evaluate_words'
					WHERE bill_id = '$bill->bill_id';";

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