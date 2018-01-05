<?php 
	/**
	* bill
	*/
	
	class bill
	{
		private $bill_id;/*订单id*/
		private $user_id;/*预订人id*/
		private $totalroom;/*总的房间数量*/
		private $money;/*总花费*/
		private $book_time;/*预订时间*/
		private $point;/*积分*/
		private $evaluate_score;/*评分*/
		private $evaluate_words;/*评语*/
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