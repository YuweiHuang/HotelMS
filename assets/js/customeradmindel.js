$(document).ready(function(){

        $.post('../php/customerlist.php',{
        },
        	function(data) {

            //第一种：动态创建表格的方式，使用拼接html的方式 （推荐）
            var html = "";

            for( var i = 0; i < data.length; i++ ) {

                var target_reset="#"+data[i].customer_id+"_reset";
                var id_reset=data[i].customer_id+"_reset";
                var target_del="#"+data[i].customer_id+"_del";
                var id_del=data[i].customer_id+"_del";

                var bill_id_id="bill_id_"+data[i].customer_id;//评论框textarea的id
                var room_id_id="room_id_"+data[i].customer_id;//评分input的id
                var gender_id="gender_"+data[i].customer_id;
                var identity_type_id="identity_type_"+data[i].customer_id;
                var identity_id="identity_"+data[i].customer_id;
                var in_time_id="in_time_"+data[i].customer_id;
                var checktime_id="checktime_"+data[i].customer_id;
                var days_id="days_"+data[i].customer_id;
                var user_id_id="user_id_"+data[i].customer_id;
                 html += "<tr>";
                 html +=     "<td>" + data[i].bill_id + "</td>";
                 html +=     "<td>" + data[i].room_id + "</td>";
                 html +=     "<td>" + data[i].gender + "</td>";
                 html +=     "<td>" + data[i].identity_type + "</td>";
                 html +=     "<td>" + data[i].identity + "</td>";
                 html +=     "<td>" + data[i].in_time + "</td>";
                 html +=     "<td>" + data[i].days + "</td>";
                 html +=     "<td>" + data[i].checktime + "</td>";
                 html +=     "<td>" + data[i].user_id + "</td>";
                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-success comment' data-toggle='modal' data-target='" +target_reset+ "'>修改</button>";
                 html +=        "<div class='modal fade' id='" +id_reset+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                     "<form role='form' action='' method='POST' name='"+data[i].room_id+"'>";//通过表单，POST evaluate,提交评论
                 html +=                        "<div class='modal-body'>";
                 html +=                            "<div class='form-group'>"; //textarea显示评论，用户可查看自己之前的评论或者更新评论
                 html +=                                "<label for='name'>bill_id</label>";
                 html +=                                " <input type='text' class='form-control' id='"+bill_id_id+"' size='5' value='"+data[i].bill_id+"'>";
                 html +=                                "<label for='name'>room_id</label>";
                 html +=                                " <input type='text' class='form-control' id='"+room_id_id+"' size='5' value='"+data[i].room_id+"'>";
                 html +=                                "<label for='name'>gender</label>";
                 html +=                                " <input type='text' class='form-control' id='"+gender_id+"' size='5' value='"+data[i].gender+"'>";
                 html +=                                "<label for='name'>identity</label>";
                 html +=                                " <input type='text' class='form-control' id='"+identity_id+"' size='5' value='"+data[i].identity+"'>";
                 html +=                                "<label for='name'>identity_type</label>";
                 html +=                                " <input type='text' class='form-control' id='"+identity_type_id+"' size='5' value='"+data[i].identity_type+"'>";
                 html +=                                "<label for='name'>in_time</label>";
                 html +=                                " <input type='text' class='form-control' id='"+in_time_id+"' size='5' value='"+data[i].in_time+"'>";
                 html +=                                "<label for='name'>days</label>";
                 html +=                                " <input type='text' class='form-control' id='"+days_id+"' size='5' value='"+data[i].days+"'>";
                 html +=                                "<label for='name'>checktime</label>";
                 html +=                                " <input type='text' class='form-control' id='"+checktime_id+"' size='5' value='"+data[i].checktime+"'>";
                 html +=                                "<label for='name'>user_id</label>";
                 html +=                                " <input type='text' class='form-control' id='"+user_id_id+"' size='5' value='"+data[i].user_id+"'>";
                 html +=                    "</div>";
                 html +=                    "<div class='modal-footer'>";
                 html +=                        "<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                 html +=                            "<button type='button' class='btn btn-default update' data-dismiss='modal' id='"+data[i].customer_id+"'>提交</button>";
                 
                 html +=                    "</div>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";
                html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-primary' data-toggle='modal' data-target='" +target_del+ "'>删除</button>";
                 html +=        "<div class='modal fade' id='" +id_del+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                    "<form role='form' action='' method='POST' name='"+data[i].customer_id+"'>";//通过表单,POST bill_id到后端文件,删除订单
                 html +=                        "<div class='modal-body'>";
                 html +=                            "<div class='form-group'>"; 
                 html +=                                "<label for='name'>删除</label>";
                 html +=                                "<p >确定删除该管理员吗?</p>";
                 html +=                            "</div>";
                 html +=                        "</div>";
                 html +=                        "<div class='modal-footer'>";
                 html +=                            "<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>";
                 html +=                            "<button type='submit' class='btn btn-default confirmDelete' data-dismiss='modal' id='"+data[i].customer_id+"'>删除</button>";
                 html +=                        "</div>";
                 html +=                    "</form>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";
                  html += "</tr>";
             }
             $("#J_TbData").html(html);
              $(".update").click(function() 
            {
                
                var getId = $(this).attr("id"); 
                
                var bill_id_id="#bill_id_"+getId;
                var bill_id=$(bill_id_id).val();

                
                var room_id_id="#room_id_"+getId;
                var room_id=$(room_id_id).val();

                var gender_id="#gender_"+getId;
                var gender=$(gender_id).val();

                var identity_type_id="#identity_type_"+getId;
                var identity_type=$(identity_type_id).val();

                var identity_id="#identity_"+getId;
                var identity=$(identity_id).val();

                var in_time_id="#in_time_"+getId;
                var in_time=$(in_time_id).val();

                var checktime_id="#checktime_"+getId;
                var checktime=$(checktime_id).val();

                var days_id="#days_"+getId;
                var days=$(days_id).val();

                var user_id_id="#user_id_"+getId;
                var user_id=$(user_id_id).val();

                alert(user_id);
                $.post('../php/test.php',
                    {
                        getId:getId,
                        bill_id:bill_id,
                        room_id:room_id,
                        gender:gender,
                        identity_type:identity_type,
                        identity:identity,
                        in_time:in_time,
                        checktime:checktime,
                        days:days,
                        user_id:user_id


                    },
                    function()
                    {
                    
                    }
                );
            });


            /*
                点击confirmDelete类的按钮 删除订单
            */
            $(".confirmDelete").click(function() 
            {
               
                var getId = $(this).attr("id"); 
                alert(getId);
                $.post('../php/test.php',
                    {
                        getId:getId
                    },
                    function()
                    {


                        window.location.href="../../views/admin/customeradmindel.php";
                    }
                );
            });
        },'json'

        );
    
})
