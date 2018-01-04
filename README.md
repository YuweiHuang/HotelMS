Hotel Management System 宾馆管理系统
=======================

>This is a management system for large hotel company built on software practice course design. We use well-known MVC framework and develop the system based on PHP5.

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Clone 

Add my repository as master and git fetch to your local repository.

If you fetch my data successfully, you will see our index page when you visit "localhost:8080" on your laptop.

DIRECTORY STRUCTURE
-------------------
      commons/            public config files
      controllers/        contains Web controller classes
        action/           user or admin functions
      models/             contains model classes
        dao/              database operations
        entity/           entities
        service/          user and admin services
      views/              contains view files for the Web application
        js/               javascript files
        css/              style sheet files
        img/              images
        fonts/            fonts
        html/             html files
      HotelMS.sql         mysql file of this management system
      index.php           index page

CORPORATION
-------------
## Jobs

### Architechture, Management

- Yuwei Huang

### Views

- Wei Wei
- Dao Zhou

### Models

- Yuwei Huang 
- Dao Zhou

### Logic Controler

- Dao Zhou
- Xinyu Zhao 

## Design Details

### Database Design(Yuwei Huang)

#### 数据库表设计实现
- <del> bill 订单信息表</del>
- <del> customer 住客信息表</del>
- <del> membertype 会员类型表</del>
- <del> roominfo 房间信息表</del>
- <del> roomtype 房间类型表</del>
- <del> userinfo 用户信息表</del>

#### <del>测试数据</del>

### View Design(Wei Wei, Dao Zhou)

2018.1.3~2018.1.5
>会员视角：
- <del>登录/login</del>
- 注册/register
- <del>主页/index</del>
- 浏览房型/roomList
- 搜索房型 /roomList
- 预定房型（默认支付）跳转/customerInfo 登记住客信息
- 查看订单 /bill
- 评价订单 /bill
- 个人信息管理（改）/profile

>管理员视角:
- 普通管理员/超级管理员：
- 管理员登录页面: /adminLogin
- 管理员主页: /adminIndex 导航栏选择功能
- 增删查改 会员信息: /adminUser
- 增删查改  房型: /adminRoom
- 增删查改 管理员: /adminAdmin (超级管理员)
- 增删查改 住客信息 /adminCustomer

### Models(Yuwei, Xinyu)

#### Entity(Yuwei)

- <del>订单bill</del>
- <del>会员user</del>
- <del>会员类型 membertype</del>
- <del>普通管理员admin</del>
- <del>房间room</del>
- <del>房型roomtype</del>
- <del>住客customer</del>

#### EntityTest(Xinyu) 在1.4完成

- 订单bill
- 会员user
- 会员类型 membertype
- 普通管理员admin
- 房间room
- 房型roomtype
- 住客customer

#### DAO(Yuwei) 在1.4号24:00前完成
- billDAO 8
- customerDAO 12
- membertypeDAO 3


#### DAO(Xinyu) 在1.5号24:00前完成

- roomDAO 6
- roomtypeDAO 5
- useDAO 9
- adminDAO


