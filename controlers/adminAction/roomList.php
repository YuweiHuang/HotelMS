<!-- 查找所有房间 -->
<?php 

	require_once __DIR__.'/../../models/service/productService.php';
	require_once __DIR__.'/../../models/entity/room.php';

	$productService = new productService();
	$roomList = $productService->scanRoom();
	echo json_encode($roomList);

?>