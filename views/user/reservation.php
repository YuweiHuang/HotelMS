<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>影子宾馆</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.min.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
  require 'header.php';
?>

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
				<button class="btn btn-lg btn-primary btn-block" type="button" name="accom_submit" onclick="javascript:window.location.href='reservation_step1.php' ">我要添加新住客信息</button>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../assets/js/reservation.js"></script>
    <script type="text/javascript" src="../../assets/js/customer_select.js"></script>
    </body>
</html>