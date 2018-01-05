<?php
	/**
	*room DAO
	*/
	require_once __DIR__.'/../entity/room.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class roomDao
	{
		
		public function  findRoomInfoByID($roomId)
		{
			$room =new room();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();

			$sql = "SELECT * FROM roominfo where room_id='$roomId'";
			$result = null;
			$result = mysqli_query($dbCon->connect,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$room->room_id = $roomId;
			$room->room_type_id = $row['room_type_id'];
			$room->location = $row['location'];
			$room->room_tel = $row['room_tel'];
			$room->in_time = $row['in_time'];
			$room->days = $row['days'];
			$dbCon->closeConnect();
  			return $room;
		}
	}
?>