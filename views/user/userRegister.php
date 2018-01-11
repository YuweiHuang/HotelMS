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

  <div class="container" style="padding: 150px 350px 50px;">
    <div class="transbox">
     <div class="inside">
    <div class="page-header" >
    </br>
      <h1 align="center" style="font-family:	Microsoft YaHei">会员注册</h1>
    </div>
    <form class="form-signin" role="form" action="../../controlers/userAction/userRegisterAction.php" method="POST">
    <div>
      <p style="font-family:Microsoft YaHei">真实姓名</p>
      <input type="text" class="form-control" name="rname" placeholder="真实姓名" required ><br/>
      <p style="font-family:Microsoft YaHei">手机号或邮箱</p>
      <input type="text" class="form-control" name="raccount" placeholder="手机号或邮箱" required >
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">密码</p>
      <input type="password" class="form-control" name="rpwd" placeholder="账号密码" required>
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">确认密码</p>
      <input type="password" class="form-control" name="rrpwd" placeholder="确认密码" required><br/>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="rsubmit">注册</button>
    <a href="userLogin.php" align="right">已有账号,直接登录</a>
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
