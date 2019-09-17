/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : yoyo_db

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 18/09/2019 01:51:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `to_kg` float NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1 COMMENT '1:hiển thị,0:ẩn',
  `percent` float NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES (1, 'Thùng', NULL, 1, NULL, NULL, NULL);
INSERT INTO `units` VALUES (2, 'Kg', NULL, 0, NULL, NULL, NULL);
INSERT INTO `units` VALUES (3, 'Túi (Kg)', NULL, 1, NULL, NULL, NULL);
INSERT INTO `units` VALUES (4, 'Chai (L)', NULL, 1, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
