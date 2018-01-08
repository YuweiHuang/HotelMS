<?php
	/**
	*user DAO
	*/
	require_once __DIR__.'/../entity/user.php';
	require_once __DIR__.'/../../commons/dbConnect.php';

	class userDao
	{
		
		/*
		查看用户信息
		input:用户id
		return: user 对象
		*/
		public function findUserInfoByID($user_id)
		{
			$user = new user();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM userinfo WHERE user_id="'$user_id'";";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$user->user_id = $row['user_id'];
  			$user->authority = $row['authority'];
  			$user->register_time = $row['register_time'];
  			$user->user_account = $row['user_account'];
  			$user->user_password = $row['user_password'];
  			$user->truename = $row['truename'];
  			$user->total_point = $row['total_point'];
  			$user->member_type_id = $row['member_type_id'];
  			$user->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $user;

		}

		public function findUserInfoByAccount($user_account)
		{
			$user = new user();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM userinfo WHERE accouser_accountunt="'$user_account'";";
			$result = null;
			$result = mysqli_query($con, $sql);
  			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  			$user->user_id = $row['user_id'];
  			$user->authority = $row['authority'];
  			$user->register_time = $row['register_time'];
  			$user->user_account = $row['user_account'];
  			$user->user_password = $row['user_password'];
  			$user->truename = $row['truename'];
  			$user->total_point = $row['total_point'];
  			$user->member_type_id = $row['member_type_id'];
  			$user->delmark = $row['delmark'];

  			$dbCon->closeConnect();

  			return $user;

		}
		/*
		*查看所有用户信息
		*返回array数组
		*/



		public function findUserInfo()
		{
			$user = new user();

			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "SELECT * FROM userinfo";
			$result = null;
			$result = mysqli_query($con, $sql);
			$arrayall =array();
  			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  			{
  				$user->user_id = $row['user_id'];
  				$user->authority = $row['authority'];
  				$user->register_time = $row['register_time'];
  				$user->user_account = $row['user_account'];
  				$user->user_password = $row['user_password'];
  				$user->truename = $row['truename'];
  				$user->total_point = $row['total_point'];
  				$user->member_type_id = $row['member_type_id'];
  				$user->delmark = $row['delmark'];
  				array_push($arrayall, $user);
			}
  			$dbCon->closeConnect();

  			return $arrayall;

		}
		/*
		添加用户
		input:user 对象
		return:是否添加成功
		*/
		public function addUser($user)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "INSERT INTO userinfo(
				 	authority,
				 	register_time,
				 	username,
				 	user_account,
					user_password,
					truename,
					total_point,
					member_type_id,
					delmark ) VALUES ("
					'$user->authority'","
					'$user->register_time'","
					'$user->username'","
					'$user->user_account'","
					'$user->user_password'","
					'$user->truename'","
					'$user->total_point'","
					'$user->member_type_id'","
					'$user->delmark'");";          

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
		用于删除用户
		input:$user_id
		return:是否成功
		*/
		public function deleteUser($user_id)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql = "UPDATE userinfo SET delmark = 1 WHERE user_id = "'$user_id'";";

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
		用于更新用户信息
		input: $user
		return:是否成功
		*/
		public function updateUser($user)
		{
			$dbCon = new dbConnect();
			$dbCon->initConnnect();
			$con = $dbCon->connect;

			$sql="UPDATE userinfo SET
					authority = "'$user->authority'",
				 	register_time = "'$user->register_time'",
				 	username = "'$user->username'",
				 	user_account = "'$user->user_account'",
					user_password = "'$user->user_password'",
					truename = "'$user->truename'",
					total_point = "'$user->total_point'",
					member_type_id = "'$user->member_type_id'",
					delmark = "'$user->delmark'"
					WHERE user_id = "'$user->user_id'";";


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