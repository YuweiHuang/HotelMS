<?php 
	/**
	* membertype DAO
	*/
	require_once __DIR__.'/../entity/membertype.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class membertypeDao
	{
		/*
		查看会员类型
		input:会员类型id
		return: membertype 对象
		*/
		public function findMembertypeInfoByID($member_type_id)
		{
			$membertype = new membertype();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM membertype WHERE member_type_id="'$member_type_id'";";

			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$membertype->member_type_id = $row['member_type_id'];
  			$membertype->member_type = $row['member_type'];
  			$membertype->discount = $row['discount'];
  			$membertype->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $membertype;
		}

		/*
		input:membertype 对象
		return:是否添加成功
		*/
		public function addMembertype($membertype)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO membertype (
					member_type, 
					discount,  
					delmark) VALUES ("
					'$membertype->member_type'","
					'$membertype->discount'","
					'$membertype->delmark'");";

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
		用于删除会员类型
		input:$membertype_id
		return:是否成功
		*/
		public function deleteMembertype($member_type_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE membertype SET delmark = 1 WHERE member_type_id = "'$member_type_id'";";

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
		用于修改会员类型信息
		input:$membertype
		return:是否成功
		*/
		public function updateMembertype($membertype)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE membertype SET 
					member_type = "'$membertype->member_type'",
					discount = "'$membertype->discount'",
					WHERE member_type_id = "'$membertype->member_type_id'";";
					
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