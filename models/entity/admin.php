<?php 
	require_once __DIR__. '/user.php';
	/**
	* admin
	*/
	class admin extends user
	{
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