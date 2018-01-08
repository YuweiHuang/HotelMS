/*
	显示用户数据
*/
$(document).ready(function(){
	$.get(
		"../php/userProfile.php",
		{},
		function(data)
		{
			$('#name').val(data['name']);
			$('#account').val(data['account']);
			$('#password').val(data['password']);
			$('#truename').val(data['truename']);
			$('#point').val(data['point']);
			$('#member_type').val(data['member_type']);
		},'json'
		);


});