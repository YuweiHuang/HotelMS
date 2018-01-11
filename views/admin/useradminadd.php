<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>用户管理</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
  
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

       
         <?php require 'common.php' ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>

<div class="container">

<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:  Microsoft YaHei">添加用户信息</h1>
  </div>
<form class="form-signin" role="form" action="../../controlers/adminAction/addUserAction.php" method="POST">
    <div>
      <div class = "form-group">
   <label for = "floor">真实姓名</label>
   <input type="text" class="form-control" name="adtruename" placeholder="真实姓名" required ><br/>
  </div>

  <div class = "form-group">
   <label for = "floor">用户名</label>
   <input type="text" class="form-control" name="adname" placeholder="用户名" required ><br/>
  </div>

  <div class = "form-group">
   <label for = "floor">账号</label>
   <input type="text" class="form-control" name="account" placeholder="账号" required ><br/>
  </div>

  <div class = "form-group">
   <label for = "floor">密码</label>
   <input type="text" class="form-control" name="radpwd" placeholder="密码" required ><br/>
  </div>


  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="adr_submit">添加</button>
    </form>
  </div>
<br/>

<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
