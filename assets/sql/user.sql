/*
Navicat MySQL Data Transfer

Source Server         : raccoon_localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : raccoon

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-10-20 20:49:20
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `user` VALUES ('U00002', '刘靖文', '18678825257', 'e00cf25ad42683b3df678c61f42c6bda', 'leotech@126.com', '山东', '济南', '历城', '山东斯莱克有限公司', 'it', '山东省济南市花园路东首177号', 'web', null);
