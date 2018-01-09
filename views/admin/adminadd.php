<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>房间管理</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  
</head>

<style>
.error {color: #FF0000;}
</style>

<body body data-spy="scroll" data-target="#myScrollspy">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-family:Microsoft YaHei" href="admin.php">影子宾馆管理员端</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
         <?php require 'common.html'?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>

<div class="container">

<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:  Microsoft YaHei">添加管理员信息</h1>
  </div>
<form class="form-signin" role="form" action="../php/adRegister.php" method="POST">
    <div>
      <p style="font-family:Microsoft YaHei">管理员用户名</p>
      <input type="text" class="form-control" name="adname" placeholder="管理员用户名" required ><br/>
      <p style="font-family:Microsoft YaHei">管理员号码</p>
      <input type="text" class="form-control" name="adaccount" placeholder="管理员号码" required >
      <span class="error"> </span><br/>
      <p style="font-family:Microsoft YaHei">管理员账号密码</p>
      <input type="password" class="form-control" name="adpwd" placeholder="账号密码" required>
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">确认密码</p>
      <input type="password" class="form-control" name="radpwd" placeholder="确认密码" required><br/>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="adr_submit">添加</button>
    </form>
  </div>
<br/>

</div>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
