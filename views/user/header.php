
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
      <a class="navbar-brand" href="welcome.php">
        <span class="glyphicon glyphicon-home" aria-hidden="true"> 影子宾馆</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
		<li><a href="roomList.php">房间信息查询</a></li>
		<?php 
			session_start();
			if (isset($_SESSION['user_account']))
			{
		 ?>
		<li><a href="reservation.php">房间预订</a></li>
		<li><a href="myOrder.php">我的订单</a></li>
      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userProfile.php">会员个人信息</a></li>
        <li><a href="../../controlers/userAction/userLogoffAction.php">注销</a></li>
      </ul>
      <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
