/*
Navicat MySQL Data Transfer

Source Server         : raccoon_localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : raccoon

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-10-14 22:42:10
*/

SET FOREIGN_KEY_CHECKS=0;

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
  `city` varchar(64) DEFAULT NULL,
  `comp` varchar(64) DEFAULT NULL COMMENT '公司',
  `college` varchar(64) DEFAULT NULL COMMENT '学校',
  `degree` varchar(3) DEFAULT NULL COMMENT '资料完整度',
  `isChecked` varchar(1) DEFAULT NULL COMMENT '是否通过；0未通过，1通过',
  `last_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of designer
-- ----------------------------
INSERT INTO `designer` VALUES ('U00001', '刘景文', '18678825257', '21232f297a57a5a743894a0e4a801fc3', 'leotech@126.com', '刘景文', '山东鲁能公司', '山东科技大学', '100', '0', '2015-10-12 21:18:04');
