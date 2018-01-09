<!-- 查找所有管理员 -->
<?php 

	require_once __DIR__.'/../../models/service/userService.php';
	require_once __DIR__.'/../../models/entity/user.php';

	$userService = newuserService();
	$userList = $userService->scanAllUser();

	$uerList2 = array();
	$j = 0;

	for($i = 0; $i < count($userList); $i++){
		$temp_user = $userList[$i];

		if($temp_user->authority != 0){
			$userList2[$j]=$temp_user;
			$j++;
		}
	}
	echo json_encode($userList2); 

?>