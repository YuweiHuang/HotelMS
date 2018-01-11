$(function(){
	
	$.ajax({
		type: 'post',
		url: '../../controlers/adminAction/roomList.php',
		cache: false,
		dateType:'json',
		success: function(data) {
			var html = "";
            var data=eval(data);
  
             for( var i = 0; i < data.length; i++ ) {

                var target_reset="#"+data[i].room_id+"_reset";
                var id_reset= data[i].room_id+"_reset";
                var target_del="#"+data[i].room_id+"_del";
                var id_del= data[i].room_id+"_del";

                var room_id_id="room_id_"+data[i].room_id;
                var room_type_id_id="room_type_id_"+data[i].room_id;
                var location_id="location_"+data[i].room_id;
                var room_tel_id="room_tel_"+data[i].room_id;
                var in_time_id="in_time_"+data[i].room_id;
                var days_id="days_"+data[i].room_id;
                var room_name_id="room_name_"+data[i].room_id;
           
            if(data[i].room_type_id == 1){
                 $R="普通大床房";
                 }
            if(data[i].room_type_id == 2){
                 $R="精选大床房";
                 }
            if(data[i].room_type_id == 3){
                 $R="豪华大床房";
                 }
            if(data[i].room_type_id == 4){
                 $R="商务大床房";
                 }
            if(data[i].room_type_id == 5){
                 $R="豪华套房";
                 }
            if(data[i].room_type_id == 6){
                 $R="总统套房";
                 }
                 html += "<tr>";
                 html +=     "<td>" + data[i].room_id + "</td>";
                 html +=     "<td>" + data[i].room_name + "</td>";
                 html +=     "<td>" + $R + "</td>";
                 html +=     "<td>" + data[i].location + "</td>";
                 html +=     "<td>" + data[i].room_tel + "</td>";
                
                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-success comment' data-toggle='modal' data-target='" +target_reset+ "'>修改</button>";
                 html +=        "<div class='modal fade' id='" +id_reset+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                     "<form role='form' action='' method='POST' name='"+data[i].room_id+"'>";//通过表单，POST evaluate,提交评论
                 html +=                        "<div class='modal-body'>";
                 html +=                            "<div class='form-group'>"; //disabled="disabled"textarea显示评论，用户可查看自己之前的评论或者更新评论
                   html +=                                "<label for='name'>房间号</label>";
                 html +=                                " <input type='text' class='form-control' id='"+room_id_id+"' size='5' value='"+data[i].room_id+"' disabled='disabled'>";
                 
                 html +=                                "<label for='name'>房间名字</label>";
                 html +=                                " <input type='text' class='form-control' id='"+room_name_id+"' size='5' value='"+data[i].room_name+"'>";
                 html +=                                "<label for='name'>房间类型</label>";
                 html +=                                " <input type='text' class='form-control' id='"+room_type_id_id+"' size='5' value='"+data[i].room_type_id+"'>";
                 html +=                                "<label for='name'>房间楼层</label>";
                 html +=                                " <input type='text' class='form-control' id='"+location_id+"' size='5' value='"+data[i].location+"'>";
                 html +=                                "<label for='name'>房间电话</label>";
                 html +=                                " <input type='text' class='form-control' id='"+room_tel_id+"' size='5' value='"+data[i].room_tel+"'>";
                 html +=                            "</div>";
                 html +=                        "</div>";
                 html +=                        "<div class='modal-footer'>";
                 html +=                            "<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                 html +=                            "<button type='button' class='btn btn-primary update' data-dismiss='modal' id='"+data[i].room_id+"'>提交</button>";
                 html +=                        "</div>";
                 html +=                    "</form>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";

                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-primary' data-toggle='modal' data-target='" +target_del+ "'>删除</button>";
                 html +=        "<div class='modal fade' id='" +id_del+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                    "<form role='form' action='' method='POST' name='"+data[i].room_id+"'>";//通过表单,POST bill_id到后端文件,删除订单
                 html +=                        "<div class='modal-body'>";
                 html +=                            "<div class='form-group'>"; 
                 html +=                                "<label for='name'>删除</label>";
                 html +=                                "<p >确定删除该房间吗?</p>";
                 html +=                            "</div>";
                 html +=                        "</div>";
                 html +=                        "<div class='modal-footer'>";
                 html +=                            "<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>";
                 html +=                            "<button type='submit' class='btn btn-default confirmDelete' data-dismiss='modal' id='"+data[i].room_id+"'>删除</button>";
                 html +=                        "</div>";
                 html +=                    "</form>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";
                  html += "</tr>";
              }
              $("#J_TbData").html(html);
		},
		error: function(error) {
			// console.log(error);
		}
	});

$(document).on('click', 'button.update', function(){
    var getId = $(this).attr("id"); 
                
                var room_id_id="#room_id_"+getId;
                var room_id=$(room_id_id).val();
                
                var room_type_id_id="#room_type_id_"+getId;
                  var room_type_id=$(room_type_id_id).val();

                var location_id="#location_"+getId;
                var location=$(location_id).val();

                 var room_tel_id="#room_tel_"+getId;
                 var room_tel=$(room_tel_id).val();
                 var room_name_id="#room_name_"+getId;
                 var room_name=$(room_name_id).val();
                
                
                $.ajax({
                    type: 'post',
                    url: '../../controlers/adminAction/roomUpdateAction.php',
                    cache: false,
                    data: {
                        getId:getId,
                        room_name:room_name,
                        room_type_id:room_type_id,
                        location:location,
                        room_tel:room_tel

                    
                    },
                    dateType:'json',
                    success: function(data){
window.location.href="../../views/admin/roomadmindel.php";
                    },
                    error:function(){

                    }
                });
});
            
            $(document).on('click', 'button.confirmDelete', function(){
    
             var getId = $(this).attr("id"); 
                
                $.post('../../controlers/adminAction/deleteRoomAction.php',
                    {
                        getId:getId
                    },
                    function()
                    {


                        window.location.href="../../views/admin/roomadmindel.php";
                    }
                );
                 });

                
            
            
});