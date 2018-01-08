/*
	取消订单
	发送所有当前页面的值给后台php文件
*/
$(document).ready(function(){

	$('#cancle').click(function(){

		var id=$('#id').val();
		var name=$('#name').val();
		var tel=$('#tel').val();
		var roomtype=$('#roomtype').val();
		var roomnum=$('#roomnum').val();
		var intime=$('#intime').val();
		var checktime=$('#checktime').val();

		$.post(

			"../php/test.php",
			{
				id:id,
				name:name,
				tel:tel,
				roomnum:roomnum,
				roomtype:roomtype,
				intime:intime,
				checktime:checktime
			},
			function()
			{
				window.location.href="welcome.html";
			}
		);
	});
});