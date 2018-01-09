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
<?php 
  require 'footer.php';
 ?>