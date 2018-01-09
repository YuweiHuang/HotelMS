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
    <div class="container" style="padding: 200px 450px 150px;font-family:Microsoft YaHei;">
		 <div class="transbox">
			<div class="inside">
		      <form class="form-signin" role="form" action="../../controlers/userAction/userLoginAction.php" method="POST">
					</br>
						<h2 class="form-signin-heading" align="center">用户登录</h2>
		        <input type="text" name="uaccount" class="form-control" placeholder="手机号或邮箱" required autofocus>
		        		<!--用户名错误报错-->
						<span class="error"></span><br/>
		        <input type="password" name="upwd" class="form-control" placeholder="密码"  required>
		       			<!--用户密码错误报错-->
						<span class="error"></span>
		        <div class="checkbox">
		          <label>
		            <input type="checkbox" value="remember-me"> 记住我
		          </label>
		        </div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit" name="c_submit">登录</button>
		        <a href="userRegister.php
		        ">什么？听说你没账户？</a>
		      </form>
			</div>
			</div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>