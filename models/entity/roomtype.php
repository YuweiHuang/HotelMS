<?php 
	/**
	* roomtype
	*/
	class roomtype
	{
		private $room_type_id;/*房间类型id*/        
		private $room_type;/*房间类型名称*/
		private $totalbed;/*床总数*/             
		private $price;/*价格*/                
		private $deposit;/*押金*/              
		private $delmark/*是否删除*/                

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