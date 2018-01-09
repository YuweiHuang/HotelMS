<?php
  require 'header.php';
?>

<form class="form-signin" role="form" action="" method="POST">
  <div style="padding: 0px 300px;">
    <div class="page-header" style="padding: 0px 150px;">
      <h1 style="font-family:Microsoft YaHei;font-size:20px">订单信息</h1>
    </div>
    <div style="padding: 0px 300px;">
    <ul class="list-group">
      <li class="list-group-item" style="font-family:Microsoft YaHei">住客姓名：</li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei">联系电话或电子邮箱: </li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei">身份证号: </li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei">房间类型: </li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei">入住时间: </li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei">退房时间: </li><br/>
      <li class="list-group-item" style="font-family:Microsoft YaHei"><b>预付款: 元</b></li><br/>
    </ul>
    <br/><button class="btn btn-lg btn-primary btn-block" type="submit" name="confirm_submit">确认</button>
  </form>
 </div>
</div>

<?php
  require 'footer.php';
?>