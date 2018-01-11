function isHave(have) {
    if(have == 1)
    {
        return "有";
    }
    else
    {
        return "无";
    }
};
$(document).ready(function(){
    $("#search").click(function(){ 

        var start_time = $("#dtp1").val();
        var end_time = $("#dtp2").val();

    $.ajax({
        type: 'post',
        url: '../../controlers/userAction/roomShowAction.php',
        cache: false,
        data:{ 'start_time':start_time,
               'end_time':end_time},
        dateType:'json',
        success: function(data) 
        {
            var html = "";
            var data = eval(data);
            
            // console.log(data);
            html += "<div class = 'row'>";
            html += "<table class='table table-hover' style = 'width:80%;margin:0 auto;'>";
            html += "<thead>";
            html += "    <tr>";
            html += "       <th>房间</th>";
            html += "       <th>房间类型</th>";
            html += "       <th>位置</th>";
            html += "       <th>床宽</th>";
            html += "       <th>面积</th>";
            html += "       <th>wifi</th>";
            html += "       <th>浴室</th>";
            // html += "       <th>加床</th>";
            html += "       <th>可住人数</th>";
            html += "       <th>价格</th>";
            html += "       <th>押金</th>";
            html += "       <th>预订</th>";
            html += "    </tr>";
            html += "</thead>";
            html += "<tbody>";
            for( var i = 0; i < data.length; i++ ) 
            {
// room_id: "1", room_name: "1101", room_type_id: "1", location: "一层", room_tel: "1332321440
                // var target="#"+data[i].roomid;
                // var id=data[i].roomid+"";

                // var roomtype = "";
                // // console.log(data[i].room_type_id);
                // if (data[i].room_type_id == 1) 
                // {
                //     roomtype = '单人标准间';
                // }
                // else if (data[i].room_type_id == 2)
                // {
                //     roomtype = '豪华标准间';
                // }
                // else if(data[i].room_type_id == 3)
                // {
                //     roomtype = '大床房';
                // }
                // else if(data[i].room_type_id == 4)
                // {
                //     roomtype = '总统套房';
                // }
                // else
                // {
                //     roomtype = '豪华双人间';
                // }

                 html += "<tr>";
                 html +=     "<td>" + data[i].room_name + "</td>";
                 html +=     "<td>" + data[i].room_type + "</td>";
                 html +=     "<td>" + data[i].location + "</td>";
                 html +=     "<td>" + data[i].bedwidth + "</td>";
                 html +=     "<td>" + data[i].roomarea + "</td>";
                 html +=     "<td>" + isHave(data[i].wifi) + "</td>";
                 html +=     "<td>" + isHave(data[i].bathroom) + "</td>";
                 // html +=     "<td>" + data[i].addbed + "</td>";
                 html +=     "<td>" + data[i].occupantnum + "</td>";
                 html +=     "<td>" + data[i].price + "</td>";
                 html +=     "<td>" + data[i].deposit + "</td>";
                 html +=     "<td><button data-roomtype = '" + data[i].room_type +"' data-roomid = '" + data[i].room_id +"' data-starttime = '" + start_time +"' data-endtime = '" + end_time +"' data-price = '" + data[i].price +"'class = 'btn btn-success booking'>预订</button></td>";
                 // html +=     "<td>" + data[i].room_tel + "</td>";
                 // html +=     "<td>" + data[i].status + "</td>";
                 html += "</tr>";
            }
            html += "</tbody></table></div>";
            // $("#showRoom").html(html);
            $("#showRoom").empty();
            $("#showRoom").append(html);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
        }
    });      
});

$(document).on('click', 'button.booking', function(){
        var room_id = $(this).data('roomid');
        var room_type = $(this).data('roomtype');
        var start_time = $(this).data('starttime');
        var end_time = $(this).data('endtime');
        var price = $(this).data('price');
        
        // alert(room_type);
    location.href = '../../views/user/booking.php?room_id='+room_id+'&room_type='+room_type+'&start_time='+start_time+'&end_time='+end_time+'&price='+price;
    

    // $.ajax({
    //     type: 'post',
    //     url: '../../views/user/booking.php',
    //     cache: false,
    //     data:{ 
    //             'room_type':room_type,
    //             'start_time':start_time,
    //             'end_time':end_time},
    //     dateType:'json',
    //     success: function(data) 
    //     {
    //         console.log(data);
    //     },
    //     error: function(error) {
    //         // alert(error);
    //         console.log(error);
    //     }
    // });      
});

});
