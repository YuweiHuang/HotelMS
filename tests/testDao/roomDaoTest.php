<?php 

	require_once __DIR__.'/../../models/dao/roomDao.php';
	require_once __DIR__.'/../../models/entity/room.php';

	$roomDaoTest = new roomDao();
	$room = new room();
	$room = $roomDaoTest->findRoomInfoByID(1);

	echo $room->room_id
	.'</br>'.$room->room_type_id
	.'</br>'.$room->location
	.'</br>'.$room->room_tel
	.'</br>'.$room->in_time
	.'</br>'.$room->days;
 ?>