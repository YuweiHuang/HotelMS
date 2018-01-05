<?php 
	/**
	* bill DAO
	*/
	// require_once '../entity/bill.php';
	// require_once '../../commons/dbConnect.php';
	namespace \HotelMS\models\dao;
	
	use \HotelMS\models\entity;
	use \HotelMS\commons;

	class billDao
	{
		
		public function findBillInfoByID($billId)
		{
			$bill = new entity\bill();

			$dbCon = new commons\dbConnect();
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