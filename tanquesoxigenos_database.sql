/*
 Navicat Premium Data Transfer

 Source Server         : MariaDB - Databases
 Source Server Type    : MariaDB
 Source Server Version : 100334
 Source Host           : localhost:3306
 Source Schema         : tanquesoxigenos_database

 Target Server Type    : MariaDB
 Target Server Version : 100334
 File Encoding         : 65001

 Date: 07/04/2022 11:42:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
BEGIN;
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES ('Duenio', 3, 1645114086);
COMMIT;

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  KEY `fk_auth_item_group_code` (`group_code`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `auth_item_ibfk_2` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
BEGIN;
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/*', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/create', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/delete', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/index', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/update', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/banner/view', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/*', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/create', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/delete', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/index', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/update', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/contacto/view', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/db-explain', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/download-mail', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/index', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/toolbar', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/default/view', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/user/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/user/reset-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/debug/user/set-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/*', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/actualizar-imagen-index', 3, NULL, NULL, NULL, 1646499572, 1646499572, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/actualizar-un-producto', 3, NULL, NULL, NULL, 1646499572, 1646499572, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/agregar-imagen', 3, NULL, NULL, NULL, 1646499572, 1646499572, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/create', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/delete', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/index', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/update', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/ver', 3, NULL, NULL, NULL, 1646499572, 1646499572, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto-imagen/view', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/*', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/create', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/delete', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/index', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/update', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/ver-producto', 3, NULL, NULL, NULL, 1646502398, 1646502398, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/producto/view', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/captcha', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/error', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/login', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/logout', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/nosotros', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/site/productos', 3, NULL, NULL, NULL, 1645112923, 1645112923, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/login', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/logout', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/auth/registration', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/permission/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/role/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/change-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('/user-management/user/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('Admin', 1, 'Admin', NULL, NULL, 1426062189, 1426062189, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1426062189, 1426062189, 'userCommonPermissions');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('changeUserPassword', 2, 'Change user password', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('commonPermission', 2, 'Common permission', NULL, NULL, 1426062188, 1426062188, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('createUsers', 2, 'Create users', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('deleteUsers', 2, 'Delete users', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('Duenio', 1, 'Duenio', NULL, NULL, 1645112790, 1645112790, NULL);
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('editUserEmail', 2, 'Edit user email', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('editUsers', 2, 'Edit users', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('PermisoUsuarioAdministrador', 2, 'Permisos Usuario Administrador', NULL, NULL, 1646499651, 1646499841, 'GrupoPermisosUsuarioAdministrador');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('TodosLosPermisos', 2, 'Todos Los Permisos', NULL, NULL, 1645112901, 1645112901, 'TodosLosPermisos');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('viewUserEmail', 2, 'View user email', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('viewUserRoles', 2, 'View user roles', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('viewUsers', 2, 'View users', NULL, NULL, 1426062189, 1426062189, 'userManagement');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES ('viewVisitLog', 2, 'View visit log', NULL, NULL, 1426062189, 1426062189, 'userManagement');
COMMIT;

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
BEGIN;
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'assignRolesToUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'changeOwnPassword');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'changeUserPassword');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'createUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'deleteUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'editUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Admin', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('assignRolesToUsers', '/user-management/user-permission/set');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('assignRolesToUsers', '/user-management/user-permission/set-roles');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('assignRolesToUsers', 'viewUserRoles');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('assignRolesToUsers', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('changeOwnPassword', '/user-management/auth/change-own-password');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('changeUserPassword', '/user-management/user/change-password');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('changeUserPassword', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('createUsers', '/user-management/user/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('createUsers', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('deleteUsers', '/user-management/user/bulk-delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('deleteUsers', '/user-management/user/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('deleteUsers', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('Duenio', 'PermisoUsuarioAdministrador');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('editUserEmail', 'viewUserEmail');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('editUsers', '/user-management/user/bulk-activate');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('editUsers', '/user-management/user/bulk-deactivate');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('editUsers', '/user-management/user/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('editUsers', 'viewUsers');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/banner/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/banner/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/banner/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/banner/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/banner/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto-imagen/actualizar-imagen-index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto-imagen/actualizar-un-producto');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto-imagen/agregar-imagen');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto-imagen/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto-imagen/ver');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('PermisoUsuarioAdministrador', '/producto/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('TodosLosPermisos', '/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewUsers', '/user-management/user/grid-page-size');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewUsers', '/user-management/user/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewUsers', '/user-management/user/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewVisitLog', '/user-management/user-visit-log/grid-page-size');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewVisitLog', '/user-management/user-visit-log/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('viewVisitLog', '/user-management/user-visit-log/view');
COMMIT;

-- ----------------------------
-- Table structure for auth_item_group
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_group`;
CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_group
-- ----------------------------
BEGIN;
INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES ('GrupoPermisosUsuarioAdministrador', 'Grupo de Permisos de Administrador', 1646499618, 1646499811);
INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES ('TodosLosPermisos', 'Todos Los Permisos', 1645112860, 1645112860);
INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES ('userCommonPermissions', 'User common permission', 1426062189, 1426062189);
INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES ('userManagement', 'User management', 1426062189, 1426062189);
COMMIT;

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `bann_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `bann_photo` varchar(150) NOT NULL COMMENT 'Foto',
  `bann_url` varchar(100) NOT NULL COMMENT 'Url',
  `bann_status` tinyint(4) NOT NULL COMMENT 'Estatus',
  PRIMARY KEY (`bann_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of banner
-- ----------------------------
BEGIN;
INSERT INTO `banner` (`bann_id`, `bann_photo`, `bann_url`, `bann_status`) VALUES (4, 'MMsVAPTpathThRuRnwEWd8-_V1QEf0qb.png', 'http://csig.test/producto/ver-producto?id=39', 1);
INSERT INTO `banner` (`bann_id`, `bann_photo`, `bann_url`, `bann_status`) VALUES (7, '_lTraQdvpciAcEilIwP9l_5A_SNJ-rmX.jpg', 'sad22', 0);
INSERT INTO `banner` (`bann_id`, `bann_photo`, `bann_url`, `bann_status`) VALUES (8, 'yCU0ZijziLfnwVgdsGGADCZOuKiSAOmc.jpg', 'sad', 0);
INSERT INTO `banner` (`bann_id`, `bann_photo`, `bann_url`, `bann_status`) VALUES (9, 'xo5sHju6tc0fLSAbdh-2tOsNN7E_suhw.jpg', '1111', 1);
INSERT INTO `banner` (`bann_id`, `bann_photo`, `bann_url`, `bann_status`) VALUES (10, '0z3vrbTJFCDuecvTDhSdfGRjyv3LjcrK.jpg', 'http://csig.test/producto/ver-producto?id=39', 1);
COMMIT;

-- ----------------------------
-- Table structure for contacto
-- ----------------------------
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `con_nombre` varchar(70) NOT NULL COMMENT 'Nombre',
  `con_correo` varchar(75) NOT NULL COMMENT 'Correo',
  `con_telefono` varchar(10) NOT NULL COMMENT 'Telefono',
  `con_asunto` varchar(50) NOT NULL COMMENT 'Asunto',
  `con_mensaje` text NOT NULL COMMENT 'Mensaje',
  `con_fecha` datetime NOT NULL COMMENT 'Fecha',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of contacto
-- ----------------------------
BEGIN;
INSERT INTO `contacto` (`con_id`, `con_nombre`, `con_correo`, `con_telefono`, `con_asunto`, `con_mensaje`, `con_fecha`) VALUES (22, 'Luis Horacio', 'horacio@gmail.com', '778452147', 'Propuesta', 'Quisiera hacer negocios con esta empresa', '2022-02-25 19:43:42');
INSERT INTO `contacto` (`con_id`, `con_nombre`, `con_correo`, `con_telefono`, `con_asunto`, `con_mensaje`, `con_fecha`) VALUES (23, 'Perez', 'perez@gmail.com', '1234', 'Propuesta', 'Tengo una plan de negocios', '2022-03-01 00:07:17');
INSERT INTO `contacto` (`con_id`, `con_nombre`, `con_correo`, `con_telefono`, `con_asunto`, `con_mensaje`, `con_fecha`) VALUES (24, 'Armando', 'armando@gmail.com', '8877589654', 'Explicacion', 'QUisiera una explicacion del tal producto', '2022-03-01 00:42:36');
COMMIT;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `pro_name` varchar(150) NOT NULL COMMENT 'Nombre',
  `pro_description` text NOT NULL COMMENT 'Descripción',
  `pro_status` tinyint(4) NOT NULL COMMENT 'Estatus',
  `pro_date` datetime NOT NULL COMMENT 'Fecha',
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of producto
-- ----------------------------
BEGIN;
INSERT INTO `producto` (`pro_id`, `pro_name`, `pro_description`, `pro_status`, `pro_date`) VALUES (39, '1', '1', 1, '2022-03-02 23:54:02');
INSERT INTO `producto` (`pro_id`, `pro_name`, `pro_description`, `pro_status`, `pro_date`) VALUES (40, '333', '33', 1, '2022-03-02 23:59:32');
COMMIT;

-- ----------------------------
-- Table structure for producto_imagen
-- ----------------------------
DROP TABLE IF EXISTS `producto_imagen`;
CREATE TABLE `producto_imagen` (
  `proimg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `proimg_url` varchar(255) NOT NULL COMMENT 'Url',
  `proimg_fkproducto` int(11) NOT NULL COMMENT 'Producto',
  PRIMARY KEY (`proimg_id`),
  KEY `proimg_fkproducto` (`proimg_fkproducto`),
  CONSTRAINT `producto_imagen_ibfk_1` FOREIGN KEY (`proimg_fkproducto`) REFERENCES `producto` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of producto_imagen
-- ----------------------------
BEGIN;
INSERT INTO `producto_imagen` (`proimg_id`, `proimg_url`, `proimg_fkproducto`) VALUES (216, 'W4qyl73H-WGT5Yz4o5Qm7qXi53P5-zeX.jpg', 39);
INSERT INTO `producto_imagen` (`proimg_id`, `proimg_url`, `proimg_fkproducto`) VALUES (219, 'ZnadGC84c9BkTS8BZNEf9tQBWlQ-gdPJ.png', 40);
INSERT INTO `producto_imagen` (`proimg_id`, `proimg_url`, `proimg_fkproducto`) VALUES (220, '1_GS_XZL1QeKYdy4PtBfLJp7P1DqOWFn.png', 40);
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(1) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES (1, 'superadmin', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$MhlYe12xkGFnSeK0sO2up.Y9kAD9Ct6JS1i9VLP7YAqd1dFsSylz2', NULL, 1, 1, 1426062188, 1426062188, NULL, NULL, NULL, 0);
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES (3, 'csig.empresa@gmail.com', 'Z4GskCgDsuLeTNxV4jVS6_6tA-_3A7Dq', '$2y$13$XPM/0iR/veWxWvx646gjI.bf1OW8GluqsoELQVoJBTQFtXnoea25W', NULL, 1, 0, 1645112741, 1645112741, '192.168.1.73', '', 'csig.empresa@gmail.com', 1);
COMMIT;

-- ----------------------------
-- Table structure for user_visit_log
-- ----------------------------
DROP TABLE IF EXISTS `user_visit_log`;
CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_visit_log
-- ----------------------------
BEGIN;
INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES (80, '62239d59e5e0f', '192.168.1.70', 'en', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 1, 1646501209, 'Chrome', 'Linux');
INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES (81, '62239d69bf14d', '192.168.1.70', 'es', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 3, 1646501225, 'Chrome', 'Linux');
INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES (82, '6223a2f6829c2', '192.168.1.70', 'es', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 3, 1646502646, 'Chrome', 'Linux');
INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES (83, '6223b38748a44', '192.168.1.70', 'es', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 3, 1646506887, 'Chrome', 'Linux');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
