<?php 
require 'header.php';
 ?>
    <div class="container" style="padding: 200px 450px 150px;font-family:Microsoft YaHei;">
		 <div class="transbox">
			<div class="inside">
		      <form class="form-signin" role="form" action="../../controlers/userAction/userLoginAction.php" method="POST">
					</br>
						<h2 class="form-signin-heading" align="center">用户登录</h2>
		        <input type="text" name="uaccount" class="form-control" placeholder="手机号或邮箱" required autofocus>
		        		<!--用户名错误报错-->
						<span class="error"></span><br/>
		        <input type="password" name="upwd" class="form-control" placeholder="密码"  required>
		       			<!--用户密码错误报错-->
						<span class="error"></span>
		        <div class="checkbox">
		          <label>
		            <input type="checkbox" value="remember-me"> 记住我
		          </label>
		        </div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit" name="c_submit">登录</button>
		        <a href="userRegister.html">什么？听说你没账户？</a>
		      </form>
			</div>
			</div>
    </div>
<?php 
	require 'footer.php';
 ?>