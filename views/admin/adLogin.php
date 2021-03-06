<!--宾馆管理员登录页面-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>管理员登录</title>
    
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
  </head>
  <style>
  .error {color: #FF0000;}
  </style>

<style type="text/css">
	body {
	  background-image: url(../img/yamato2.jpg);
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		 background-size:100%;
	}

	div.transbox
	{
		border-radius: 15px;
		width:300px;
		height:350px;
		background-color:#ffffff;
		opacity:0.85;
		filter:alpha(opacity=60); /* IE8 及更早版本 */
	}

	div.inside
	{
		margin:10px;
		outline-offset:15px;
	}
</style>

  <body>
    <div class="container" style="padding: 200px 450px 50px;font-family:Microsoft YaHei;">
			<div class="transbox">
			 <div class="inside">
      <form class="form-signin" role="form" action="../../controlers/adminAction/adminLoginAction.php" method="POST">
				</br>
				<h2 class="form-signin-heading" align="center">管理员登录</h2>
        <input type="text" name="a_account" class="form-control" placeholder="管理员账号" required autofocus>
        	<!--用户名错误报错-->
         	<span class="error"></span><br/>
        <input type="password" name="a_pwd" class="form-control" placeholder="密码" required>
        <!--用户名错误报错-->
         <span class="error"></span>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="a_submit">登录</button>
        <a href="adRegister.html">什么？你个管理员也没账户？</a>
      </form>
		</div>
		</div>
    </div>
    
   <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
  </body>
</html>
