<?php
	/**
	*room DAO
	*/
	require_once __DIR__.'/../entity/bookrecord.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class bookrecordDao
	{
		/*
		查看某订单的预定记录
		input: bill_id
		return: book record object
		*/
		public function findBookRecordByBillID($bill_id)
		{
			$bookrecord = new bookrecord();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * 
					FROM bookrecord 
					WHERE bill_id = '$bill_id' AND delmark = 0;";
			$result = null;
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$bookrecord->book_record_id = $row['book_record_Id'];
			$bookrecord->room_id        = $row['room_id'];
			$bookrecord->in_time        = $row['in_time'];
			$bookrecord->out_time       = $row['out_time'];
			$bookrecord->delmark        = $row['delmark'];

			$dbCon->closeConnect();
  			
  			return $bookrecord;
		}

		/*
		查看某房间的预定记录
		input: room_id
		return: book record object list
		*/
		public function findAllBookRecordByRoomID($room_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * 
					FROM bookrecord 
					WHERE delmark = 0 AND room_id = '$room_id';";
			$result = null;
			$result = mysqli_query($con, $sql);
			$all_records = array();

			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$bookrecord                 = new bookrecord();
					$bookrecord->book_record_id = $book_record_Id;
					$bookrecord->room_id        = $row['room_id'];
					$bookrecord->in_time        = $row['in_time'];
					$bookrecord->out_time       = $row['out_time'];
					$bookrecord->delmark        = $row['delmark'];

		  			array_push($all_records, $bookrecord);
				}
			} 

  			$dbCon->closeConnect();

  			return $all_records;
		}
		
		/*
		查看空房间
		input:$start_time, $end_time 入住的开始结束时间
		return：room_id list
		*/
		public function findEmptyRoomList($start_time, $end_time)
		{
			// $room =new room();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT room_id
					FROM roominfo
					WHERE room_id NOT IN
					(
						SELECT room_Id 
						FROM bookrecord 
						WHERE delmark = 0 
							AND (
									(in_time BETWEEN '$start_time' AND '$end_time') 
									OR 
									(out_time BETWEEN '$start_time' AND '$end_time')
								)
					) AND delmark = 0;";
			$result = null;
			$result = mysqli_query($con, $sql);
			$all_empty_room = array();

			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
		  			array_push($all_empty_room, $row);
				}
			} 

			$dbCon->closeConnect();
  			
  			return $all_empty_room;
		}

		/*
		添加预定记录
		input: bookrecord 对象
		return: 是否添加成功
		*/
		public function addBookRecord($bookrecord)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql ="INSERT INTO bookrecord (
					room_id,
					bill_id,
					in_time,
					out_time,
					delmark) VALUES (
					'$bookrecord->room_id',
					'$bookrecord->bill_id',
					'$bookrecord->in_time',
					'$bookrecord->out_time',
					'$bookrecord->delmark');";
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
		用于删除预定信息
		input:$room_id
		return:是否成功
		*/
		public function delBookRecord($bill_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE bookrecord SET delmark = 1 WHERE bill_id = '$bill_id';";

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
		用于更新预定信息，比如修改日期等
		input:$bookrecord
		return:是否成功
		*/
		public function updateBookRecord($bookrecord)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE bookrecord 
					SET
						room_id    = '$bookrecord->room_id',
						bill_id = '$bookrecord->bill_id',
						in_time     = '$bookrecord->in_time',
						room_tel     = '$bookrecord->room_tel',
						in_time      = '$bookrecord->in_time',
						out_time         = '$bookrecord->out_time',
						delmark      = '$bookrecord->delmark'
					WHERE bill_id = '$bookrecord->bill_id';";

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