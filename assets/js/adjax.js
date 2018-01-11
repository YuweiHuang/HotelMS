$(document).ready(function(){
	$.get(
		"../../controlers/adminAction/adProfile.php",
		
		function(data)
		{
			$('#truename').val(data['truename']);
			$('#account').val(data['account']);
			$('#password').val(data['password']);
		},'json'
		);


});