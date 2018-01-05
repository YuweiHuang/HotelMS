<?php 
	require_once __DIR__. '../../models/entity/roomtype.php';
	$roomtypeEntityTest = new roomtype();
	$roomtypeEntityTest->room_type_id = 1;
	$roomtypeEntityTest->room_type = '单人标准间';
	$roomtypeEntityTest->totalbed = 1;
	$roomtypeEntityTest->price = 200;
	$roomtypeEntityTest->deposite = 100;
	$roomtypeEntityTest->delmark = 0;
	echo $roomtypeEntityTest->room_type_id.
	'</br>'.$roomtypeEntityTest->room_type.
	'</br>'.$roomtypeEntityTest->totalbed.
	'</br>'.$roomtypeEntityTest->price.
	'</br>'.$roomtypeEntityTest->deposite.
	'</br>'.$roomtypeEntityTest->delmark;
?>