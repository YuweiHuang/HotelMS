<!DOCTYPE html>
<?php
	session_start();
  	session_destroy();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>管理员注销</title>
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
  
</head>

<script type="text/javascript">
var t=3;//设定跳转的时间
setInterval("refer()",1000); //启动1秒定时
function refer(){
    if(t==0){
        location="../../index.php"; //#设定跳转的链接地址
    }
    document.getElementById('show').innerHTML=""+t+"秒后跳转到管理员登录界面"; // 显示倒计时
    t--; // 计数器递减
}
</script>


<body>
<div class="jumbotron">
	<div class="container">
		<h1 style="font-family:Microsoft YaHei">注销成功！</h1>
		<p><span id="show" style="font-family:Microsoft YaHei"></span></p>
		<a href="../../index.php" style="font-family:Microsoft YaHei">如果没有跳转，请点击这里</a>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
