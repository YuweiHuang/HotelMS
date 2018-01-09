<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户账号管理</title>
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



<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:	Microsoft YaHei">添加住客信息</h1>
  </div>
<form class="form-signin" role="form" action="" method="POST">
<div>

  <div class = "form-group">
   <label for = "floor">身份证号</label>
   <input type="text" class="form-control" name="set_cid" placeholder="身份证号" required ><br/>
  </div>

	<div class = "form-group">
   <label for = "floor">住客姓名</label>
   <input type="text" class="form-control" name="set_cname" placeholder="住客姓名" required ><br/>
  </div>

	<div class = "form-group">
   <label for = "floor">联系电话</label>
   <input type="text" class="form-control" name="set_cphone" placeholder="联系电话" required ><br/>
  </div>

  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_addc">添加</button>
    </form>
  </div>
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
