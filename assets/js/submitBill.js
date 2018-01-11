$(document).ready(function(){
    $("#submitBill").click(function(){ 
        var room_type = $("#room_type").data('roomtype');
        var room_id = $("#room_id").data('roomid');
        // alert(room_id);
        var start_time = $("#start_time").data('starttime');
        var end_time = $("#end_time").data('endtime');
        var price = $("#price").data('price');
        var customer = $("#customer").val();
        var phone = $("#phone").val();
        var idnumber = $("#idnumber").val();
    $.ajax({
        type: 'post',
        url: '../../controlers/userAction/submitBillAction.php',
        cache: false,
        data:
            { 
                'room_type':room_type,
                'room_id':room_id,
                'start_time':start_time,
                'end_time':end_time,
                'customer':customer,
                'phone':phone,
                'idnumber':idnumber,
                'price':price
            },
        dateType:'json',
        success: function(data) 
        {
            // console.log(data);
            location.href = '../../views/user/myOrder.php';
        },
        error: function(error) {
            // alert(error);
            console.log(error);
        }
    });      
});

});
