/*
	确认订单页面的数据获取
*/
$(document).ready(function(){
	$.get(
		"../php/confirmOrder.php",
		{},
		function(data)
		{
			$('#name').val(data['name']);
			$('#tel').val(data['tel']);
			$('#id').val(data['id']);
			$('#roomtype').val(data['roomtype']);
			$('#roomnum').val(data['roomnum']);
			$('#intime').val(data['intime']);
			$('#checktime').val(data['checktime']);
		},'json'
		);


});