/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : adidas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-12-17 22:14:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_price` float(14,0) DEFAULT NULL,
  `payment` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '317244', 'COD', 'dsadas', 'Nguyen Van Duc', '0335040895', 'My Dinh', '2');
INSERT INTO `orders` VALUES ('2', '317244', 'COD', 'hjghjg', 'Nguyen Van Duc', '0335040895', 'My Dinh', '2');
INSERT INTO `orders` VALUES ('3', '317244', 'COD', 'jhjjh', 'Nguyen Van Duc', '0335040895', 'My Dinh', '2');
INSERT INTO `orders` VALUES ('4', '317244', 'COD', 'dá', 'Nguyen Van Duc', '0335040895', 'My Dinh', '2');
INSERT INTO `orders` VALUES ('5', '317244', 'COD', 'dá', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('6', '317244', 'COD', 'sda', 'dá', 'ads', 'addas', '0');
INSERT INTO `orders` VALUES ('7', '317244', 'COD', 'sda', 'dá', 'ads', 'addas', '0');
INSERT INTO `orders` VALUES ('8', '317244', 'COD', 'a', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('9', '317244', 'COD', 'dsa', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('10', '317244', 'COD', 'sad', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('11', '317244', 'COD', 'dá', 'dá', 'ads', 'dá', '0');
INSERT INTO `orders` VALUES ('12', '317244', 'COD', 'asa', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('13', '317244', 'COD', 'sda', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('14', '317244', 'COD', 'dsa', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('15', '317244', 'COD', 'da', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('16', '317244', 'COD', 'a', 'dsadsa', 'dsa', 'đá', '0');
INSERT INTO `orders` VALUES ('17', '317244', 'COD', 'dsa', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('18', '317244', 'COD', 'dsa', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('19', '317244', 'COD', 'dá', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');
INSERT INTO `orders` VALUES ('20', '318545', 'COD', 'ok', 'Nguyen Van Duc', '0335040895', 'My Dinh', '0');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` decimal(14,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('1', '1233.00', '4', '18', 'Admindá');
INSERT INTO `order_detail` VALUES ('2', '312312.00', '1', '18', 'ducbka5');
INSERT INTO `order_detail` VALUES ('3', '1233.00', '4', '19', 'Admindá');
INSERT INTO `order_detail` VALUES ('4', '312312.00', '1', '19', 'ducbka5');
INSERT INTO `order_detail` VALUES ('5', '1233.00', '1', '20', 'Admindá');
INSERT INTO `order_detail` VALUES ('6', '5000.00', '1', '20', 'Duc test');
INSERT INTO `order_detail` VALUES ('7', '312312.00', '1', '20', 'ducbka5');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `trademark` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('11', 'test edit', 'superstar.jpg', '500000', 'Converse');
INSERT INTO `product` VALUES ('12', 'test 1', 'superstar.jpg', '50000', 'Nike');
INSERT INTO `product` VALUES ('13', 'ducbka5', 'superstar.jpg', '234234', 'Nike');
INSERT INTO `product` VALUES ('14', 'Admindá', 'nmd_r1.jpg', '1233', 'Adidas');
INSERT INTO `product` VALUES ('15', 'ducbka5', 'superstar.jpg', '312312', 'Adidas');
INSERT INTO `product` VALUES ('16', 'Duc test', 'ChuckTaylorAllStarCXIB.jpg', '5000', 'Adidas');
INSERT INTO `product` VALUES ('17', 'ducbka5', 'Chuck70FlameLow.jpg', '21331', 'Adidas');
INSERT INTO `product` VALUES ('18', 'Đức', 'Chuck70SignatureLow.jpg', '3123', 'Nike');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('admin', '4297f44b13955235245b2497399d7a93', '123123@gmail.com', '123456789', '1', '1');
INSERT INTO `user` VALUES ('test1', '4297f44b13955235245b2497399d7a93', 'test1@gmail.com', '123123', '2', '0');
INSERT INTO `user` VALUES ('test2', '4297f44b13955235245b2497399d7a93', 'test2@gmail.com', '123123', '3', '0');
INSERT INTO `user` VALUES ('test3', '4297f44b13955235245b2497399d7a93', 'test3@gmail.com', '123123', '4', '0');
