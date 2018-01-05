<?php 

	require_once __DIR__.'/../../models/dao/billDao.php';
	require_once __DIR__.'/../../models/entity/bill.php';

	$billDaoTest = new billDao();
	$bill = new bill();
	$bill = $billDaoTest->findBillInfoByID(1);

	echo $bill->user_id;
 ?>