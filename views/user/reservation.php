<?php
  require 'header.php';
?>
			<!-- Collect the nav links, forms, and other content for toggling -->

      <!-- 
        选择住客信息
        通过ajax调用数据库里的住客信息
        未实现功能:点击表格每一栏的“选择”按钮，直接跳转到step2页面
        目前我只写了一个超链接用于跳转
        但实际上跳转的同时还要传入住客的信息
        这一点如何保证呢？
       -->

	  <div class="container" style="font-family:Microsoft YaHei;">
			<div class="table-responsive" style="padding: 50px 0px;">
				<table class="table">
					<caption><h2 align="center">步骤一:选择住客</h2></caption>
					<thead>
						<tr>
							<th>住客姓名</th>
							<th>所在国家</th>
							<th>所在城市</th>
							<th>联系方式</th>
							<th>证件类型</th>
							<th>证件号码</th>
							<th>选择</th>
						</tr>
					</thead>
          			<tbody id = "J_TbData">
            
          			</tbody>
				</table>
			</div>

			<div style="padding: 20px 450px;">
				<button class="btn btn-lg btn-primary btn-block" type="button" name="accom_submit" onclick="javascript:window.location.href='reservation_step1.html' ">我要使用新住客信息</button>
			</div>

<!-- 			<div class="container" style="padding: 0px 350px 0px 350px">
				<div class="page-header" >
					<h1 align="center" style="font-family:	Microsoft YaHei">取消订单</h1>
				</div>
			<form class="form-signin" role="form" action="" method="POST">
			<div>

				<div class = "form-group">
				 <label for = "floor">房间号</label>
				 <input type="text" class="form-control" name="deleteby_rid" placeholder="房间号" required >
				 <span class="error"></span><br/>
				</div>

				</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_delete">取消订单</button>
					</form>
				</div> -->

<!--         <script type="text/javascript">
          $(document).ready(function(){
        $.post('../php/customerselect.php',{

        },
            function(data) {

            //第一种：动态创建表格的方式，使用拼接html的方式 （推荐）
            var html = "";
            for( var i = 0; i < data.length; i++ ) {

                 html += "<tr>";
                 html +=     "<td>" + data[i].name + "</td>";
                 html +=     "<td>" + data[i].country + "</td>";
                 html +=     "<td>" + data[i].city + "</td>";
                 html +=     "<td>" + data[i].tel + "</td>";
                 html +=     "<td>" + data[i].id_type + "</td>";
                 html +=     "<td>" + data[i].id + "</td>";
                 html +=     "<td>";
                 html +=     "<button class='select' id=" + data[i].id + ">选择</button>";
                 //html +=        "<a class='select' style='font-family:Microsoft YaHei' id=" + data[i].id + ">选择</a>";
                 html +=     "</td>";
                 html += "</tr>";

             }
             $("#J_TbData").html(html);
        },'json'
        );
});

       
        </script>
    }) -->
	</div>
