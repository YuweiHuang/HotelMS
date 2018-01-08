/*
	显示该订单金额
*/

$(document).ready(function(){
	$.get(
		"../php/money.php",
		{},
		function(data)
		{
			var html = "";
			html+=data['money']+"元";
			$("#money").html(html);
		},'json'
		);


});