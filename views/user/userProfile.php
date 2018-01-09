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

<div class="container">

  <div>
    <div style="padding: 0px 350px;">
      <!-- <p style="font-family:Microsoft YaHei">用户名</p>
      <input type="text" class="form-control" id="name" value="" disabled="disabled"><br/> -->

      <p style="font-family:Microsoft YaHei">会员账号</p>
      <input type="text" class="form-control" id="account" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">密码</p>
      <input type="text" class="form-control" id="password" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">真实姓名</p>
      <input type="text" class="form-control" id="truename" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">积分</p>
      <input type="text" class="form-control" id="point" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">会员等级</p>
      <input type="text" class="form-control" id="member_type" value="" disabled="disabled"><br/>

    </div>
  </div>

  <div>
    <div class="page-header" style="padding: 0px 200px;">
      <h1 style="font-family:Microsoft YaHei;font-size:20px">修改密码</h1>
    </div>
    <form class="form-signin" role="form" action="../../controlers/userAction/userProfileUpdate.php" method="POST">
    <div style="padding: 0px 350px;">
      <!-- <p style="font-family:Microsoft YaHei">会员账号(登录用邮箱或手机号)</p>
      <input type="text" class="form-control" name="account_new" value="" placeholder="会员账号" required ><br/>
      <p style="font-family:Microsoft YaHei">用户名</p>
      <input type="text" class="form-control" name="name_new" value="" placeholder="用户名" required ><br/> -->
      <p style="font-family:Microsoft YaHei">新密码</p>
      <input type="password" class="form-control" name="password_new" placeholder="账号密码" required>
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">确认密码</p>
      <input type="password" class="form-control" name="rpassword_new" placeholder="确认密码" required><br/>
      <p style="font-family:Microsoft YaHei">真实姓名</p>
      <input type="text" class="form-control" name="truename_new" value="" placeholder="真实姓名" required ><br/>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="uc_submit">提交</button>
    </div>
    </form>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/ajax.js"></script>
    </body>
</html>