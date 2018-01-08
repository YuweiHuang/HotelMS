<?php 
	/**
	* bill
	*/
	
	class bill
	{
		private $bill_id;/*订单id*/
		private $user_id;/*预订人id*/
		private $total_cost;/*总花费*/
		private $book_time;/*预订时间*/
		private $total_point;/*积分*/
		private $evaluate_score;/*评分*/
		private $evaluate_words;/*评语*/
		private $delmark;/*是否删除*/  

		function __construct($user_id, $total_cost, $book_time, $total_point)
		{
			$this->user_id = $user_id;
			$this->total_cost = $total_cost;
			$this->book_time = $book_time;
			$this->total_point = $total_point;
			$this->delmark = 0;
		}

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