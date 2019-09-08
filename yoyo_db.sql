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

 Date: 09/09/2019 02:15:04
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
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bills
-- ----------------------------
INSERT INTO `bills` VALUES (1, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":1,\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":25000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":1,\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":10000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":1,\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":15000}],\"1\":[{\"rowId\":\"027c91341fd5cf4d2579b49c4b6a90da\",\"id\":\"1\",\"name\":\"Tr\\u00e0 chanh truy\\u1ec1n th\\u1ed1ng\",\"qty\":1,\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":10000}]},\"totalMoney\":60000,\"total\":4,\"priceFinal\":48000,\"disCount\":12000}', 4, 60000, 48000, 20, '2019-09-08 18:49:34', '2019-09-08 18:49:34', NULL, NULL, NULL);
INSERT INTO `bills` VALUES (2, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":1,\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":25000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":1,\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":10000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":1,\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":15000}]},\"totalMoney\":50000,\"total\":3,\"priceFinal\":40000,\"disCount\":10000}', 3, 50000, 40000, 20, '2019-09-08 18:50:56', '2019-09-08 18:50:56', 'Cửa Hàng Tiện Ích', 12, 'abcd1234');
INSERT INTO `bills` VALUES (3, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":\"3\",\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":75000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":\"2\",\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":20000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":\"2\",\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":30000}]},\"totalMoney\":125000,\"total\":7,\"priceFinal\":125000,\"disCount\":0}', 7, 125000, 125000, 0, '2019-09-08 19:11:54', '2019-09-08 19:11:54', NULL, NULL, NULL);
INSERT INTO `bills` VALUES (4, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":\"3\",\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":75000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":\"2\",\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":20000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":\"2\",\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":30000}]},\"totalMoney\":125000,\"total\":7,\"priceFinal\":125000,\"disCount\":0}', 7, 125000, 125000, 0, '2019-09-08 19:12:44', '2019-09-08 19:12:44', NULL, NULL, NULL);
INSERT INTO `bills` VALUES (5, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":\"3\",\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":75000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":\"2\",\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":20000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":\"2\",\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":30000}]},\"totalMoney\":125000,\"total\":7,\"priceFinal\":125000,\"disCount\":0}', 7, 125000, 125000, 0, '2019-09-08 19:14:10', '2019-09-08 19:14:10', NULL, NULL, NULL);
INSERT INTO `bills` VALUES (6, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":\"3\",\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":75000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":\"2\",\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":20000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":\"2\",\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":30000}]},\"totalMoney\":125000,\"total\":7,\"priceFinal\":125000,\"disCount\":0}', 7, 125000, 125000, 0, '2019-09-08 19:14:23', '2019-09-08 19:14:23', NULL, NULL, NULL);
INSERT INTO `bills` VALUES (7, 1, 1, '{\"list\":{\"8\":[{\"rowId\":\"18d6934483b994fb9943b43b7d7646bf\",\"id\":\"8\",\"name\":\"N\\u01b0\\u1edbc cam\",\"qty\":\"3\",\"price\":25000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":5250,\"subtotal\":75000}],\"7\":[{\"rowId\":\"808821852042d8780b9f862c35c42c68\",\"id\":\"7\",\"name\":\"Tr\\u00e0 qu\\u1ea5t\",\"qty\":\"2\",\"price\":10000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":2100,\"subtotal\":20000}],\"2\":[{\"rowId\":\"370d08585360f5c568b18d1f2e4ca1df\",\"id\":\"2\",\"name\":\"Tr\\u00e0 \\u0111\\u00e0o nhi\\u1ec7t \\u0111\\u1edbi\",\"qty\":\"2\",\"price\":15000,\"weight\":0,\"options\":[],\"discount\":0,\"tax\":3150,\"subtotal\":30000}]},\"totalMoney\":125000,\"total\":7,\"priceFinal\":125000,\"disCount\":0}', 7, 125000, 125000, 0, '2019-09-08 19:14:33', '2019-09-08 19:14:33', NULL, NULL, NULL);

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
INSERT INTO `products` VALUES (1, NULL, NULL, 'Trà chanh truyền thống', NULL, 5000, 10000, 'trachanh.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (2, NULL, NULL, 'Trà đào nhiệt đới', NULL, 5000, 15000, 'tradao.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (3, NULL, NULL, 'Hướng dương', NULL, 3000, 10000, 'huongduong.jpg', 'túi', NULL, 7, 999, 1, 1);
INSERT INTO `products` VALUES (4, NULL, NULL, 'Trân châu trắng', NULL, 1000, 3000, 'tranchautrang.jpg', 'g', NULL, 3, 1000, 0, 0);
INSERT INTO `products` VALUES (5, NULL, NULL, 'Trân châu đen', NULL, 1000, 5000, 'tranchauden.jpg', 'g', NULL, 3, 1000, 0, 1);
INSERT INTO `products` VALUES (6, NULL, NULL, 'Nem chua rán', NULL, 3000, 5000, 'nemchuaran.jpg', 'cái', NULL, 5, 100, 1, 1);
INSERT INTO `products` VALUES (7, NULL, NULL, 'Trà quất', NULL, 5000, 10000, 'traquat.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (8, NULL, NULL, 'Nước cam', NULL, 10000, 25000, 'nuoccam.jpg', 'cốc', NULL, 1, NULL, 1, 1);
INSERT INTO `products` VALUES (9, NULL, NULL, 'Nha đam', NULL, 3000, 5000, 'nhadam.jpg', 'g', NULL, 3, 100, 0, 1);
INSERT INTO `products` VALUES (10, NULL, NULL, 'Trà gừng', NULL, 5000, 15000, 'tragung.jpg', 'ly', NULL, 2, NULL, NULL, 0);

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
