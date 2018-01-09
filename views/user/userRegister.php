<?php 
require 'header.php';
 ?>

  <div class="container" style="padding: 150px 350px 50px;">
    <div class="transbox">
     <div class="inside">
    <div class="page-header" >
    </br>
      <h1 align="center" style="font-family:	Microsoft YaHei">会员注册</h1>
    </div>
    <form class="form-signin" role="form" action="../php/userRegister.php" method="POST">
    <div>
      <p style="font-family:Microsoft YaHei">用户名</p>
      <input type="text" class="form-control" name="rname" placeholder="用户名" required ><br/>
      <p style="font-family:Microsoft YaHei">手机号或邮箱</p>
      <input type="text" class="form-control" name="raccount" placeholder="手机号或邮箱" required >
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">账号密码</p>
      <input type="password" class="form-control" name="rpwd" placeholder="账号密码" required>
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">确认密码</p>
      <input type="password" class="form-control" name="rrpwd" placeholder="确认密码" required><br/>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="rsubmit">注册</button>
    <a href="userLogin.php" align="right">已有账号,直接登录</a>
    </form>
  </div>
  </div>
  </div>
<?php 
require 'footer.php';
 ?>
