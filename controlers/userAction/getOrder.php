<?php 
	require_once __DIR__.'/../../models/entity/bill.php';
	require_once __DIR__.'/../../models/service/functionalService.php';
	session_start();
	if (isset($_SESSION["user_id"])) 
	{
		$functionalService = new functionalService();

		$billList = $functionalService->scanAllBillByUser($_SESSION["user_id"]);
		echo json_encode($billList);
	}
 ?>