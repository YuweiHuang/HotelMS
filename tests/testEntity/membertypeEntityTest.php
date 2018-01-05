<?php 
	require_once __DIR__. '../../models/entity/membertype.php';
	$membertypeEntityTest = new membertype();
	$membertypeEntityTest->member_type_id = 1;
	$membertypeEntityTest->member_type = '白金';
	$membertypeEntityTest->discount = 6;
	$membertypeEntityTest->delmark = 0;
	echo $membertypeEntityTest->member_type_id.
	'</br>'.$membertypeEntityTest->member_type.
	'</br>'.$membertypeEntityTest->discount.
	'</br>'.$membertypeEntityTest->delmark;
?>