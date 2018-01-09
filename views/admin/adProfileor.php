<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>宾馆管理系统</title>
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
        <a class="navbar-brand" style="font-family:Microsoft YaHei" href="adminor.php">影子宾馆管理员端</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
         <?php require 'commonor.html'?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>

<div class="container">
   <div class="jumbotron">
        <h1 style="font-family:Microsoft YaHei">欢迎你,管理员<small></small></h1>
    </div>

    <div>
      <div class="page-header" style="padding: 0px 150px;">
        <h1 style="font-family:Microsoft YaHei;font-size:20px">个人信息</h1>
      </div>

      <div style="padding: 0px 300px;">
          <p style="font-family:Microsoft YaHei">管理员姓名</p>
          <input type="text" class="form-control" id="truename" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">管理员账号</p>
          <input type="text" class="form-control" id="account" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">密码</p>
          <input type="text" class="form-control" id="password" value="" disabled="disabled"><br/>

        </div>


    </div>

    <div>
      <div class="page-header" style="padding: 0px 150px;">
        <h1 style="font-family:Microsoft YaHei;font-size:20px">修改个人信息</h1>
      </div>
      <form class="form-signin" role="form" action="../php/adProfileUpdate.php" method="POST">
      <div style="padding: 0px 300px;">
        <p style="font-family:Microsoft YaHei">管理员号码</p>
        <input type="text" class="form-control" name="adaccount_c" placeholder="管理员号码" value="" required ><br/>
        <p style="font-family:Microsoft YaHei">管理员姓名</p>
        <input type="text" class="form-control" name="adtruename_c" placeholder="管理员姓名" value="" required ><br/>
        <p style="font-family:Microsoft YaHei">新密码</p>
        <input type="password" class="form-control" name="adpwd_c" placeholder="账号密码" required>
        <span class="error"></span><br/>
        <p style="font-family:Microsoft YaHei">确认密码</p>
        <input type="password" class="form-control" name="radpwd_c" placeholder="确认密码" required><br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="adc_submit">提交</button>
      </div>
      </form>
    </div>

</div>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../assets/js/adjax.js"></script>
</body>
</html>
