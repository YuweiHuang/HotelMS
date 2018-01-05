<?php 
	/**
	* connect to database
	*/
	namespace HotelMS\commons;

	class dbConnect
	{
		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		private $basename = 'hotelms';
		private $connect = null;
		
		// public function __construct($host, $username, $password, $basename)
		// {
		// 	$this->$host = 'localhost';
		// 	$this->$username = 'root';
		// 	$this->$password = '';
		// 	$this->$basename = 'hotelms';
		// }
		public function initConnnect()
		{

			$this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->basename);
			if (!$this->connect) {
				die('connect error: '.mysqli_connect_error());
			}
			mysqli_set_charset($this->connect, 'utf8');
		}

		public function closeConnect()
		{
			$this->connect = mysqli_close($this->connect);
		}
	}
 ?>