$(document).ready(function(){
	$.get(
		"",
		{},
		function(data)
		{
			$('#truename').val(data['truename']);
			$('#account').val(data['account']);
			$('#password').val(data['password']);
		},'json'
		);


});