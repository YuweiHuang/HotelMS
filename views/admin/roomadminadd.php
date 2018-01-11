<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>房间管理</title>
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
<br/>

<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:  Microsoft YaHei">添加房间信息</h1>
  </div>
<form class="form-signin" role="form" action="../../controlers/adminAction/addRoomAction.php" method="POST">
<div>

  <div class = "form-group">
   <label for = "floor">房间号</label>
   <input type="text" class="form-control" name="set_rid" placeholder="房间号" required ><br/>
  </div>

  <div class = "form-group">
   <label for = "type">房间类型</label>
   <select id = "type" class = "form-control" name="set_rtype">
    <option  value="普通大床房">普通大床房</option>
    <option  value="精选大床房">精选大床房</option>
    <option  value="豪华大床房">豪华大床房</option>
    <option  value="商务大床房">商务大床房</option>
    <option  value="豪华套房">豪华套房</option>
    <option  value="总统套房">总统套房</option>
   </select>
   <br/>
  </div>

  <div class = "form-group">
   <label for = "floor">房间楼层</label>
   <input type="text" class="form-control" name="set_rlocation" placeholder="房间楼层" required ><br/>
  </div>
   <div class = "form-group">
   <label for = "floor">房间电话</label>
   <input type="text" class="form-control" name="set_rtel" placeholder="房间电话" required ><br/>
  </div>



  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_add">添加</button>
    </form>
  </div>
<br/>

</div>

 

<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
