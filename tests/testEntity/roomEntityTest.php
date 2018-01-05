<?php 
	require_once __DIR__. '../../models/entity/room.php';
	$roomEntityTest = new room();
	$roomEntityTest->room_id = 1;
	$roomEntityTest->room_type_id = 2;
	$roomEntityTest->location = '一层';
	$roomEntityTest->room_tel ='13161608891';
	$roomEntityTest->in_time = '20141220202035';
	$roomEntityTest->days = 2;
	$roomEntityTest->delmark = 0;
	echo $roomEntityTest->room_id.
	'</br>'.$roomEntityTest->room_type_id.
	'</br>'.$roomEntityTest->location.
	'</br>'.$roomEntityTest->room_tel.
	'</br>'.$roomEntityTest->in_time.
	'</br>'.$roomEntityTest->days.
	'</br>'.$roomEntityTest->delmark;
?>