<?php 
	require '../../models/entity/admin.php';
	$adminEntityTest = new admin();
	$adminEntityTest->admin_id = 1;
	echo $adminEntityTest->admin_id;
?>