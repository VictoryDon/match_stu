/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-01-06 22:07:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `stu_info`
-- ----------------------------
DROP TABLE IF EXISTS `stu_info`;
CREATE TABLE `stu_info` (
  `id` smallint(10) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(10) DEFAULT NULL COMMENT '学生ID',
  `stu_name` varchar(10) DEFAULT NULL COMMENT '学生姓名',
  `stu_grade` varchar(10) DEFAULT NULL COMMENT '学生班级',
  `stu_img` varchar(255) DEFAULT NULL COMMENT '学生照片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stu_info
-- ----------------------------
INSERT INTO `stu_info` VALUES ('1', '1651220', 'stu1', '2', 'stu_img/1651220.png');
INSERT INTO `stu_info` VALUES ('2', '1651221', 'stu2', '2', 'stu_img/1651221.png');
INSERT INTO `stu_info` VALUES ('3', '1651222', 'stu3', '2', 'stu_img/1651222.png');
INSERT INTO `stu_info` VALUES ('4', '1651223', 'stu4', '2', 'stu_img/1651223.png');
INSERT INTO `stu_info` VALUES ('5', '1651224', 'stu5', '2', 'stu_img/1651224.png');
INSERT INTO `stu_info` VALUES ('6', '1651225', 'stu6', '2', 'stu_img/1651225.png');
INSERT INTO `stu_info` VALUES ('7', '1651226', 'stu7', '2', 'stu_img/1651226.png');
INSERT INTO `stu_info` VALUES ('8', '1651227', 'stu7', '2', 'stu_img/1651227.png');
INSERT INTO `stu_info` VALUES ('9', '1651228', 'stu8', '2', 'stu_img/1651228.png');
INSERT INTO `stu_info` VALUES ('10', '1651229', 'stu10', '2', 'stu_img/1651229.png');
