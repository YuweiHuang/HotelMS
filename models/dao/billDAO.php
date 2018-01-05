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

			$sql = "SELECT * FROM bill WHERE bill_id=".$billId.";";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$bill->user_id = $row['user_id'];
  			$bill->totalroom = $row['totalroom'];
  			$bill->money = $row['money'];
  			$bill->book_time = $row['book_time'];
  			$bill->point = $row['point'];
  			$bill->evaluate_score = $row['evaluate_score'];
  			$bill->evaluate_words = $row['evaluate_words'];
  			$bill->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $bill;
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
					money, 
					book_time, 
					point, 
					evaluate_score, 
					evaluate_words, 
					delmark) VALUES ("
					.$bill->user_id.","
					.$bill->totalroom.","
					.$bill->money.","
					.$bill->book_time.","
					.$bill->point.","
					.$bill->evaluate_score.","
					.$bill->evaluate_words.","
					.$bill->delmark.");";

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
		用于删除订单
		input:$bill_id
		return:是否成功
		*/
		public function deleteBill($bill_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE bill SET delmark = 1 WHERE bill_id = ".$bill_id.";";

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
					totalroom = ".$bill->totalroom.",
					money = ".$bill->money.",
					evaluate_score = ".$bill->evaluate_score.",
					evaluate_words = ".$bill->evaluate_words."
					WHERE bill_id = ".$bill->bill_id.";";

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