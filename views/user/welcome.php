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

	<!-- <div class="jumbotron">
		<div class="container">
			<h1 style="font-family:Microsoft YaHei">欢迎来到影子宾馆
				<small style="font-family:Microsoft YaHei">Welcome to Shadow Hotel</small>
			</h1>
			<p style="font-family:Microsoft YaHei">请在导航栏中选择您想使用的功能</p>
		</div>
	</div> -->
	<!-- <div id="showRoom" class="col-sm-6 col-md-4">
		
	</div> -->
	<!-- <div></div> -->
	<div id="showRoom">
	<div class="row" style="padding: 0px 400px;font-family:Microsoft YaHei">
		<form class="form-group">
		  	<div class = "form-group">
	           <label for = "in_time">入住时间</label>
	            <div class="input-append date form_datetime">
	              <input id="dtp1" name="set_dt1" size="16" class="form-control" type="text" value="" readonly>
	              <span class="add-on"><i class="icon-remove"></i></span>
	              <span class="add-on"><i class="icon-th"></i></span>
	            </div>
	          </div>

	          <div class = "form-group">
	           <label for = "out_time">退房时间</label>
	            <div class="input-append date form_datetime">
	              <input id="dtp2" name="set_dt2" size="16" class="form-control" type="text" value="" readonly>
	              <span class="add-on"><i class="icon-remove"></i></span>
	              <span class="add-on"><i class="icon-th"></i></span>
	            </div>
	          </div>
	          <!-- <div class = "form-group"> -->
	          	<label for = "search">请点击</label>
	           <button type="button" class="btn btn-default" id="search">搜索</button>
	          <!-- </div> -->
		  		
		</form>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <div class="caption">
	        <h3>普通大床房</h3>
	        <p>233￥/晚</p>
	        <!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
				<a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">了解详情</a>
				 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
								</button>
								<h4 class="modal-title" id="myModalLabel">
									普通大床房
								</h4>
							</div>
							<div class="modal-body">
								面积：26平米<br/>
								楼层：1层<br/>
								房型：内有一张双人床<br/>
								床型：1.8*2米<br/>
								42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
								支持Iphone、Ipad以及蓝牙连接的音响<br/>
								免费无线上网、独立淋浴<br/>
								该房型不可加床<br/>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									关闭
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				
	      </div>
	    </div>
	  </div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>普通双床房</h3>
					<p>250￥/晚</p>
					<p><!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
					 <a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal_1">了解详情</a>
					 <div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									</button>
									<h4 class="modal-title" id="myModalLabel">
										普通双床房
									</h4>
								</div>
								<div class="modal-body">
									面积：28平米<br/>
									楼层：1层<br/>
									房型：内有两张单人床<br/>
									床型：1.2*2米<br/>
									42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
									支持Iphone、Ipad以及蓝牙连接的音响<br/>
									免费无线上网、浴缸及独立淋浴<br/>
									该房型不可加床<br/>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										关闭
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</p>
				</div>
			</div>
		</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>豪华大床房</h3>
					<p>300￥/晚</p>
					<p><!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
						 <a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal_2">了解详情</a>
								 <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		 						 <div class="modal-dialog">
		 							 <div class="modal-content">
		 								 <div class="modal-header">
		 									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
		 									 </button>
		 									 <h4 class="modal-title" id="myModalLabel">
		 										 豪华大床房
		 									 </h4>
		 								 </div>
		 								 <div class="modal-body">
											 面积：30平米<br/>
											 楼层：2层<br/>
											 房型：内有一张双人床<br/>
											 床型：1.2*2米<br/>
											 42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
											 支持Iphone、Ipad以及蓝牙连接的音响<br/>
											 免费无线上网、独立淋浴<br/>
											 该房型不可加床<br/>
		 								 </div>
		 								 <div class="modal-footer">
		 									 <button type="button" class="btn btn-default" data-dismiss="modal">
		 										 关闭
		 									 </button>
		 								 </div>
		 							 </div><!-- /.modal-content -->
		 						 </div><!-- /.modal-dialog -->
		 				 </p>
		 			 </div>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row" style="padding: 0px 400px;font-family:Microsoft YaHei">

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>豪华双床房</h3>
					<p>333￥/晚</p>
					<p><!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
						 <a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal_3">了解详情</a>
								 <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								 <div class="modal-dialog">
									 <div class="modal-content">
										 <div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
											 </button>
											 <h4 class="modal-title" id="myModalLabel">
												 豪华双床房
											 </h4>
										 </div>
										 <div class="modal-body">
										 面积：32平米<br/>
										 楼层：2层<br/>
										 房型：内有两张单人床<br/>
										 床型：1.2*2米<br/>
										 42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
										 支持Iphone、Ipad以及蓝牙连接的音响<br/>
										 免费无线上网、独立淋浴<br/>
										 该房型不可加床<br/>
										 </div>
										 <div class="modal-footer">
											 <button type="button" class="btn btn-default" data-dismiss="modal">
												 关闭
											 </button>
										 </div>
									 </div><!-- /.modal-content -->
								 </div><!-- /.modal-dialog -->
						 </p>
					 </div>
					</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>精选大床房</h3>
					<p>450￥/晚</p>
					<p><!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
						 <a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal_4">了解详情</a>
						 <div class="modal fade" id="myModal_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						 <div class="modal-dialog">
							 <div class="modal-content">
								 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									 </button>
									 <h4 class="modal-title" id="myModalLabel">
										 精选大床房
									 </h4>
								 </div>
								 <div class="modal-body">
									 面积：38平米<br/>
									 楼层：3层<br/>
									 房型：内有一张单人床<br/>
									 床型：1.8*2米<br/>
									 42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
									 支持Iphone、Ipad以及蓝牙连接的音响<br/>
									 免费无线上网、独立淋浴<br/>
									 该房型不可加床<br/>
								 </div>
								 <div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">
										 关闭
									 </button>
								 </div>
							 </div><!-- /.modal-content -->
						 	</div><!-- /.modal-dialog -->
						 </p>
					 </div>
					</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="caption">
					<h3>精选双床房</h3>
					<p>600￥/晚</p>
					<p><!-- <a href="reservation.php" class="btn btn-primary" role="button">预订</a> -->
						 <a class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal_5">了解详情</a>
						 <div class="modal fade" id="myModal_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						 <div class="modal-dialog">
							 <div class="modal-content">
								 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
									 </button>
									 <h4 class="modal-title" id="myModalLabel">
										 精选双床房
									 </h4>
								 </div>
								 <div class="modal-body">
									 面积：44平米<br/>
									 楼层：3-9层<br/>
									 房型：内有两张单人床<br/>
									 床型：1.2*2米<br/>
									 42"飞利浦液晶电视、小冰箱、电动窗帘<br/>
									 支持Iphone、Ipad以及蓝牙连接的音响<br/>
									 免费无线上网、临窗豪华独立浴缸及独立淋浴<br/>
									 该房型不可加床<br/>
								 </div>
								 <div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">
										 关闭
									 </button>
								 </div>
							 </div><!-- /.modal-content -->
						 	</div><!-- /.modal-dialog -->
						 </p>
					 </div>
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../../assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $("#dtp1").datetimepicker({
            minView: "month", //选择日期后，不会再跳转去选择时分秒 
            language:  'zh-CN',
            format: 'yyyy-mm-dd',
            todayBtn:  1,
            autoclose: 1,
        });
      </script>
      <script type="text/javascript">
	      $("#dtp2").datetimepicker({
	          minView: "month", //选择日期后，不会再跳转去选择时分秒 
	          language:  'zh-CN',
	          format: 'yyyy-mm-dd',
	          todayBtn:  1,
	          autoclose: 1,
	      });
	    </script>
	    <script type="text/javascript" src="../../assets/js/showRoomList.js" charset="UTF-8"></script>
    </body>
</html>
