<?php 
	require_once __DIR__. '/../../models/entity/customer.php';
	$customerEntityTest = new customer();
	$customerEntityTest->customer_id = 1;
	$customerEntityTest->bill_id = 2;
	$customerEntityTest->room_id = 3;
	$customerEntityTest->name = '黄鱼尾';
	$customerEntityTest->age = 30;
	$customerEntityTest->gender = 1;
	$customerEntityTest->indentity_type = 0;
	$customerEntityTest->indentity = '130626197501253345';
	$customerEntityTest->in_time = '20150315252555';
	$customerEntityTest->days = 3;
	$customerEntityTest->check_time = '20180103124522';
	$customerEntityTest->user_id = 1;
	$customerEntityTest->delmark = 0;
	echo $customerEntityTest->customer_id.
	'</br>'.$customerEntityTest->bill_id.
	'</br>'.$customerEntityTest->room_id.
	'</br>'.$customerEntityTest->name.
	'</br>'.$customerEntityTest->age.
	'</br>'.$customerEntityTest->gender.
	'</br>'.$customerEntityTest->indentity_type.
	'</br>'.$customerEntityTest->indentity.
	'</br>'.$customerEntityTest->in_time.
	'</br>'.$customerEntityTest->days.
	'</br>'.$customerEntityTest->check_time.
	'</br>'.$customerEntityTest->user_id.
	'</br>'.$customerEntityTest->delmark;
?>