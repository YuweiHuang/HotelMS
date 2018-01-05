<?php 
	require_once __DIR__. '/../../models/entity/bill.php';
	$billEntityTest = new bill();
	$billEntityTest->bill_id = 1;
	$billEntityTest->user_id = 1;
	$billEntityTest->totalroom = 3;
	$billEntityTest->money = 100;
	$billEntityTest->book_time = '20181215034511';
	$billEntityTest->point = 17; 
	$billEntityTest->evaluate_score = 6;
	$billEntityTest->evaluate_words = '黄焖鱼尾好吃';
	$billEntityTest->delmark = 0;
	echo 
	'订单号: '.$billEntityTest->bill_id.
	'</br>预定人ID: '.$billEntityTest->user_id.
	'</br>预定房间数量: '.$billEntityTest->totalroom.
	'</br>总花费: '.$billEntityTest->money.
	'</br>评分: '.$billEntityTest->evaluate_score.
	'</br>评语: '.$billEntityTest->evaluate_words.
	'</br>是否删除： '.$billEntityTest->delmark;
?>;
?>