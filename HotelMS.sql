/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2018/1/3 9:58:50                             */
/*==============================================================*/
drop database if exists hotelms;

create database hotelms;

use hotelms;

/*==============================================================*/
/* Table: bill                                                  */
/*==============================================================*/
create table bill
(
   bill_id              int(10) not null auto_increment,/*订单id*/
   user_id              int(10) not null,/*预订人id*/
   total_cost           float not null comment 'cost of this bill',/*总花费*/
   book_time            datetime not null comment '2018-01-01 01:01:01',/*预订时间*/
   total_point          int not null,/*积分*/
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
   user_id              int(10) not null comment '预订人',/*预订人id*/
   customer_name        varchar(30) not null,/*姓名*/
   age                  smallint(3) not null,/*年龄*/
   gender               smallint(1) not null comment '0:female,1:male',/*性别*/
   country              varchar(40) not null,/*国家/地区*/
   city                 varchar(40) not null,/*城市*/
   phone                varchar(15) not null,/*手机号*/
   indentity_type       smallint(1) not null comment '0:二代身份证,1:护照',/*登记证件类型*/
   indentity            varchar(20) not null,/*证件号码*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (customer_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: live                                              */
/*==============================================================*/
create table live
(
   live_id              int(10) not null auto_increment,/*入住登记id*/
   bill_id              int(10) not null,/*订单id*/
   room_id              int(10) not null,/*入住房间id*/
   customer_id          int(10) not null,/*住客id*/
   user_id              int(10) not null comment '预订人',/*预订人id*/
   in_time              datetime not null comment '2018-01-01 01:01:01',/*入住时间*/
   check_time           datetime null comment '2018-01-01 01:01:01',/*结算时间*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (live_id)
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
   room_name            varchar(5) not null,/*房间号、房间名*/
   room_type_id         int(10) not null,/*房间类型id*/
   location             varchar(10) null,/*位置*/
   room_tel             varchar(11) null,/*房间电话*/
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
/* Table: bookrecord                                            */
/*==============================================================*/
create table bookrecord
(
   book_record_id       int(10) not null auto_increment,/*预定id*/
   room_id              int(10) not null,/*房间id*/
   bill_id              int(10) not null,/*订单id*/
   in_time              datetime not null,/*入住时间2018-01-01 01:01:01*/
   out_time             datetime not null,/*离店时间2018-01-01 01:01:01*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (book_record_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* Table: userinfo                                              */
/*==============================================================*/
create table userinfo
(
   user_id              int(10) not null auto_increment,/*用户id*/
   authority            smallint(1) not null comment '0:normal user,1:admin,2:super admin',/*权限*/
   register_time        datetime not null,/*注册时间2018-01-01 01:01:01*/
   username             varchar(30) null,/*用户名*/
   user_account         varchar(30) not null,/*联系方式包括电话和邮箱，作为注册账号*/
   user_password        varchar(40) not null,/*密码*/
   truename             varchar(30) null,/*真实姓名*/
   total_point          int not null,/*评分*/
   member_type_id       int(10) not null,/*会员类型id*/
   delmark              smallint(1) default 0 comment '0:keep,1:delete',/*是否删除*/
   primary key (user_id)
)engine=InnoDB default charset = utf8;

/*==============================================================*/
/* set foreign keys                                              */
/*==============================================================*/

-- alter table bill add constraint FK_BILL_REFERENCE_USERINFO foreign key (user_id)
--       references userinfo (user_id) on delete restrict on update restrict;

-- alter table customer add constraint FK_CUSTOMER_REFERENCE_USERINFO foreign key (user_id)
--       references userinfo (user_id) on delete restrict on update restrict;

-- alter table live add constraint FK_LIVE_REFERENCE_BILL foreign key (bill_id)
--       references bill (bill_id) on delete restrict on update restrict;

-- alter table live add constraint FK_LIVE_REFERENCE_ROOMINFO foreign key (room_id)
--       references roominfo (room_id) on delete restrict on update restrict;

-- alter table live add constraint FK_LIVE_REFERENCE_CUSTOMER foreign key (customer_id)
--       references customer (customer_id) on delete restrict on update restrict;

-- alter table live add constraint FK_LIVE_REFERENCE_USERINFO foreign key (user_id)
--       references userinfo (user_id) on delete restrict on update restrict;

-- alter table roominfo add constraint FK_ROOMINFO_REFERENCE_ROOMTYPE foreign key (room_type_id)
--       references roomtype (room_type_id) on delete restrict on update restrict;

-- alter table userinfo add constraint FK_USERINFO_REFERENCE_MEMBERTY foreign key (member_type_id)
--       references membertype (member_type_id) on delete restrict on update restrict;

/*==============================================================*/
/* insert test data                                              */
/*==============================================================*/

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华大床房',1.8, 28, 1, 1, 0, 2, 233, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('精选大床房',1.8, 30, 1, 1, 0, 2, 300, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华双床房',1.2, 33, 1, 1, 0, 2, 433, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('商务双床房',1.2, 40, 1, 1, 0, 2, 500, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('豪华套房',1.8, 48, 1, 1, 1, 2, 600, 100, 0);

insert into roomtype (room_type, bedwidth, roomarea, wifi, bathroom, addbed, occupantnum, price, deposit, delmark) values ('总统套房',1.8, 60, 1, 1, 1, 2, 666, 100, 0);



insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1101', 1, '一层', '1332321440', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('3101', 1, '三层', '2142447777', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1105', 2, '一层', '1332321440', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('3102', 2, '三层', '2142447677', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1104', 3, '一层', '1332321440', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('3103', 3, '三层', '2142447777', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1103', 4, '一层', '1332321440', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1102', 4, '二层', '2142447677', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('1101', 5, '二层', '1332321440', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('3104', 5, '三层', '2142447677', 0);

insert into roominfo (room_name, room_type_id, location, room_tel, delmark) values ('3105', 6, '三层', '2142447233', 0);



insert into membertype (member_type, discount, delmark) values ('青铜', 9, 0);

insert into membertype (member_type, discount, delmark) values ('白银', 8, 0);

insert into membertype (member_type, discount, delmark) values ('黄金', 7, 0);

insert into membertype (member_type, discount, delmark) values ('白金', 6, 0);

insert into membertype (member_type, discount, delmark) values ('钻石', 5, 0);



insert into userinfo (authority, register_time, user_account, user_password, truename, total_point, member_type_id, delmark) values (0, '2015-01-12 01:01:01', 'zs@qq.com', '123', '张飞', 20, 1, 0);

insert into userinfo (authority, register_time, user_account, user_password, truename, total_point, member_type_id, delmark) values (1, '2014-01-12 01:01:01', '12345', 'hyw', '关羽', 10, 2, 0);

insert into userinfo (authority, register_time, user_account, user_password, truename, total_point, member_type_id, delmark) values (2, '2013-01-12 01:01:01', '123@163.com', 'ww', '刘备', 50, 3, 0);



insert into bill (user_id, total_cost, book_time, total_point, evaluate_score, evaluate_words, delmark) values (1, 100, '2017-01-12 01:01:01', 17, 6, '黄焖猪蹄饭好吃', 0);

insert into bill (user_id, total_cost, book_time, total_point, evaluate_score, evaluate_words, delmark) values (1, 200, '2017-11-12 01:01:01', 20, 7, '黄焖鸡米饭好吃', 0);

insert into bill (user_id, total_cost, book_time, total_point, evaluate_score, evaluate_words, delmark) values (1, 150, '2013-01-12 01:01:01', 18, 4, '黄焖排骨饭好吃', 0);



insert into customer (user_id, customer_name, age, gender, country, city, phone, indentity_type, indentity, delmark) values (1, '张同学', 18, 0, '中国', '北京', '+86-11111111111', 0, '33523564', 0);

insert into customer (user_id, customer_name, age, gender, country, city, phone, indentity_type, indentity, delmark) values (2, '李凯文', 20, 0, '中国', '北京', '+86-11111111111', 0, '234353535', 0);

insert into customer (user_id, customer_name, age, gender, country, city, phone, indentity_type, indentity, delmark) values (3, '黄小文', 30, 1, '中国', '北京', '+86-11111111111', 0, '789798798', 0);

insert into customer (user_id, customer_name, age, gender, country, city, phone, indentity_type, indentity, delmark) values (2, '赵大文', 40, 1, '中国', '北京', '+86-11111111111', 0, '698896986', 0);

insert into customer (user_id, customer_name, age, gender, country, city, phone, indentity_type, indentity, delmark) values (3, '周文', 47, 0, '美国', '纽约', '+86-11111111111', 1, 'LEL6O28RDN', 0);



insert into live (bill_id, room_id, customer_id, user_id, in_time, check_time, delmark) values (1, 2, 1, 1, '2017-01-12 01:01:01', '2017-01-14 01:01:01', 0);

insert into live (bill_id, room_id, customer_id, user_id, in_time, check_time, delmark) values (2, 2, 1, 1, '2017-03-12 01:01:01', '2017-03-14 01:01:01', 0);

insert into live (bill_id, room_id, customer_id, user_id, in_time, check_time, delmark) values (3, 2, 2, 1, '2017-05-12 01:01:01', '2017-05-14 01:01:01', 0);

insert into live (bill_id, room_id, customer_id, user_id, in_time, check_time, delmark) values (2, 2, 2, 1, '2017-09-12 01:01:01', '2017-09-14 01:01:01', 0);

insert into live (bill_id, room_id, customer_id, user_id, in_time, check_time, delmark) values (3, 2, 2, 2, '2017-02-12 01:01:01', '2017-02-14 01:01:01', 0);
