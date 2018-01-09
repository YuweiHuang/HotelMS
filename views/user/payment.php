<?php
  require 'header.php';
?>

<!-- <style>
.error {color: #FF0000;}
</style> -->

  <!-- 
    若上个页面，用户选择使用新住客信息
    则进入
    步骤一:录入住客信息
    form表的信息，通过php文件，添加入customer表
    同时，form表的部分信息或者全部信息，存入session变量
    用于之后bill表信息的添加
   -->

  <div class="container">
      <div>
        <form class="form-signin" role="form" action="" method="POST">
        <div class="page-header" style="padding: 0px 200px;">
          <h1 style="font-family:Microsoft YaHei;font-size:20px">步骤三：扫码支付</h1>
          <h1 style="font-family:Microsoft YaHei;font-size:20px">您需要支付的订单金额为：<h1 style="font-family:Microsoft YaHei;font-size:20px" id="money">元</h1></h1>
        </div>
        <div style="padding: 0px 350px;">
             <img src="../img/payment.jpg" alt="..."></br>
             <h1 style="font-family:Microsoft YaHei;font-size:20px"><a href="welcome.html">已完成支付，点击跳转至主页</a></h1>
        </div>
        </form>

      </div>

  </div>
<?php
  require 'footer.php';
?>