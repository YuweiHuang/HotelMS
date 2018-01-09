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
     <div class="jumbotron">
          <h1 style="font-family:Microsoft YaHei">房间预订</h1>
      </div>

      <div>
        <form class="form-signin" role="form" action="" method="POST">
        <div class="page-header" style="padding: 0px 200px;">
          <h1 style="font-family:Microsoft YaHei;font-size:20px">步骤一：填写个人信息</h1>
        </div>
        <div style="padding: 0px 350px;">
          <p style="font-family:Microsoft YaHei">住客姓名</p>
          <input type="text" class="form-control" name="name_c" placeholder="住客姓名" value="" required><br/>

          <p style="font-family:Microsoft YaHei">联系电话或电子邮箱</p>
          <input type="text" class="form-control" name="tel" placeholder="联系电话或电子邮箱" value="" required><br/>

          <p style="font-family:Microsoft YaHei">年龄</p>
          <input type="text" class="form-control" name="age" placeholder="年龄" value="" required><br/>

          <p style="font-family:Microsoft YaHei">所在国家</p>
          <input type="text" class="form-control" name="country" placeholder="所在国家" value="" required><br/>

          <p style="font-family:Microsoft YaHei">所在城市</p>
          <input type="text" class="form-control" name="city" placeholder="所在城市" value="" required><br/>

          <div class = "form-group">
           <label for = "type">选择证件类型</label>
           <select id = "type" class = "form-control" name="select_id_type">
            <option  value="第二代身份证">第二代身份证</option>
            <option  value="护照">护照</option>
           </select>
          </div>

          <p style="font-family:Microsoft YaHei">证件号码</p>
          <input type="text" class="form-control" name="IDnum" placeholder="证件号码" required><br/>

          <button class="btn btn-lg btn-primary btn-block" type="submit" name="accom_submit">提交</button><br/>
        </div>
        </form>

       <!--  <div class="page-header" style="padding: 0px 150px;">
          <h1 style="font-family:Microsoft YaHei;font-size:20px">步骤二：选择房间</h1>
          <span class="error"></span>
        </div>

        <div style="padding: 0px 300px;">
          <div class = "form-group">
           <label for = "type">选择房间类型</label>
           <select id = "type" class = "form-control" name="select_type">
            <option  value="豪华大床房">豪华大床房</option>
            <option  value="精选双床房">精选大床房</option>
            <option  value="豪华双床房">豪华双床房</option>
            <option  value="商务双床房">商务双床房</option>
            <option  value="豪华套房">豪华套房</option>
            <option  value="总统套房">总统套房</option>
           </select>
          </div>

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
           <label for = "floor">入住时间</label>
            <div class="input-append date form_datetime">
              <input id="dtp1" name="set_dt2" size="16" class="form-control" type="text" value="" readonly>
              <span class="add-on"><i class="icon-remove"></i></span>
              <span class="add-on"><i class="icon-th"></i></span>
            </div>
            <script type="text/javascript">
              $("#dtp1").datetimepicker({
                  minView: "month", //选择日期后，不会再跳转去选择时分秒 
                  language:  'zh-CN',
                  format: 'yyyy-mm-dd',
                  todayBtn:  1,
                  autoclose: 1,
              });
            </script>
          </div>

          <div class = "form-group">
           <label for = "floor">退房时间</label>
            <div class="input-append date form_datetime">
              <input id="dtp2" name="set_dt2" size="16" class="form-control" type="text" value="" readonly>
              <span class="add-on"><i class="icon-remove"></i></span>
              <span class="add-on"><i class="icon-th"></i></span>
            </div>
            <script type="text/javascript">
              $("#dtp2").datetimepicker({
                  minView: "month", //选择日期后，不会再跳转去选择时分秒 
                  language:  'zh-CN',
                  format: 'yyyy-mm-dd',
                  todayBtn:  1,
                  autoclose: 1,
              });
            </script>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="accom_submit">提交</button>
        </div>

        </form> -->
      </div>

  </div>
<?php 
  require 'footer.php';
 ?>
