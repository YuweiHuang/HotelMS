<?php 
	/**
	* bill DAO
	*/
	require_once __DIR__.'/../entity/bill.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class billDao
	{
		
		public function findBillInfoByID($billId)
		{
			$bill = new bill();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();

			$sql = "SELECT * FROM bill WHERE bill_id='$billId'";
			$result = null;
			$result = mysqli_query($dbCon->connect, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$bill->user_id = $row['user_id'];
  			$dbCon->closeConnect();
  			return $bill;
		}
	}
 ?>