/*
Navicat MySQL Data Transfer

Source Server         : raccoon_localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : raccoon

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-10-25 23:35:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` varchar(8) NOT NULL COMMENT '管理员编号',
  `email` varchar(64) DEFAULT NULL COMMENT '管理员邮箱',
  `passwd` varchar(128) DEFAULT NULL COMMENT '管理员密码',
  `last_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '管理员最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('A00001', 'leotech@126.com', '21232f297a57a5a743894a0e4a801fc3', '2015-10-20 20:46:16');

-- ----------------------------
-- Table structure for `designer`
-- ----------------------------
DROP TABLE IF EXISTS `designer`;
CREATE TABLE `designer` (
  `id` varchar(8) NOT NULL COMMENT '编号，U开头，00001起始，依次注册',
  `name` varchar(128) NOT NULL DEFAULT 'xxx' COMMENT '姓名',
  `tel` varchar(12) DEFAULT NULL COMMENT '联系电话',
  `passwd` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL COMMENT '邮箱',
  `province` varchar(64) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `comp` varchar(64) DEFAULT NULL COMMENT '公司',
  `college` varchar(64) DEFAULT NULL COMMENT '学校',
  `degree` varchar(3) DEFAULT NULL COMMENT '资料完整度',
  `isChecked` varchar(1) DEFAULT NULL COMMENT '是否通过；0未通过，1通过',
  `link1` varchar(128) DEFAULT NULL,
  `link2` varchar(128) DEFAULT NULL,
  `link3` varchar(128) DEFAULT NULL,
  `link4` varchar(128) DEFAULT NULL,
  `link5` varchar(128) DEFAULT NULL,
  `workstate` varchar(128) DEFAULT NULL,
  `knoway` varchar(64) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `software` varchar(128) DEFAULT NULL,
  `goodat` varchar(128) DEFAULT NULL,
  `device` varchar(128) DEFAULT NULL,
  `last_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of designer
-- ----------------------------
INSERT INTO `designer` VALUES ('D00001', '刘景文', '18678825257', '21232f297a57a5a743894a0e4a801fc3', 'leotech@126.com', '1992', '2129', '2135', '山东鲁能公司', '山东科技大学', '100', '1', 'http://www.zcool.com.cn/', 'http://shijue.me/home', 'https://dribbble.com/', 'https://www.behance.net/', 'http://www.zbj.com/', '兼职(工作日空余时间+周末)', '搜索引擎', 'UI设计', 'ps，ai，vs', '图形，视觉，剪辑', 'PC', '2015-10-25 21:12:02');
INSERT INTO `designer` VALUES ('D00002', '王晓磊', '18788231321', '21232f297a57a5a743894a0e4a801fc3', 'wangxiaolei@126.com', null, '山东济南', null, '四方股份有限公司', '河南农业大学', '100', '0', null, null, null, null, null, null, null, null, null, null, null, '2015-10-18 13:23:35');

-- ----------------------------
-- Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '站内信编号',
  `to` varchar(8) DEFAULT NULL COMMENT '发送给',
  `title` varchar(128) DEFAULT NULL,
  `content` varchar(512) DEFAULT NULL COMMENT '站内信内容',
  `isRead` varchar(1) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('17', 'U00001', '系统消息', '欢迎加入设计+family', '1', '2015-10-17 20:40:23');
INSERT INTO `msg` VALUES ('18', 'D00001', '系统消息', '你好，欢迎加入设计家family', '1', '2015-10-17 20:40:58');
INSERT INTO `msg` VALUES ('19', 'U00001', '头条新闻', '也有部分别有用心的人通过虚假系统消息达到其特殊目的，需注意防范。', '1', '2015-10-17 20:42:35');
INSERT INTO `msg` VALUES ('20', 'U00002', '百度百科', '也有部分别有用心的人通过虚假系统消息达到其特殊目的，需注意防范。', '0', '2015-10-18 20:08:35');
INSERT INTO `msg` VALUES ('21', 'U00002', '管理者', '网站管理者以信息广播形式向目标用户发布的公开的消息、公告、通知、提示等。具有群发性，高可达性等消息特性', '1', '2015-10-17 20:43:24');
INSERT INTO `msg` VALUES ('22', 'D00001', '欢迎您', '也有部分别有用心的人通过虚假系统消息达到其特殊目的，需注意防范。', '1', '2015-10-17 20:43:55');

-- ----------------------------
-- Table structure for `page_about`
-- ----------------------------
DROP TABLE IF EXISTS `page_about`;
CREATE TABLE `page_about` (
  `proj_num` tinyint(4) NOT NULL DEFAULT '0' COMMENT '项目数量',
  `designer_num` tinyint(4) NOT NULL DEFAULT '0' COMMENT '入驻设计师',
  `day_num` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`proj_num`,`designer_num`,`day_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_about
-- ----------------------------
INSERT INTO `page_about` VALUES ('5', '46', '12');

-- ----------------------------
-- Table structure for `page_assess`
-- ----------------------------
DROP TABLE IF EXISTS `page_assess`;
CREATE TABLE `page_assess` (
  `id` varchar(4) NOT NULL,
  `content` varchar(256) DEFAULT NULL COMMENT '评价内容',
  `author` varchar(64) DEFAULT NULL COMMENT '评价作者'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_assess
-- ----------------------------
INSERT INTO `page_assess` VALUES ('1', '这个网站很不错的啊~~~~~~~~~~', '刘景文');
INSERT INTO `page_assess` VALUES ('2', '朋友介绍过来的，真的很好~~~~~~~~~~', '袁野');
INSERT INTO `page_assess` VALUES ('3', '在上面接任务，很简介~~~~~~~~~~~~', '刘毅');
INSERT INTO `page_assess` VALUES ('4', '谁知道呢，一下子就活了·~~~~~~~~~~~', '王大鹏');
INSERT INTO `page_assess` VALUES ('5', '服务确实出乎我意料的好~~~~~~~~~~~~~~', '刘自勇');

-- ----------------------------
-- Table structure for `page_case`
-- ----------------------------
DROP TABLE IF EXISTS `page_case`;
CREATE TABLE `page_case` (
  `type` varchar(4) NOT NULL COMMENT '案例类型；0，VIS；1，UI',
  `id` varchar(4) NOT NULL COMMENT 'VISid或UIid',
  `name` varchar(128) DEFAULT NULL COMMENT '案例名称',
  `img_url` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_case
-- ----------------------------
INSERT INTO `page_case` VALUES ('1', '2', '天使汇UI设计fe', 'assets\\uploads\\xiaoming.jpg');
INSERT INTO `page_case` VALUES ('1', '3', '阿里巴巴设计', 'assets\\uploads\\3.gif');
INSERT INTO `page_case` VALUES ('1', '4', '京东设计', 'assets\\uploads\\xiaoming.jpg');
INSERT INTO `page_case` VALUES ('1', '5', '国美设计', 'assets\\uploads\\dongfang.jpg');
INSERT INTO `page_case` VALUES ('1', '6', '百度设计', 'assets\\uploads\\maomi.jpg');
INSERT INTO `page_case` VALUES ('1', '1', 'UI中国ren设计', 'assets\\uploads\\01.jpg');
INSERT INTO `page_case` VALUES ('2', '1', 'VIS山东jn设计', 'assets\\uploads\\xiguapinpai.jpg');
INSERT INTO `page_case` VALUES ('2', '2', 'VIS河北设计', 'assets\\uploads\\beidaqinghua.jpg');
INSERT INTO `page_case` VALUES ('2', '3', 'VIS北京设计', 'assets\\uploads\\girl.jpg');
INSERT INTO `page_case` VALUES ('2', '4', 'VIS上海设计', 'assets\\uploads\\daxiang.jpg');
INSERT INTO `page_case` VALUES ('2', '5', 'VIS广东设计', 'assets\\uploads\\fuqin.jpg');
INSERT INTO `page_case` VALUES ('2', '6', 'VIS广西设计', 'assets\\uploads\\ejiae.jpg');

-- ----------------------------
-- Table structure for `page_team`
-- ----------------------------
DROP TABLE IF EXISTS `page_team`;
CREATE TABLE `page_team` (
  `id` tinyint(4) NOT NULL,
  `url` varchar(128) DEFAULT NULL COMMENT '网页链接',
  `img_url` varchar(128) DEFAULT NULL COMMENT '图片链接地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_team
-- ----------------------------
INSERT INTO `page_team` VALUES ('1', 'www.qq.com', 'assets\\uploads\\team\\biaoqing.jpg');
INSERT INTO `page_team` VALUES ('2', 'www.baidu.com', 'assets\\uploads\\team\\jiefu.jpg');
INSERT INTO `page_team` VALUES ('3', 'www.hao123.com', 'assets\\uploads\\team\\qigai.jpg');
INSERT INTO `page_team` VALUES ('4', 'www.aliyun.com', 'assets\\uploads\\team\\meinv.jpg');
INSERT INTO `page_team` VALUES ('5', 'www.o2o.com', 'assets\\uploads\\team\\gay.jpg');
INSERT INTO `page_team` VALUES ('6', 'www.bomb.com', 'assets\\uploads\\team\\quqian.jpg');
INSERT INTO `page_team` VALUES ('7', 'www.aiqiyi.com', 'assets\\uploads\\team\\weizhang.jpg');
INSERT INTO `page_team` VALUES ('8', 'www.xiaosini.com', 'assets\\uploads\\team\\houwo.jpg');

-- ----------------------------
-- Table structure for `proj`
-- ----------------------------
DROP TABLE IF EXISTS `proj`;
CREATE TABLE `proj` (
  `id` varchar(8) NOT NULL,
  `type` varchar(4) DEFAULT NULL COMMENT '项目leixing',
  `prodName` varchar(128) DEFAULT NULL,
  `prodForm` varchar(128) DEFAULT NULL,
  `prodType` varchar(128) DEFAULT NULL,
  `prodRefer` varchar(128) DEFAULT NULL,
  `prodStyle` varchar(128) DEFAULT NULL,
  `level` varchar(16) DEFAULT NULL COMMENT '需要的星级',
  `contComp` varchar(128) DEFAULT NULL COMMENT '产品类型',
  `contCity` varchar(128) DEFAULT NULL,
  `contPerson` varchar(128) DEFAULT NULL,
  `contPhone` varchar(12) DEFAULT NULL,
  `contEmail` varchar(128) DEFAULT NULL,
  `pageNum` varchar(128) DEFAULT NULL,
  `logoIndex` varchar(128) DEFAULT NULL,
  `logoDesc` varchar(128) DEFAULT NULL,
  `colIndex` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proj
-- ----------------------------
INSERT INTO `proj` VALUES ('P00001', 'LOGO', '产品名称1', 'app', 'education', 'refer', '风格描述11111', 'four-star', '百度科技公司', '北京宣武', '刘景文', '18678825257', 'leotech@126.com', null, '8', 'logo描述111', '1,2');
INSERT INTO `proj` VALUES ('P00002', 'UI', 'ui产品', 'app', 'finance', 'aliyun.com', '简洁', 'three-star', '上海昂科拉公司', '上海静安', '刘毅', '18678825255', 'ask@126.com', '14', null, null, null);

-- ----------------------------
-- Table structure for `proj_apply`
-- ----------------------------
DROP TABLE IF EXISTS `proj_apply`;
CREATE TABLE `proj_apply` (
  `proj_id` varchar(6) NOT NULL,
  `designer_id` varchar(6) NOT NULL,
  PRIMARY KEY (`proj_id`,`designer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proj_apply
-- ----------------------------
INSERT INTO `proj_apply` VALUES ('P00001', 'D00001');
INSERT INTO `proj_apply` VALUES ('P00001', 'D00002');
INSERT INTO `proj_apply` VALUES ('P00002', 'D00001');

-- ----------------------------
-- Table structure for `proj_publish`
-- ----------------------------
DROP TABLE IF EXISTS `proj_publish`;
CREATE TABLE `proj_publish` (
  `id` varchar(6) NOT NULL,
  `type` varchar(6) NOT NULL,
  `startime` varchar(64) DEFAULT NULL,
  `estime` varchar(64) DEFAULT NULL,
  `level` varchar(16) DEFAULT NULL,
  `prod_type` varchar(128) DEFAULT NULL,
  `prod_refer` varchar(128) DEFAULT NULL,
  `file_format` varchar(128) DEFAULT NULL,
  `proj_wage` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proj_publish
-- ----------------------------
INSERT INTO `proj_publish` VALUES ('P00001', 'LOGO', '2015-10-02 11:30', '两个月', '三星', '医药行业', '百度', 'ext,ps', '2000');
INSERT INTO `proj_publish` VALUES ('P00002', 'UI', '2015-10-05 08:00', '一个半月', '二星', '园林设计', '光合园林', 'ai,ps,ef', '5000');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(8) NOT NULL COMMENT '编号，U开头，00001起始，依次注册',
  `name` varchar(128) NOT NULL DEFAULT 'xxx' COMMENT '姓名',
  `tel` varchar(12) DEFAULT NULL COMMENT '联系电话',
  `passwd` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL COMMENT '邮箱',
  `province` varchar(64) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL COMMENT '所在城市',
  `county` varchar(64) DEFAULT NULL,
  `comp` varchar(64) DEFAULT NULL COMMENT '公司',
  `industry` varchar(64) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `knoway` varchar(64) DEFAULT NULL,
  `last_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('U00001', '李天宇', '15010408455', null, 'beckham_93320@yeah.net', null, '北京', null, '北京野比浣熊科技有限公司', null, null, null, '2015-10-20 15:30:00');
INSERT INTO `user` VALUES ('U00002', '刘靖文', '18678825256', '21232f297a57a5a743894a0e4a801fc3', 'leotech@126.com', '1992', '1993', '1995', '山东斯莱克有限公司', '互联网', '山东省济南市花园路东首177号', '媒体报道', '2015-10-25 20:20:49');
