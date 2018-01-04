<?php 
	require '../../models/entity/bill.php';
	$billEntityTest = new bill();
	$billEntityTest->bill_id = 1;
	echo $billEntityTest->bill_id;
?>