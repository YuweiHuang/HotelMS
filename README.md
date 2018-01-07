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

If you fetch my data successfully, you will see our index page when you visit "localhost\hotelms" on your laptop.

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

- <del>订单bill</del>
- <del>会员user</del>
- <del>会员类型 membertype</del>
- <del>普通管理员admin</del>
- <del>房间room</del>
- <del>房型roomtype</del>
- <del>住客customer</del>

#### dbConnect(Yuwei)
- <del>build</del>
- <del>test</del>

#### DAO(Yuwei) 在1.5号24:00前完成
- <del>billDAO 8</del>
- <del>customerDAO 12</del>
- <del>membertypeDAO 3</del>

#### DAOTest(Yuwei) 在1.6号24:00前完成
- billDAO 8
- customerDAO 12
- membertypeDAO 3

#### DAO(Xinyu) 在1.5号24:00前完成

- <del>roomDAO 6</del>
- <del>roomtypeDAO 5</del>
- <del>useDAO 9</del>

#### Services

前三类业务1.7 24:00前完成

- 功能型业务
  - (会员)浏览房型:显示每个房型剩余多少个房间
  - (会员)预定房型:在预定时生成订单,并把对应的房型的一个房间设置入住时间,登记住客信息
  - (会员)取消预定:删除订单,对应删除住客信息,并更新增加房型对应房间数,将之前预定的房间入住时间设为当前时间前一天,days设为0
  - (管理员)入住登记确认:核对住客信息,或者更新住客信息
  - (会员)查看订单:列出所有订单
  - (会员)评价订单:对订单评分和写评语

- 用户型业务
  - (会员) 注册:填写account,password
  - (会员/管理员/超级管理员) 登录
  - (会员/管理员) 修改个人信息,管理员可以修改用户信息
  - (超级管理员) 操作会员/管理员信息(增删查改admin,user)

- 产品型业务
  - (管理员/超级管理员) 对房型操作
  - (管理员/超级管理员) 对房间信息操作
  - (管理员/超级管理员) 对会员类型操作(修改会员晋升策略等)

- 统计型业务(所有工作完成后再执行)
  - (会员) 最热房型，最新预定
  - (管理员/超级管理员) 会员类型统计，年龄统计，性别统计，积分统计