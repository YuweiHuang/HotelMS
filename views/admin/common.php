<!-- <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="">
          </div>
          <button type="submit" class="btn btn-default">管理员</button>
        </form> -->
<ul class="nav navbar-nav navbar-right">
          <li><a href="adProfile.php" style="font-family:Microsoft YaHei">个人信息</a></li>
          <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" style="font-family:Microsoft YaHei" href="">
			房间管理 <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="roomadminadd.php">增加房间</a></li>
			<li><a href="roomadmindel.php">删除/修改房间</a></li>
		</ul>
	</li>
          <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" style="font-family:Microsoft YaHei" href="">
			会员管理 <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="useradminadd.php">增加会员</a></li>
			<li><a href="useradmindel.php">删除/修改会员</a></li>
		</ul>
	</li>
         
    <?php 
			session_start();
			if (isset($_SESSION['user_account']))
			{
				if($_SESSION['user_authority']==2)
				{
		 ?>
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" style="font-family:Microsoft YaHei" href="">
			管理员管理 <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="adminadd.php">增加管理员</a></li>
			<li><a href="admindel.php">删除/修改管理员</a></li>
		</ul>
	</li>
	<?php 
	}} ?>
  <li><a href="../../controlers/adminAction/adLogoffAction.php" style="font-family:Microsoft YaHei">注销</a></li>
  <li><a><?php echo "欢迎您! ".$_SESSION['truename']; ?></a></li>
</ul>

