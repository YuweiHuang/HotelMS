<?php 
	/**
	* 
	*/
	class membertype
	{
		private $member_type_id;/*会员类型id*/
		private $member_type;/*会员类型*/
		private $discount;/*折扣*/
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