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

  <!-- 
    若上个页面，用户选择使用新住客信息
    则进入
    步骤一:录入住客信息
    form表的信息，通过php文件，添加入customer表
    同时，form表的部分信息或者全部信息，存入session变量
    用于之后bill表信息的添加
   -->

  <div class="container">

     <form class="form-signin" role="form" action="" method="POST">
      <div>
        <div class="page-header" style="padding: 0px 200px;">
          <h1 style="font-family:Microsoft YaHei;font-size:20px">步骤三：确认订单</h1>
          <span class="error"></span>
        </div>


        <div style="padding: 0px 350px;">
          <p style="font-family:Microsoft YaHei">住户姓名</p>
          <input type="text" class="form-control" id="name" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">联系方式</p>
          <input type="text" class="form-control" id="tel" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">身份证号</p>
          <input type="text" class="form-control" id="id" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">入住房型</p>
          <input type="text" class="form-control" id="roomtype" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">房间号</p>
          <input type="text" class="form-control" id="roomnum" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">入住日期</p>
          <input type="text" class="form-control" id="intime" value="" disabled="disabled"><br/>

          <p style="font-family:Microsoft YaHei">离店日期</p>
          <input type="text" class="form-control" id="checktime" value="" disabled="disabled"><br/><br/>

          <div class="" role="group" aria-label="..." style="padding: 0px 20px;">
              <button type="button" class="btn btn-lg btn-danger" id="cancle">信息有误，取消订单</button>
              <button type="submit" class="btn btn-lg btn-primary confirm">信息无误，确认订单</button><br/><br/>
          <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" name="accom_submit">确认订单</button>
          <button class="btn btn-lg btn-danger btn-block" type="button" name="cancle">取消订单</button> -->
          </div>

        </div>


        </div>

        </form>
      </div>

  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../assets/js/confirmOrder.js"></script>
    <script type="text/javascript" src="../../assets/js/cancle.js"></script>
    </body>
</html>