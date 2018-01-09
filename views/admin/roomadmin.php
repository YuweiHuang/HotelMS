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
   <div class="jumbotron">
        <h1 style="font-family:Microsoft YaHei">欢迎来到房间管理界面！</h1>
        <p style="font-family:Microsoft YaHei">请在导航栏中选择您想使用的其他功能</p>
    </div>

    <div class="table-responsive">
      <table class="table">
        <caption><h2 align="center">房间信息</h2></caption>
        <thead>
          <tr>
            <th>房间号</th>
            <th>房间类型</th>
            <th>房间价格</th>
            <th>房间状态</th>
            <th>入住时间</th>
            <th>退房时间</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
<br/>

<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:  Microsoft YaHei">添加房间信息</h1>
  </div>
<form class="form-signin" role="form" action="" method="POST">
<div>

  <div class = "form-group">
   <label for = "floor">房间号</label>
   <input type="text" class="form-control" name="set_rid" placeholder="房间号" required ><br/>
  </div>

  <div class = "form-group">
   <label for = "type">房间类型</label>
   <select id = "type" class = "form-control" name="set_rtype">
    <option  value="普通大床房">普通大床房</option>
    <option  value="普通双床房">普通双床房</option>
    <option  value="豪华大床房">豪华大床房</option>
    <option  value="豪华双床房">豪华双床房</option>
    <option  value="精选大床房">精选大床房</option>
    <option  value="精选双床房">精选双床房</option>
   </select>
  </div>


  <div class = "form-group">
   <label for = "status">房间状态</label>
   <select id = "status" class = "form-control" name="set_rstatus">
    <option value="空闲">空闲</option>
    <option value="已预定">已预定</option>
    <option value="已入住">已入住</option>
   </select>
  </div>
 <div class = "form-group">
   <label for = "floor">房间楼层</label>
   <input type="text" class="form-control" name="set_location" placeholder="房间楼层" required ><br/>
  </div>
   <div class = "form-group">
   <label for = "floor">房间电话</label>
   <input type="text" class="form-control" name="set_tel" placeholder="房间电话" required ><br/>
  </div>
  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_add">添加</button>
    </form>
  </div>
<br/>

</div>

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
