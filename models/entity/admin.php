<?php 
	require 'user.php'
	/**
	* admin
	*/
	class admin extends user
	{
		private $admin_id = parent::$user_id;
		
		public function __get($key)
	    {
	        return $this->$key;
	    }

	    public function __set($key, $value)
	    {
	        $this->$key = $value;
	    }
	}
 ?>