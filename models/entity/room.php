<?php 
	/**
	* room
	*/
	class room
	{
		private $room_id;/*房间id*/
		private $room_name;/*房间号*/
		private $room_type_id;/*房间类型id*/
		private $location;/*位置*/
		private $room_tel;/*房间电话*/
		private $in_time;/*入住时间*/
		private $out_time;/*离开时间*/
		private $delmark;/*是否删除*/
		
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