<?php
  require 'header.php';
?>

<div class="container">

  <div>
    <div style="padding: 0px 350px;">
      <p style="font-family:Microsoft YaHei">用户名</p>
      <input type="text" class="form-control" id="name" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">会员账号</p>
      <input type="text" class="form-control" id="account" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">密码</p>
      <input type="text" class="form-control" id="password" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">真实姓名</p>
      <input type="text" class="form-control" id="truename" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">积分</p>
      <input type="text" class="form-control" id="point" value="" disabled="disabled"><br/>

      <p style="font-family:Microsoft YaHei">会员等级</p>
      <input type="text" class="form-control" id="member_type" value="" disabled="disabled"><br/>

    </div>
  </div>

  <div>
    <div class="page-header" style="padding: 0px 200px;">
      <h1 style="font-family:Microsoft YaHei;font-size:20px">修改个人信息</h1>
    </div>
    <form class="form-signin" role="form" action="../php/userProfileUpdate.php" method="POST">
    <div style="padding: 0px 350px;">
      <p style="font-family:Microsoft YaHei">会员账号(登录用邮箱或手机号)</p>
      <input type="text" class="form-control" name="account_new" value="" placeholder="会员账号" required ><br/>
      <p style="font-family:Microsoft YaHei">用户名</p>
      <input type="text" class="form-control" name="name_new" value="" placeholder="用户名" required ><br/>
      <p style="font-family:Microsoft YaHei">新密码</p>
      <input type="password" class="form-control" name="password_new" placeholder="账号密码" required>
      <span class="error"></span><br/>
      <p style="font-family:Microsoft YaHei">确认密码</p>
      <input type="password" class="form-control" name="rpassword_new" placeholder="确认密码" required><br/>
      <p style="font-family:Microsoft YaHei">真实姓名</p>
      <input type="text" class="form-control" name="truename_new" value="" placeholder="真实姓名" required ><br/>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="uc_submit">提交</button>
    </div>
    </form>
  </div>
<?php
  require 'footer.php';
?>