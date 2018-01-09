<?php 
	require_once __DIR__.'/../../models/entity/bill.php';
	require_once __DIR__.'/../../models/service/functionalService.php';
	session_start();
	if (isset($_SESSION["user_id"])) 
	{
		$functionalService = new functionalService();

		$billList = $functionalService->scanAllBillByUser($_SESSION["user_id"]);
		// echo $billList[0]->user_id;
		$allBill = array();
		for ($i=0;$i<count($billList);$i++)
		{
			$temp = array('bill_id' => $billList[$i]->bill_id,
						  'total_cost' => $billList[$i]->total_cost,
						  'book_time' => $billList[$i]->book_time,
						  'total_point' => $billList[$i]->total_point,
						  'evaluate_score' => $billList[$i]->evaluate_score,
						  'evaluate_words' => $billList[$i]->evaluate_words);
			array_push($allBill, $temp);
		}
		
		echo json_encode($allBill);
	}
 ?>