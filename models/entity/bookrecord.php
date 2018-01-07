<?php 
	/**
	* bookrecord
	*/
	class bookrecord
	{
		private $book_record_id;/*预定记录id*/
		private $room_id;/*房间id*/
		private $bill_id;/*订单id*/
		private $in_time;/*入住时间2018-01-01 01:01:01*/
		private $out_time;/*离店时间2018-01-01 01:01:01*/
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