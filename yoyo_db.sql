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

 Date: 10/09/2019 21:45:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activities
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for activity_log
-- ----------------------------
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of activity_log
-- ----------------------------
INSERT INTO `activity_log` VALUES (1, 1, 'Table \"Bàn 1\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (2, 1, 'Table \"Bàn 2\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (3, 1, 'Table \"Bàn 3\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (4, 1, 'Table \"Bàn 4\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (5, 1, 'Table \"Bàn 5\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (6, 1, 'Table \"Bàn 6\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (7, 1, 'Table \"Bàn 7\" was created', '::1', '2019-09-06 16:20:15', '2019-09-06 16:20:15');
INSERT INTO `activity_log` VALUES (8, 1, 'Table \"Bàn 8\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (9, 1, 'Table \"Bàn 9\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (10, 1, 'Table \"Bàn 10\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (11, 1, 'Table \"Bàn 11\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (12, 1, 'Table \"Bàn 12\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (13, 1, 'Table \"Bàn 13\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (14, 1, 'Table \"Bàn 14\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (15, 1, 'Table \"Bàn 15\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (16, 1, 'Table \"Bàn 16\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (17, 1, 'Table \"Bàn 17\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (18, 1, 'Table \"Bàn 18\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (19, 1, 'Table \"Bàn 19\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (20, 1, 'Table \"Bàn 20\" was created', '::1', '2019-09-06 16:20:16', '2019-09-06 16:20:16');
INSERT INTO `activity_log` VALUES (21, 1, 'Bill \"\" was created', '::1', '2019-09-08 18:49:34', '2019-09-08 18:49:34');
INSERT INTO `activity_log` VALUES (22, 1, 'Bill \"\" was created', '::1', '2019-09-08 18:50:56', '2019-09-08 18:50:56');
INSERT INTO `activity_log` VALUES (23, 1, 'Bill \"\" was created', '::1', '2019-09-08 19:11:54', '2019-09-08 19:11:54');
INSERT INTO `activity_log` VALUES (24, 1, 'Bill \"\" was created', '::1', '2019-09-08 19:12:44', '2019-09-08 19:12:44');
INSERT INTO `activity_log` VALUES (25, 1, 'Bill \"\" was created', '::1', '2019-09-08 19:14:10', '2019-09-08 19:14:10');
INSERT INTO `activity_log` VALUES (26, 1, 'Bill \"\" was created', '::1', '2019-09-08 19:14:23', '2019-09-08 19:14:23');
INSERT INTO `activity_log` VALUES (27, 1, 'Bill \"\" was created', '::1', '2019-09-08 19:14:33', '2019-09-08 19:14:33');
INSERT INTO `activity_log` VALUES (28, 1, 'Bill \"\" was created', '::1', '2019-09-09 12:15:47', '2019-09-09 12:15:47');
INSERT INTO `activity_log` VALUES (29, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:00:31', '2019-09-09 14:00:31');
INSERT INTO `activity_log` VALUES (30, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:00:43', '2019-09-09 14:00:43');
INSERT INTO `activity_log` VALUES (31, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:01:32', '2019-09-09 14:01:32');
INSERT INTO `activity_log` VALUES (32, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:02:21', '2019-09-09 14:02:21');
INSERT INTO `activity_log` VALUES (33, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:04:39', '2019-09-09 14:04:39');
INSERT INTO `activity_log` VALUES (34, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:08:59', '2019-09-09 14:08:59');
INSERT INTO `activity_log` VALUES (35, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:09:03', '2019-09-09 14:09:03');
INSERT INTO `activity_log` VALUES (36, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:09:13', '2019-09-09 14:09:13');
INSERT INTO `activity_log` VALUES (37, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:14:26', '2019-09-09 14:14:26');
INSERT INTO `activity_log` VALUES (38, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:14:47', '2019-09-09 14:14:47');
INSERT INTO `activity_log` VALUES (39, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:15:09', '2019-09-09 14:15:09');
INSERT INTO `activity_log` VALUES (40, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:23:34', '2019-09-09 14:23:34');
INSERT INTO `activity_log` VALUES (41, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:25:32', '2019-09-09 14:25:32');
INSERT INTO `activity_log` VALUES (42, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:27:02', '2019-09-09 14:27:02');
INSERT INTO `activity_log` VALUES (43, 1, 'Bill \"\" was created', '::1', '2019-09-09 14:27:57', '2019-09-09 14:27:57');
INSERT INTO `activity_log` VALUES (44, 1, 'Product \"Trà chanh truyền thống\" was deleted', '::1', '2019-09-10 14:05:26', '2019-09-10 14:05:26');
INSERT INTO `activity_log` VALUES (45, 1, 'Product \"Trà đào nhiệt đới\" was deleted', '::1', '2019-09-10 14:14:15', '2019-09-10 14:14:15');
INSERT INTO `activity_log` VALUES (46, 1, 'Product \"Trà quất\" was deleted', '::1', '2019-09-10 14:14:24', '2019-09-10 14:14:24');
INSERT INTO `activity_log` VALUES (47, 1, 'Product \"Nước cam\" was deleted', '::1', '2019-09-10 14:14:27', '2019-09-10 14:14:27');
INSERT INTO `activity_log` VALUES (48, 1, 'Product \"Trà gừng\" was deleted', '::1', '2019-09-10 14:14:32', '2019-09-10 14:14:32');
INSERT INTO `activity_log` VALUES (49, 1, 'Product \"Trân châu trắng\" was deleted', '::1', '2019-09-10 14:14:42', '2019-09-10 14:14:42');
INSERT INTO `activity_log` VALUES (50, 1, 'Product \"Trà chanh truyền thống\" was created', '::1', '2019-09-10 14:21:13', '2019-09-10 14:21:13');
INSERT INTO `activity_log` VALUES (51, 1, 'Product \"Nha đam\" was deleted', '::1', '2019-09-10 14:21:21', '2019-09-10 14:21:21');
INSERT INTO `activity_log` VALUES (52, 1, 'Product \"Nem chua rán\" was deleted', '::1', '2019-09-10 14:21:24', '2019-09-10 14:21:24');
INSERT INTO `activity_log` VALUES (53, 1, 'Product \"Trân châu đen\" was deleted', '::1', '2019-09-10 14:21:27', '2019-09-10 14:21:27');
INSERT INTO `activity_log` VALUES (54, 1, 'Product \"Hướng dương\" was deleted', '::1', '2019-09-10 14:21:30', '2019-09-10 14:21:30');
INSERT INTO `activity_log` VALUES (55, 1, 'Product \"Trà chanh truyền thống\" was deleted', '::1', '2019-09-10 14:22:22', '2019-09-10 14:22:22');
INSERT INTO `activity_log` VALUES (56, 1, 'Product \"Trà chanh truyền thống\" was created', '::1', '2019-09-10 14:23:06', '2019-09-10 14:23:06');
INSERT INTO `activity_log` VALUES (57, 1, 'Product \"Trà đào nhiệt đới\" was created', '::1', '2019-09-10 14:25:18', '2019-09-10 14:25:18');
INSERT INTO `activity_log` VALUES (58, 1, 'Product \"Trà quất nha đam\" was created', '::1', '2019-09-10 14:25:47', '2019-09-10 14:25:47');
INSERT INTO `activity_log` VALUES (59, 1, 'Product \"Trà chanh yoyo\" was created', '::1', '2019-09-10 14:28:29', '2019-09-10 14:28:29');
INSERT INTO `activity_log` VALUES (60, 1, 'Product \"Trà kim quất chanh leo\" was created', '::1', '2019-09-10 14:34:55', '2019-09-10 14:34:55');
INSERT INTO `activity_log` VALUES (61, 1, 'Product \"Trà thanh đào\" was created', '::1', '2019-09-10 14:35:42', '2019-09-10 14:35:42');
INSERT INTO `activity_log` VALUES (62, 1, 'Product \"Trà chanh dâu\" was created', '::1', '2019-09-10 14:37:08', '2019-09-10 14:37:08');
INSERT INTO `activity_log` VALUES (63, 1, 'Product \"Trà chanh Nam Dương\" was created', '::1', '2019-09-10 14:38:25', '2019-09-10 14:38:25');
INSERT INTO `activity_log` VALUES (64, 1, 'Product \"Lê tuyết sốt xoài\" was created', '::1', '2019-09-10 14:41:18', '2019-09-10 14:41:18');
INSERT INTO `activity_log` VALUES (65, 1, 'Product \"Trà táo đỏ long nhãn\" was created', '::1', '2019-09-10 14:42:33', '2019-09-10 14:42:33');

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin', 'admin@gmail.com', NULL, '$2y$10$653HCpq2Ozqe7SeBFAz9XuC62ZJ1Lp4e8RJl7VM5Tqlr2kkspQ9VW', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for bills
-- ----------------------------
DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1 COMMENT '0: chưa thanh toán,1:đã thanh toán,2:hủy',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `total` int(11) NULL DEFAULT NULL,
  `total_money` int(11) NULL DEFAULT NULL,
  `price_final` int(11) NULL DEFAULT NULL,
  `discount` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `table_number` int(11) NULL DEFAULT NULL,
  `note` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_15_085708_create_admins_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_15_085759_create_posts_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_08_15_085812_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_08_15_090037_create_provinces_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_08_15_090300_create_products_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_08_15_090405_create_product_types_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_08_15_090520_create_product_categories_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_08_17_144428_laratrust_setup_tables', 1);
INSERT INTO `migrations` VALUES (11, '2019_08_17_145154_laratrust_setup_teams', 1);
INSERT INTO `migrations` VALUES (12, '2019_08_18_131900_create_activity_log_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_08_24_114451_create_activities_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED NULL DEFAULT NULL,
  UNIQUE INDEX `permission_user_user_id_permission_id_user_type_team_id_unique`(`user_id`, `permission_id`, `user_type`, `team_id`) USING BTREE,
  INDEX `permission_user_permission_id_foreign`(`permission_id`) USING BTREE,
  INDEX `permission_user_team_id_foreign`(`team_id`) USING BTREE,
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for product_categories
-- ----------------------------
DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1 COMMENT '0:ẩn,1:hiện',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_categories
-- ----------------------------
INSERT INTO `product_categories` VALUES (1, NULL, NULL, 'đồ uống', NULL, 1);
INSERT INTO `product_categories` VALUES (2, NULL, NULL, 'toping', NULL, 1);
INSERT INTO `product_categories` VALUES (3, NULL, NULL, 'đồ ăn vặt', NULL, 1);

-- ----------------------------
-- Table structure for product_types
-- ----------------------------
DROP TABLE IF EXISTS `product_types`;
CREATE TABLE `product_types`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1 COMMENT '0:ẩn,1:hiện',
  `category_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_types
-- ----------------------------
INSERT INTO `product_types` VALUES (1, NULL, NULL, 'trà', NULL, 1, 1);
INSERT INTO `product_types` VALUES (2, NULL, NULL, 'soda', NULL, 1, 1);
INSERT INTO `product_types` VALUES (3, NULL, NULL, 'chân trâu', NULL, 1, 2);
INSERT INTO `product_types` VALUES (4, NULL, NULL, 'thạch', NULL, 0, 2);
INSERT INTO `product_types` VALUES (5, NULL, NULL, 'đồ chiên', NULL, 1, 3);
INSERT INTO `product_types` VALUES (6, NULL, NULL, 'nướng', NULL, 0, 3);
INSERT INTO `product_types` VALUES (7, NULL, NULL, 'đồ khô', NULL, 1, 3);
INSERT INTO `product_types` VALUES (8, NULL, NULL, 'hoa quả', NULL, 1, 3);
INSERT INTO `product_types` VALUES (9, NULL, NULL, 'thuốc lá', NULL, 1, 3);
INSERT INTO `product_types` VALUES (10, NULL, NULL, 'sữa chua', NULL, 1, 1);
INSERT INTO `product_types` VALUES (11, NULL, NULL, 'trà sữa', NULL, 1, 1);
INSERT INTO `product_types` VALUES (12, NULL, NULL, 'cà phê', NULL, 1, 1);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `current_price` decimal(10, 0) NULL DEFAULT NULL,
  `price` decimal(10, 0) NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_id` int(11) NULL DEFAULT NULL,
  `amount` int(11) NULL DEFAULT NULL,
  `type` int(11) NULL DEFAULT NULL COMMENT '1:bán trực tiếp,0:topping',
  `status` int(1) NULL DEFAULT 1 COMMENT '1:hiện,0:ẩn',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, '2019-09-10 14:23:06', '2019-09-10 14:23:06', 'Trà chanh truyền thống', 'tra-chanh-truyen-thong', NULL, 10000, '/photos/1/trachanh.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (2, '2019-09-10 14:25:18', '2019-09-10 14:25:18', 'Trà đào nhiệt đới', 'tra-dao-nhiet-doi', NULL, 10000, '/photos/1/tradao.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (3, '2019-09-10 14:25:46', '2019-09-10 14:25:46', 'Trà quất nha đam', 'tra-quat-nha-dam', NULL, 10000, '/photos/1/traquat.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (4, '2019-09-10 14:28:29', '2019-09-10 14:28:29', 'Trà chanh yoyo', 'tra-chanh-yoyo', NULL, 12000, '/photos/1/trachanh.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (5, '2019-09-10 14:34:55', '2019-09-10 14:34:55', 'Trà kim quất chanh leo', 'tra-kim-quat-chanh-leo', NULL, 15000, '/photos/1/kimquat.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (6, '2019-09-10 14:35:42', '2019-09-10 14:35:42', 'Trà thanh đào', 'tra-thanh-dao', NULL, 15000, '/photos/1/tradao.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (7, '2019-09-10 14:37:08', '2019-09-10 14:37:08', 'Trà chanh dâu', 'tra-chanh-dau', NULL, 15000, '/photos/1/tra-chanh-dau-tay.png', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (8, '2019-09-10 14:38:25', '2019-09-10 14:38:25', 'Trà chanh Nam Dương', 'tra-chanh-nam-duong', NULL, 19000, '/photos/1/trachanhnamduong.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (9, '2019-09-10 14:41:18', '2019-09-10 14:41:18', 'Lê tuyết sốt xoài', 'le-tuyet-sot-xoai', NULL, 19000, '/photos/1/letuyetxoai.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (10, '2019-09-10 14:42:33', '2019-09-10 14:42:33', 'Trà táo đỏ long nhãn', 'tra-tao-do-long-nhan', NULL, 19000, '/photos/1/taodolongnhan.jpg', 'cốc', NULL, 1, NULL, 1, 1);

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED NULL DEFAULT NULL,
  UNIQUE INDEX `role_user_user_id_role_id_user_type_team_id_unique`(`user_id`, `role_id`, `user_type`, `team_id`) USING BTREE,
  INDEX `role_user_role_id_foreign`(`role_id`) USING BTREE,
  INDEX `role_user_team_id_foreign`(`team_id`) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `author` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tables
-- ----------------------------
DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 0 COMMENT '0:trống,1:đang sử dụng,2:đang chờ đồ',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `is_active` int(11) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tables
-- ----------------------------
INSERT INTO `tables` VALUES (1, 'Bàn 1', NULL, 1, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (2, 'Bàn 2', NULL, 2, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (3, 'Bàn 3', NULL, NULL, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (4, 'Bàn 4', NULL, 1, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (5, 'Bàn 5', NULL, 1, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (6, 'Bàn 6', NULL, 2, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (7, 'Bàn 7', NULL, 1, '2019-09-06 16:20:15', '2019-09-06 16:20:15', 1);
INSERT INTO `tables` VALUES (8, 'Bàn 8', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (9, 'Bàn 9', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (10, 'Bàn 10', NULL, 1, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (11, 'Bàn 11', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (12, 'Bàn 12', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (13, 'Bàn 13', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (14, 'Bàn 14', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (15, 'Bàn 15', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (16, 'Bàn 16', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (17, 'Bàn 17', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (18, 'Bàn 18', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (19, 'Bàn 19', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);
INSERT INTO `tables` VALUES (20, 'Bàn 20', NULL, NULL, '2019-09-06 16:20:16', '2019-09-06 16:20:16', 1);

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `teams_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Thu ngân', 'thungan@yoyo.com', NULL, '$2y$10$653HCpq2Ozqe7SeBFAz9XuC62ZJ1Lp4e8RJl7VM5Tqlr2kkspQ9VW', NULL, NULL, NULL, 1);

SET FOREIGN_KEY_CHECKS = 1;
