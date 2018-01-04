<?php 
	/**
	* user
	*/
	class user
	{
		private $user_id;/*用户id*/
		private $authority;/*权限*/
		private $register_time;/*注册时间*/
		private $username;/*用户名*/
		private $account;/*联系方式包括电话和邮箱，作为注册账号*/
		private $password;/*密码*/
		private $truename;/*真实姓名*/
		private $point;/*评分*/
		private $member_type_id;/*会员类型id*/
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