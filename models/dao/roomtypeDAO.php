<?php
	/**
	*roomtype DAO
	*/
	require_once __DIR__.'/../entity/roomtype.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class roomtypeDao 
	{
		/*
		查看房间类型信息
		input:room_type_id
		return: roomtype 对象
		*/
		public function findRoomtypeInfoByID($room_type_id)
		{
			$roomtype = new roomtype();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM roomtype WHERE room_type_id='$room_type_id';";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  			$roomtype->room_type_id = $row['room_type_id'];
  			$roomtype->room_type = $row['room_type'];
  			$roomtype->bedwidth = $row['bedwidth'];
  			$roomtype->roomarea = $row['roomarea'];
  			$roomtype->wifi = $row['wifi'];
  			$roomtype->bathroom =$row['bathroom'];
  			$roomtype->addbed =$row['addbed'];
  			$roomtype->occupantnum =$row['occupantnum'];
  			$roomtype->price = $row['price'];
  			$roomtype->deposit = $row['deposit'];
  			$roomtype->delmark =$row['delmark'];

  			$dbCon->closeConnect();

  			return $roomtype;
		}



		/*
		添加房间类型
		input:roomtype 对象
		return:是否添加成功
		*/


		public function addRoomtype($roomtype)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO rooomtype (
					room_type,
					bedwidth,
					roomarea,
					wifi,
					bathroom,
					addbed,
					occupantnum,
					price,
					deposit) VALUES (
					'$roomtype->room_type',
					'$roomtype->bedwidth',
					'$roomtype->roomarea',
					'$roomtype->wifi',
					'$roomtype->bathroom',
					'$roomtype->addbed',
					'$roomtype->occupantnum',
					'$roomtype->price',
					'$roomtype->deposit')";

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
		用于删除房间类型
		input:$room_type__id
		return:是否成功
	*/

	public function deleteCustomer($room_type__id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE roomtype SET delmark = 1 WHERE room_type__id = '$room_type__id';";

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
		用于更新房间类型信息
		input:$roomtype
		return:是否成功
		*/
		public function updateRoomtype($roomtype)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE roomtype SET
					room_type = '$roomtype->room_type',
					bedwidth = '$roomtype->bedwidth',
					roomarea = '$roomtype->roomarea',
					wifi = '$roomtype->wifi',
					bathroom = '$roomtype->bathroom' ,
					addbed = '$roomtype->addbed',
					occupantnum = '$roomtype->occupantnum',
					price = '$roomtype->price',
					deposit = '$roomtype->deposit'
					WHERE room_type_id = '$roomtype->room_type_id'";
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