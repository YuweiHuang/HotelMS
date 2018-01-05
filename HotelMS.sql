/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2018/1/3 9:58:50                             */
/*==============================================================*/

use hotelms;

/*==============================================================*/
/* Table: bill                                                  */
/*==============================================================*/
create table bill
(
   bill_id              int(10) not null auto_increment,/*订单id*/
   user_id              int(10) not null,/*预订人id*/
   totalroom            int not null comment 'total book rooms',/*总的房间数量*/
   money                float not null comment 'cost of this bill',/*总花费*/
   book_time            varchar(14) not null comment '20180101010101',/*预订时间*/
   point                int not null,/*积分*/
   evaluate_score       int null,/*评分*/
   evaluate_words       longtext null,/*评语*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (bill_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: customer                                              */
/*==============================================================*/
create table customer
(
   customer_id          int(10) not null auto_increment,/*住客id*/
   bill_id              int(10) not null,/*订单id*/
   room_id              int(10) not null,/*入住房间id*/
   name                 varchar(30) not null,/*姓名*/
   age                  smallint(3) not null,/*年龄*/
   gender               smallint(1) not null comment '0:female,1:male',/*性别*/
   indentity_type       smallint(1) not null comment '0:二代身份证,1:护照',/*登记证件类型*/
   indentity            varchar(20) not null,/*证件号码*/
   in_time              varchar(14) not null comment '20180101010101',/*入住时间*/
   days                 int not null,/*入住天数*/
   check_time           varchar(14) null comment '20180101010101',/*结算时间*/
   user_id              int(10) not null comment '预订人',/*预订人id*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (customer_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: membertype                                            */
/*==============================================================*/
create table membertype
(
   member_type_id       int(10) not null auto_increment,/*会员类型id*/
   member_type          varchar(10) not null comment '青铜,白银,黄金,白金,钻石',/*会员类型*/
   discount             smallint(1) not null comment '9,8,7,6,5',/*折扣*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (member_type_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: roominfo                                              */
/*==============================================================*/
create table roominfo
(
   room_id              int(10) not null auto_increment,/*房间id*/
   room_type_id         int(10) not null,/*房间类型id*/
   location             varchar(10) null,/*位置*/
   room_tel             varchar(11) null,/*房间电话*/
   in_time              varchar(14) not null,/*入住时间*/
   days                 int(2) not null,/*入住天数*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (room_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: roomtype                                              */
/*==============================================================*/
create table roomtype
(
   room_type_id         int(10) not null auto_increment,/*房间类型id*/
   room_type            varchar(10) not null,/*房间类型名称*/
   bedwidth             float  not null,/*床长度*/
   roomarea             int(10)  not null,/*房间面积*/
   wifi                 smallint(1) default 1,/*是否有wifi,1:有;0:无*/
   bathroom             smallint(1) default 1,/*是否有独立卫浴,1:有;0:无*/
   addbed               smallint(1) default 0,/*是否可加床,1:有;0:无*/
   occupantnum          int(10)  not null,/*可入住人数*/
   price                float not null,/*价格*/
   deposit              float not null,/*押金*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (room_type_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: userinfo                                              */
/*==============================================================*/
create table userinfo
(
   user_id              int(10) not null auto_increment,/*用户id*/
   authority            smallint(1) not null comment '0:normal user,1:admin,2:super admin',/*权限*/
   register_time        varchar(14) not null,/*注册时间*/
   username             varchar(30) null,/*用户名*/
   account              varchar(30) not null,/*联系方式包括电话和邮箱，作为注册账号*/
   password             varchar(40) not null,/*密码*/
   truename             varchar(30) null,/*真实姓名*/
   point                int not null,/*评分*/
   member_type_id       int(10) not null,/*会员类型id*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (user_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* set foreign keys                                              */
/*==============================================================*/

alter table bill add constraint FK_BILL_REFERENCE_USERINFO foreign key (user_id)
      references userinfo (user_id) on delete restrict on update restrict;

alter table customer add constraint FK_CUSTOMER_REFERENCE_BILL foreign key (bill_id)
      references bill (bill_id) on delete restrict on update restrict;

alter table customer add constraint FK_CUSTOMER_REFERENCE_ROOMINFO foreign key (room_id)
      references roominfo (room_id) on delete restrict on update restrict;

alter table roominfo add constraint FK_ROOMINFO_REFERENCE_ROOMTYPE foreign key (room_type_id)
      references roomtype (room_type_id) on delete restrict on update restrict;

alter table userinfo add constraint FK_USERINFO_REFERENCE_MEMBERTY foreign key (member_type_id)
      references membertype (member_type_id) on delete restrict on update restrict;

/*==============================================================*/
/* insert test data                                              */
/*==============================================================*/

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华大床房',1.8, 28, 1, 1, 0, 2, 233, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('精选大床房',1.8, 30, 1, 1, 0, 2, 300, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华双床房',1.2, 33, 1, 1, 0, 2, 433, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('商务双床房',1.2, 40, 1, 1, 0, 2, 500, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华套房',1.8, 48, 1, 1, 1, 2, 600, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('总统套房',1.8, 60, 1, 1, 1, 2, 666, 100, 0);



insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (1, '一层', '1332321440', '20171220202035', 2, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (1, '三层', '2142447777', '20181220202035', 3, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (2, '一层', '1332321440', '20171210202035', 1, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (2, '三层', '2142447677', '20181223202035', 5, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (3, '一层', '1332321440', '20171220202035', 2, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (3, '三层', '2142447777', '20181220202035', 3, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (4, '一层', '1332321440', '20171210202035', 1, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (4, '二层', '2142447677', '20181223202035', 5, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (5, '二层', '1332321440', '20171210202035', 1, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (5, '三层', '2142447677', '20181223202035', 5, 0);

insert into roominfo (room_type_id, location, room_tel, in_time, days, delmark) values (6, '三层', '2142447233', '20181223202035', 6, 0);



insert into membertype (member_type, discount, delmark) values ('青铜', 9, 0);

insert into membertype (member_type, discount, delmark) values ('白银', 8, 0);

insert into membertype (member_type, discount, delmark) values ('黄金', 7, 0);

insert into membertype (member_type, discount, delmark) values ('白金', 6, 0);

insert into membertype (member_type, discount, delmark) values ('钻石', 5, 0);



insert into userinfo (authority, register_time, account, password, point, member_type_id, delmark) values (0, '20151223202035', 'zs@qq.com', '123', 20, 1, 0);

insert into userinfo (authority, register_time, account, password, point, member_type_id, delmark) values (1, '20141223202035', '12345', 'hyw', 10, 2, 0);

insert into userinfo (authority, register_time, account, password, point, member_type_id, delmark) values (2, '20131223202035', '123@163.com', 'ww', 50, 3, 0);



insert into bill (user_id, totalroom, money, book_time, point, evaluate_score, evaluate_words, delmark) values (1, 3, 100, '20181220202035', 17, 6, '黄焖猪蹄饭好吃', 0);

insert into bill (user_id, totalroom, money, book_time, point, evaluate_score, evaluate_words, delmark) values (1, 2, 200, '20181210202035', 20, 7, '黄焖鸡米饭好吃', 0);

insert into bill (user_id, totalroom, money, book_time, point, evaluate_score, evaluate_words, delmark) values (1, 1, 150, '20131223202035', 18, 4, '黄焖排骨饭好吃', 0);


insert into customer (bill_id, room_id, name, age, gender, indentity_type, indentity, in_time, days, check_time, user_id, delmark) values (1, 1, '张同学', 18, 0, 0, '33523564', '20181220202035', 2, '2018122202035', 1, 0);

insert into customer (bill_id, room_id, name, age, gender, indentity_type, indentity, in_time, days, check_time, user_id, delmark) values (1, 2, '李凯文', 20, 0, 0, '234353535', '20181120112035', 2, '20181222202035', 1, 0);

insert into customer (bill_id, room_id, name, age, gender, indentity_type, indentity, in_time, days, check_time, user_id, delmark) values (2, 3, '黄小文', 30, 1, 0, '789798798', '20181210202035', 4, '20181214202035', 2, 0);

insert into customer (bill_id, room_id, name, age, gender, indentity_type, indentity, in_time, days, check_time, user_id, delmark) values (1, 2, '赵大文', 40, 1, 0, '698896986', '20181220202035', 2, '20181222202035', 2, 0);

insert into customer (bill_id, room_id, name, age, gender, indentity_type, indentity, in_time, days, check_time, user_id, delmark) values (2, 3, '周文', 47, 0, 1, 'LEL6O28RDN', '20181220202035', 3, '20181223202035', 2, 0);
