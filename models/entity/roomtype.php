<?php 
	/**
	* roomtype
	*/
	class roomtype
	{        
		private $room_type_id;/*房间类型id*/
		private $room_type;/*房间类型名称*/
		private $bedwidth;/*床长度*/
		private $roomarea;/*房间面积*/
		private $wifi;/*是否有wifi,1:有;0:无*/
		private $bathroom;/*是否有独立卫浴,1:有;0:无*/
		private $addbed;/*是否可加床,1:有;0:无*/
		private $occupantnum;/*可入住人数*/
		private $price;/*价格*/
		private $deposit;/*押金*/
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