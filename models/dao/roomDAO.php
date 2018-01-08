<?php
	/**
	*room DAO
	*/
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class roomDao
	{
		/*
		查看房间信息
		input:room_id
		return： room 对象
		*/
		public function findRoomInfoByID($room_id)
		{
			$room =new room();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM roominfo where delmark = 0 AND room_id=
					'$room_id';";
			$result = null;
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$room->room_id = $row['room_id'];
			$room->room_name = $row['room_name'];
			$room->room_type_id = $row['room_type_id'];
			$room->location = $row['location'];
			$room->room_tel = $row['room_tel'];
			$room->delmark = $row['delmark'];

			$dbCon->closeConnect();
  			
  			return $room;
		}

		/*
		查看空房间信息
		input:room_id
		return：room 对象 list
		*/
		public function findEmptyRoom($start_time, $end_time)
		{
			$room =new room();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * 
					FROM roominfo 
					WHERE delmark = 0 AND '$room_Id';";
			$result = null;
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$room->room_id = $row['room_id'];
			$room->room_name = $row['room_name'];
			$room->room_type_id = $row['room_type_id'];
			$room->location = $row['location'];
			$room->room_tel = $row['room_tel'];
			$room->delmark = $row['delmark'];

			$dbCon->closeConnect();
  			
  			return $room;
		}
		public function findRoomInfo()
		{
			
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM roominfo where delmark = 0;";
			$result = null;
			$result = mysqli_query($con,$sql);
			$arrayall =array();
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)
			{
				$room =new room();
				$room->room_id = $row['room_id'];
				$room->room_name = $row['room_name'];
				$room->room_type_id = $row['room_type_id'];
				$room->location = $row['location'];
				$room->room_tel = $row['room_tel'];
				$room->delmark = $row['delmark'];
				array_push($arrayall, $room);
			}
			$dbCon->closeConnect();
  			
  			return $arrayall;
		}
		/*
		添加房间信息
		input:room 对象
		return: 是否添加成功
		*/
		public function addRoom($room)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql ="INSERT INTO roominfo (
					room_name,
					room_type_id,
					location,
					room_tel) VALUES (
					'$room->room_name',
					'$room->room_type_id',
					'$room->location',
					'$room->room_tel');";
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
		用于删除房间
		input:$room_id
		return:是否成功
		*/
		public function deleteRoom($room_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE roominfo SET delmark = 1 WHERE room_id = '$room_id';";

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
		用于更新房间信息
		input:$room
		return:是否成功
		*/
		public function updateRoom($room)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql="UPDATE roominfo SET
			room_name='$room->room_name',
			room_type_id='$room->room_type_id',
			location='$room->location',
			room_tel='$room->room_tel'
			WHERE room_id = '$room->room_id';";

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