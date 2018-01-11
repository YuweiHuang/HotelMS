<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户账号管理</title>

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

	<div class="jumbotron">
			 <h1 style="font-family:Microsoft YaHei">欢迎来到用户账号管理界面！</h1>
			 <p style="font-family:Microsoft YaHei">请在导航栏中选择您想使用的其他功能</p>
	 </div>

<br/>

    <div class="table-responsive">
      <table class="table">
        <caption>用户账号信息</caption>
        <thead>
          <tr>
            <th>ID序列号</th>
            <th>用户名</th>
            <th>账号</th>
            <th>密码</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>

</div>



<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:	Microsoft YaHei">添加用户信息</h1>
  </div>
<form class="form-signin" role="form" action="" method="POST">
<div>

  <div class = "form-group">
   <label for = "floor">ID序列号</label>
   <input type="text" class="form-control" name="set_uid" placeholder="ID序列号" required ><br/>
  </div>

	<div class = "form-group">
   <label for = "floor">用户名</label>
   <input type="text" class="form-control" name="set_uname" placeholder="用户名" required ><br/>
  </div>

	<div class = "form-group">
   <label for = "floor">账号(手机号或电子邮箱)</label>
   <input type="text" class="form-control" name="set_uaccount" placeholder="账号" required ><br/>
  </div>

	<div class = "form-group">
   <label for = "floor">密码</label>
   <input type="text" class="form-control" name="set_upwd" placeholder="密码" required ><br/>
  </div>

  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_addu">添加</button>
    </form>
  </div>

<br/>
  <div class="container" style="padding: 0px 300px 0px 300px">
    <div class="page-header" >
      <h1 align="center" style="font-family:	Microsoft YaHei">删除用户信息</h1>
    </div>
  <form class="form-signin" role="form" action="" method="POST">
  <div>

    <div class = "form-group">
     <label for = "floor">ID序列号</label>
     <input type="text" class="form-control" name="deleteby_uid" placeholder="ID序列号" required >
     <span class="error"></span><br/>
    </div>

    </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_deleteu">删除</button>
      </form>
    </div>

</div>

 

<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
