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

<?php 
require 'footer.php';
 ?>