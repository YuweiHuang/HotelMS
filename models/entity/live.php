<?php 
	/**
	* live
	*/
	class live
	{
		private $live_id;/*住客id*/
   		private $bill_id;/*订单id*/
   		private $room_id;/*入住房间id*/
   		private $customer_id;/*住客id*/
   		private $user_id;/*预订人id*/
   		private $in_time;/*入住时间*/
   		private $check_time;/*结算时间*/
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