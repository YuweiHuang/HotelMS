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

  <div class="container">
    <div class="container" style="padding: 0px 300px 0px 300px">
      <div class="page-header" >
        <h1 align="center" style="font-family:	Microsoft YaHei">房间信息查找</h1>
      </div>

    <div>

      <div class = "form-group">
       <label for = "location">房间楼层</label>
       <select id = "location" class = "form-control" name="location">
        <option value="一层">一层</option>
        <option value="二层">二层</option>
        <option value="三层">三层</option>
        <option value="所有楼层">所有楼层</option>
       </select>
      </div>

      <div class = "form-group">
       <label for = "type">房间类型</label>
       <select id = "type" class = "form-control" name="type">
        <option  value="豪华大床房">豪华大床房</option>
        <option  value="精选大床房">精选大床房</option>
        <option  value="豪华双床房">豪华双床房</option>
        <option  value="商务双床房">商务双床房</option>
        <option  value="豪华套房">豪华套房</option>
        <option  value="总统套房">总统套房</option>
        <option  value="类型不限">类型不限</option>
       </select>
      </div>

      <div class = "form-group">
       <label for = "status">房间状态</label>
       <select id = "status" class = "form-control" name="status">
        <option value="空闲">空闲</option>
        <option value="状态不限">状态不限</option>
       </select>
      </div>

      </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="submit_search" name="submit_s">查找</button>
        
      </div>

  <br/>
  <br/>

      <div class="table-responsive">
        <table class="table table-striped">
          <caption>房间信息</caption>
          <thead>
            <tr>
              <th>房间号</th>
              <th>房间类型</th>
              <th>所在楼层</th>
              <th>房间价格</th>
              <th>房间状态</th>
              <th>立即预定</th>
            </tr>
          </thead>
          <tbody id = "J_TbData">
            
          </tbody>
        </table>
      </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../assets/js/roomlist.js"></script>
    </body>
</html>