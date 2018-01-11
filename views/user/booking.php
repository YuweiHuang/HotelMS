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

  <!-- <div class="row"> -->
    <div class="panel panel-info" style = "width:80%;margin:0 auto;">
    <div class="panel-heading">
      <h3 class="panel-title">预定信息</h3>
    </div>
    <div class="panel-body">
      <ul style="list-style-type: none;">
        <li id="room_type" data-roomtype = "<?php echo $_GET['room_type']; ?>">房间类型: <?php echo $_GET['room_type']; ?></li>
        <li id="room_id" data-roomid = "<?php echo $_GET['room_id']; ?>">房间号码: <?php echo $_GET['room_id']; ?></li>
        <li id="start_time" data-starttime = "<?php echo $_GET['start_time']; ?>">入住时间: <?php echo $_GET['start_time']; ?></li>
        <li id="end_time" data-endtime = "<?php echo $_GET['end_time']; ?>">离店时间: <?php echo $_GET['end_time']; ?></li>
        <a href="welcome.php">修改时间</a>
      </ul>
    </div>
  </div>

  <div class="panel panel-info" style = "width:80%;margin:0 auto;">
    <div class="panel-heading">
      <h3 class="panel-title">入住信息</h3>
    </div>
    <div class="panel-body">
      <form action="../../controlers/userAction/submitBillAction.php">
        <table class='table table-hover'>

          <tr>
            <td>
              <label for="customer">入住人</label>  
            </td>
            <td>
              <input type="text" class="form-control" id="customer" placeholder="张飞" name="customer">
            </td>
          </tr>
          
          <tr>
            <td>
              <label for="phone">联系电话</label>
            </td>
            <td>
              <input type="text" class="form-control" id="phone" placeholder="手机号码" name="phone">
            </td>
          </tr>

          <tr>
            <td>
              <label for="idnumber">身份证号</label>  
            </td>
            <td>
              <input type="text" class="form-control" id="idnumber" placeholder="身份证号码" name="idnumber">
            </td>
          </tr>
          
        </table>
        <button type="button" class="btn btn-info" id="submitBill">提交订单</button>
      </form>
    </div>
  </div>
  <!-- </div> -->
  

  

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/submitBill.js"></script>
    </body>
</html>