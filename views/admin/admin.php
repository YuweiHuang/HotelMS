<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>宾馆管理系统</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

  <script>
$(document).ready(function(){
    $("#myNav").affix({
        offset: {
            top: 125
      }
    });
});
</script>

</head>

<style>
/* Custom Styles */
    ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li:first-child{
        border-top: none;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    ul.nav-tabs li:first-child a{
        border-radius: 4px 4px 0 0;
    }
    ul.nav-tabs li:last-child a{
        border-radius: 0 0 4px 4px;
    }
    ul.nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
</style>

<body body data-spy="scroll" data-target="#myScrollspy">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="font-family:Microsoft YaHei" href="admin.php">影子宾馆管理员端</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

        <!--<form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>-->
        <!-- <include src = "common.html"></include> -->
        <?php require 'common.html'?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<div class="container">
   <div class="jumbotron">
        <h1 style="font-family:Microsoft YaHei">欢迎来到管理员界面！</h1>
        <p style="font-family:Microsoft YaHei">请在导航栏中选择您想使用的功能</p>
        <p style="font-family:Microsoft YaHei">哦对了，下面是功能介绍</p>
    </div>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="125">
                <li class="active"><a href="#section-1">房间信息管理</a></li>
                <li><a href="#section-2">住客信息管理</a></li>
                <li><a href="#section-3">用户账号管理</a></li>
                <li><a href="#section-4">住宿信息管理</a></li>
                <li><a href="#section-5">管理员个人信息</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <h2 id="section-1">房间信息管理</h2>
            <p>在房间信息管理页面中，你可以增加、删除、查找、修改各个房间的各项信息，包括房间号、房间类型、房间价格等各项信息</p>
            <p>记得在修改完后点击提交哦</p>
            <hr>

            <h2 id="section-1">Room information management</h2>
            <p>In the room information management page, you can add, delete, search and modify all the information of each room, including room number, room type, room price and other information.</p>
            <p>Remember to click the submit button after the modification</p>
            <hr>

            <h2 id="section-2">住客信息管理</h2>
            <p>在住客信息管理页面中，你可以增加、删除、查找、修改各位住客的各项信息，包括住客的身份证号，姓名，电话号号码等各项信息</p>
            <p>记得在修改完后点击提交哦</p>
            <hr>

            <h2 id="section-2">Customer information management</h2>
            <p>In the customer information management page, you can add, delete, search and modify all the information of your customer, including the ID card number, name, phone number and other information.</p>
            <p>Remember to click the submit button after the modification</p>
            <hr>

            <h2 id="section-3">用户账号管理</h2>
            <p>在用户账号管理页面中，你可以增加、删除、查找、修改各个注册用户的各项信息，包括用户账户的登记id，用户用于登录的手机号码或电子邮箱地址，用户真实姓名，用户账号的密码等各项信息</p>
            <p>注：用户与住客信息不一定相同，用户可以是住客，住客不一定是用户</p>
            <p>记得在修改完后点击提交哦</p>
            <hr>

            <h2 id="section-3">User account Management</h2>
            <p>In the user account management page, you can add, delete, search, modify all the information of registered users, including user account,registration ID, mobile phone number or e-mail address for user login , user name, user account password and other information items</p>
            <p>Note: the user and the guest information are not necessarily the same, the user can be the guest, the guest is not necessarily the user</p>
            <p>Remember to click the submit button after the modification</p>
            <hr>

            <h2 id="section-4">住宿信息管理</h2>
            <p>在住宿信息管理页面中，你可以增加、删除、查找、修改各个房间的住宿信息，包括房间号，住客身份证号，预付款，入住/退房时间等各项信息</p>
            <p>记得在修改完后点击提交哦</p>
            <hr>

            <h2 id="section-4">Accommodation information Management</h2>
            <p>In the accommodation information management page, you can add, delete, search and modify the accommodation information of each room, including room number, guest ID card number, advance payment, check-in / check-out time and other information.</p>
            <p>Remember to click the submit button after the modification</p>
            <hr>

            <h2 id="section-5">管理员个人信息</h2>
            <p>在个人信息页面中，你可以修改你自己的实际姓名和登录密码，但不能修改自己的管理员账号</p>

            <h2 id="section-5">Administrator personal information</h2>
            <p>In the personal information page, you can modify your own real name and login password, but you can't modify your own administrator account.</p>
        </div>
    </div>
</div>

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
