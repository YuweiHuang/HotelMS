<?php 
	require_once __DIR__. '../../models/entity/user.php';
	$userEntityTest = new user();
	$userEntityTest->user_id = 1;
	$userEntityTest->authority = 0;
	$userEntityTest->register_time = '20100105202020';
	$userEntityTest->account = '12354666';
	$userEntityTest->password = 'zxy';
	$userEntityTest->truename = '赵鑫宇';
	$userEntityTest->point = 100;
	$userEntityTest->member_type_id = 3;
	$userEntityTest->delmark = 0;
	echo $userEntityTest->user_id.
	'</br>'.$userEntityTest->authority.
	'</br>'.$userEntityTest->register_time.
	'</br>'.$userEntityTest->account.
	'</br>'.$userEntityTest->password.
	'</br>'.$userEntityTest->truename.
	'</br>'.$userEntityTest->point.
	'</br>'.$userEntityTest->member_type_id.
	'</br>'.$userEntityTest->delmark;
?>