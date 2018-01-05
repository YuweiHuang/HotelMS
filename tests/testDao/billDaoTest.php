<?php 
	// namespace tests\testDao;

	use \HotelMS\models\dao;
	use \HotelMS\models\entity;

	$billDaoTest = new dao\billDao();
	$bill = new entity\bill();
	$bill = $billDaoTest->findBillInfoByID(1);

	echo $bill->user_id;
 ?>