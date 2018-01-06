<?php 
	/**
	* customer
	*/
	class customer
	{
		private $customer_id;/*住客id*/
		private $bill_id;/*订单id*/
		private $room_id;/*入住房间id*/
		private $name;/*姓名*/
		private $age;/*年龄*/
		private $gender;/*性别*/
		private $indentity_type;/*登记证件类型*/
		private $indentity;/*证件号码*/
		private $in_time;/*入住时间*/
		private $check_time;/*结算时间*/
		private $user_id;/*预订人id*/
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