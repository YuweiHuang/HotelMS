<?php 
	require_once __DIR__.'/../../models/service/functionalService.php';
	// require_once __DIR__.'/../../models/entity/room.php';

	session_start();
	// $room = new room();
	$functionalService = new functionalService();
	// $user_id = $_SESSION['user_id'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	// echo "hhhhh";
	$roomList = $functionalService->scanAllEmptyRoom($start_time, $end_time);
	// echo count($roomList);
	// echo "hhh";
	echo json_encode($roomList);
 ?>