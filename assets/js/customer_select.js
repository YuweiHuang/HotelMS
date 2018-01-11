$(document).ready(function(){

    // $(".button").click(function(){

    //     var getId = $(".button").attr("id");
    //     alert(getId);

    // });

$(".btn.btn-default").on("click", function () 
    {
        var getId = $(this).attr("id"); 
        // alert(getId);

      
        // alert(data);
        // window.location.href="reservation_step1.html";
        // alert('hhh'+data);
        customer_id = '#' + getId;
        // alert(customer_id)
        // $(customer_id).attr = '取消';
        // $(customer_id).text("取消");
        if ($(customer_id).text() == "选择") 
        {
            $(customer_id).text("取消");
            $.send('../../controlers/userAction/customerChooseAction.php',
            	{getId:getId,
            	choose:1},
            	function()
            	{

            	});   
        } 
        else 
        {
            $(customer_id).text("选择");  
            $.send('../../assets/js/customerChooseAction.php',
            	{getId:getId,
            	choose:0},
            	function()
            	{
            		
            	});   
        }
        // getId:getId
           

    });
});