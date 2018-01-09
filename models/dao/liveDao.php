<?php 
	/**
	* bill DAO
	*/
	require_once __DIR__.'/../entity/live.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class liveDao
	{
		/*
		查看住宿登记信息
		input:登记id
		return: live 对象
		*/
		public function findLiveInfoByID($live_id)
		{
			$live = new live();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM live WHERE live_id='$live_id';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  			$live->live_id = $row['live_id'];
  			$live->bill_id = $row['bill_id'];
  			$live->room_id = $row['room_id'];
  			$live->customer_id = $row['customer_id'];
  			$live->user_id = $row['user_id'];
  			$live->in_time = $row['in_time'];
  			$live->check_time = $row['check_time'];
  			$live->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $live;
		}

		/*
		查看住宿登记信息
		input:登记id
		return: live 对象
		*/
		public function findLiveInfoByBillID($bill_id)
		{
			$live = new live();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM live WHERE bill_id='$bill_id';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  			$live->live_id = $row['live_id'];
  			$live->bill_id = $row['bill_id'];
  			$live->room_id = $row['room_id'];
  			$live->customer_id = $row['customer_id'];
  			$live->user_id = $row['user_id'];
  			$live->in_time = $row['in_time'];
  			$live->check_time = $row['check_time'];
  			$live->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $live;
		}

		/*
		添加登记
		input:live 对象
		return:是否添加成功
		*/
		public function addLive($live)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO live (
					bill_id,
					room_id,
					customer_id,
					user_id,
					in_time,
					check_time,
					delmark) VALUES (
					'$live->bill_id',
					'$live->room_id',
					'$live->customer_id',
					'$live->user_id',
					'$live->in_time',
					'$live->check_time',
					'$live->indentity_type',
					'$live->indentity',
					'$live->delmark');";

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
		input:$live_id
		return:是否成功
		*/
		public function deleteLive($live_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE live SET delmark = 1 WHERE live_id = '$live_id';";

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
		input:$live
		return:是否成功
		*/
		public function updateLive($live)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE live SET 
					bill_id = '$live->bill_id',
					room_id = '$live->room_id',
					customer_id = '$live->customer_id',
					user_id = '$live->user_id',
					in_time = '$live->in_time',
					check_time = '$live->check_time',
					delmark = '$live->delmark'
					WHERE live_id = '$live->live_id';";

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