<?php 
	/**
	* customer
	*/
	class customer
	{
		private $customer_id;/*住客id*/
		private $user_id;/*预订人id*/
		private $name;/*姓名*/
		private $age;/*年龄*/
		private $gender;/*性别*/
		private $country;/*国家*/
		private $city;/*城市*/
		private $indentity_type;/*登记证件类型*/
		private $indentity;/*证件号码*/
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