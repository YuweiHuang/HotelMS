/*
    显示用户订单
*/
$(document).ready(function(){

	$.post("../../controlers/userAction/getOrder.php",
		function(data)
		{
            // alert(data[0].bill_id);
			            //第一种：动态创建表格的方式，使用拼接html的方式 （推荐）
            var html = "";
            for( var i = 0; i < data.length; i++ ) {

                var target_detail="#"+data[i].bill_id;
                var id_detail=data[i].bill_id+"";//详情按钮id与其对应的模态框id

                var target_comment="#"+data[i].bill_id+"c";
                var id_comment=data[i].bill_id+"c";//评论按钮id与其对应的模态框id

                var target_delete="#"+data[i].bill_id+"d";
                var id_delete=data[i].bill_id+"d";//评论按钮id与其对应的模态框id

                var comment_id="comment_"+data[i].bill_id;//评论框textarea的id
                var point_id="point_"+data[i].bill_id;//评分input的id

                 html += "<tr>";
                 html +=     "<td>" + data[i].bill_id + "</td>";	//房间类型（roomtype表数据）
                 html +=     "<td>" + data[i].total_cost + "</td>";		//房间一日单价（roomtype表数据）
                 html +=     "<td>" + data[i].book_time + "</td>";		//订单总价（bill表数据）
                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-info detail' data-toggle='modal' data-target='" +target_detail+ "'>详情</button>";
                 html +=        "<div class='modal fade' id='" +id_detail+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                    "<div class='modal-body'>";
                 html +=                        "<label for='name'>详细信息</label>";
                 html +=                        "<p>住客姓名: " + data[i].customer_name + "</p>";	//住客姓名（customer表数据）注：只显示预定的时候的第一位住客
                 html +=                        "<p>入住日期: " + data[i].in_time + "</p>";
                 html +=                        "<p>离店日期: " + data[i].check_time + "</p>";
                 html +=                        "<p>联系方式: " + data[i].phone + "</p>";
                 html +=                    "</div>";
                 html +=                    "<div class='modal-footer'>";
                 html +=                        "<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                 html +=                    "</div>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";

                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-success comment' data-toggle='modal' data-target='" +target_comment+ "'>评价</button>";
                 html +=        "<div class='modal fade' id='" +id_comment+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                	"<form role='form' action='' method='POST'>"//通过表单，POST evaluate,提交评论
                 html +=                    	"<div class='modal-body'>";
                 html +=							"<div class='form-group'>"; //textarea显示评论，用户可查看自己之前的评论或者更新评论
                 html +=								"<label for='name'>用户评分</label>";
                 html +=                                " <input type='number' class='form-control' id='"+point_id+"' size='16' value='"+data[i].evaluate_score+"'>";
                 html +=                                "<label for='name'>用户评价</label>";
                 html +=								" <textarea class='form-control' rows='5' id='"+comment_id+"'>" + data[i].evaluate_words + "</textarea>";
                 html +=							"</div>";
                 html +=                    	"</div>";
                 html +=                   		"<div class='modal-footer'>";
                 html +=                        	"<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                 html +=                        	"<button type='button' class='btn btn-primary submit' data-dismiss='modal' id='"+data[i].bill_id+"'>提交</button>";
                 html +=                    	"</div>";
                 html +=					"</form>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";

                 html +=     "<td>";
                 html +=     "<button class='btn btn-small btn-danger deleteOrder' data-toggle='modal' data-target='" +target_delete+ "'>删除</button>";
                 html +=        "<div class='modal fade' id='" +id_delete+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                	"<form role='form' action='' method='POST' name='"+data[i].bill_id+"'>";//通过表单,POST bill_id到后端文件,删除订单
                 html +=                    	"<div class='modal-body'>";
                 html +=							"<div class='form-group'>"; 
                 html +=								"<label for='name'>删除订单</label>";
                 html +=								"<p >确定删除该订单吗?</p>";
                 html +=							"</div>";
                 html +=                    	"</div>";
                 html +=                   		"<div class='modal-footer'>";
                 html +=                        	"<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>";
                 html +=                        	"<button type='button' class='btn btn-danger confirmDelete' id='"+data[i].bill_id+"' data-dismiss='modal'>删除</button>";
                 html +=                    	"</div>";
                 html +=					"</form>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";

                 html += "</tr>";
             }
             $("#J_TbData").html(html);

            /*
                点击submit类的按钮 更新评论
            */
            $(".submit").click(function() 
            {
                var getId = $(this).attr("id"); 

                var comment_id="#comment_"+getId;
                var comment=$(comment_id).val();

                var point_id="#point_"+getId;
                var point=$(point_id).val();

                alert(comment);

                $.post('../php/test.php',
                    {
                        getId:getId,
                        comment:comment,
                        point:point
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
                $.post('../php/test.php',
                    {
                        getId:getId
                    },
                    function()
                    {
                        window.location.href="myOrder.php";
                    }
                );
            });

		},'json'
		);
});