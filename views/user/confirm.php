<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>影子宾馆</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.min.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>