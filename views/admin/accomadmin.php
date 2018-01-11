<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户账号管理</title>
	
	<link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.min.css" type="text    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
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
 <?php require 'common.php' ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>

<div class="container">

<br/>

    <div class="table-responsive">
      <table class="table">
        <caption>住宿信息</caption>
        <thead>
          <tr>
            <th>住客身份证号</th>
						<th>房间号</th>
            <th>预付款</th>
						<th>入住日期</th>
						<th>离店日期</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>

</div>



<div class="container" style="padding: 0px 300px 0px 300px">
  <div class="page-header" >
    <h1 align="center" style="font-family:	Microsoft YaHei">添加住宿信息</h1>
  </div>
<form class="form-signin" role="form" action="" method="POST">
<div>

  <div class = "form-group">
   <label for = "floor">身份证号</label>
   <input type="text" class="form-control" name="set_cid_acc" placeholder="身份证号" required ><br/>
  </div>

	<div class = "form-group">
	 <label for = "floor">房间号</label>
	 <input type="text" class="form-control" name="set_rid_acc" placeholder="房间号" required ><br/>
	</div>

	<div class = "form-group">
   <label for = "floor">预付款</label>
   <input type="text" class="form-control" name="set_aprice_acc" placeholder="预付款" required ><br/>
  </div>

	<div class = "form-group">
	 <label for = "floor">入住时间</label>
	 	<div class="input-append date form_datetime">
    	<input id="dt1" name="set_dt1" size="16" class="form-control" type="text" value="" readonly>
    	<span class="add-on"><i class="icon-remove"></i></span>
    	<span class="add-on"><i class="icon-th"></i></span>
		</div>

		<script type="text/javascript">
    	$("#dt1").datetimepicker({
        	format: "yyyy-mm-dd hh:ii:ss",
        	showMeridian: true,
        	autoclose: true,
        	todayBtn: true
    	});
		</script>
	</div>

	<div class = "form-group">
	 <label for = "floor">退房时间</label>
		<div class="input-append date form_datetime">
			<input id="dt2" name="set_dt2" size="16" class="form-control" type="text" value="" readonly>
			<span class="add-on"><i class="icon-remove"></i></span>
			<span class="add-on"><i class="icon-th"></i></span>
		</div>

		<script type="text/javascript">
			$("#dt2").datetimepicker({
					format: "yyyy-mm-dd hh:ii:ss",
					showMeridian: true,
					autoclose: true,
					todayBtn: true
			});
		</script>
	</div>

  </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_add_acc">添加</button>
    </form>
  </div>

<br/>
  <div class="container" style="padding: 0px 300px 0px 300px">
    <div class="page-header" >
      <h1 align="center" style="font-family:	Microsoft YaHei">删除住宿信息</h1>
    </div>
  <form class="form-signin" role="form" action="" method="POST">
  <div>

    <div class = "form-group">
     <label for = "floor">房间号</label>
     <input type="text" class="form-control" name="deleteby_acc" placeholder="房间号" required >
     <span class="error"></span><br/>
    </div>

    </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit_delete_acc">删除</button>
      </form>
    </div>

</div>

<script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.fr.js"></script>
</body>
</html>
