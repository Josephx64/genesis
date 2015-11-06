/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : cetecnet_mitienda

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2015-11-06 11:06:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET latin2 NOT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Informatica');
INSERT INTO `categorias` VALUES ('2', 'Audio');
INSERT INTO `categorias` VALUES ('3', 'Video');
INSERT INTO `categorias` VALUES ('4', 'Deportes');
INSERT INTO `categorias` VALUES ('5', 'Hogar');

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_Comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(50) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  PRIMARY KEY (`id_Comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comentarios
-- ----------------------------
INSERT INTO `comentarios` VALUES ('1', 'JOSE LUIS RESENDIZ', 'josephx64@gmail.com', '123456789', 'Audio', 'Este es  mi mensaje de prueba...');
INSERT INTO `comentarios` VALUES ('2', 'VIRIDIANA ALEMAN', 'viridiana.aleman@hotmail.com', '2147483647', 'Deportes', 'Probando ando...');
INSERT INTO `comentarios` VALUES ('3', 'NATALIA RESENDIZ ALEMAN', 'naty@gmail.com', '2147483647', 'Informatica', 'Un mensaje mÃ¡s...');
INSERT INTO `comentarios` VALUES ('4', 'ADRIANA LIMA', 'asriana@gmail.com', '2147483647', 'Informatica', 'Mensaje nuevo...');

-- ----------------------------
-- Table structure for general
-- ----------------------------
DROP TABLE IF EXISTS `general`;
CREATE TABLE `general` (
  `idTexto` int(11) NOT NULL AUTO_INCREMENT,
  `textoEspanol` varchar(90) CHARACTER SET latin1 DEFAULT NULL,
  `textoIngles` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`idTexto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of general
-- ----------------------------
INSERT INTO `general` VALUES ('1', 'Esto es un texto breve extraido de la DB', 'This is just a short paragraph extracted from de Database');

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_Marca`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES ('1', 'BENQ');
INSERT INTO `marcas` VALUES ('2', 'ASUS');
INSERT INTO `marcas` VALUES ('3', 'LG');
INSERT INTO `marcas` VALUES ('4', 'Thermaltake');
INSERT INTO `marcas` VALUES ('5', 'Microsoft');
INSERT INTO `marcas` VALUES ('6', 'Etekcity');
INSERT INTO `marcas` VALUES ('7', 'Logitech');
INSERT INTO `marcas` VALUES ('8', 'Tweeter Clarion');
INSERT INTO `marcas` VALUES ('9', 'Sony');
INSERT INTO `marcas` VALUES ('10', 'Samsung');
INSERT INTO `marcas` VALUES ('11', 'ProFlex');
INSERT INTO `marcas` VALUES ('12', ' Schwinn');
INSERT INTO `marcas` VALUES ('13', 'Spalding');
INSERT INTO `marcas` VALUES ('14', 'Soccer Net');
INSERT INTO `marcas` VALUES ('15', ' Krups');
INSERT INTO `marcas` VALUES ('16', ' Blendtec');
INSERT INTO `marcas` VALUES ('17', 'Vitamix');
INSERT INTO `marcas` VALUES ('18', 'Oster');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_Categoria` int(11) NOT NULL,
  `producto` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_Marca` int(11) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `existencias` int(10) NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_Producto`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', '1', 'Monitor DL2020', '1', '1999.00', '20', 'MonitorDL2020.jpg');
INSERT INTO `productos` VALUES ('2', '1', 'Monitor PB287Q', '2', '2300.00', '15', 'MonitorPB287Q.jpg');
INSERT INTO `productos` VALUES ('3', '1', 'Monitor Electronics UM57', '3', '3714.00', '2', 'MonitorUM57.jpg');
INSERT INTO `productos` VALUES ('4', '1', 'Monitor MX25AQ', '2', '7530.00', '15', 'MonitorMX25AQ.jpg');
INSERT INTO `productos` VALUES ('5', '1', 'Teclado KB-CHM-MBBLUS-01 T', '4', '503.90', '5', 'TecladoKB-CHM-MBBLUS-01.jpg');
INSERT INTO `productos` VALUES ('6', '1', 'Teclado Natural Ergonomic 4000', '5', '548.36', '1', 'TecladoNaturalErgonomic4000.jpg');
INSERT INTO `productos` VALUES ('7', '1', 'Mouse Scroll X1 (M555)', '6', '224.24', '1', 'MouseM555.jpg');
INSERT INTO `productos` VALUES ('8', '1', 'Mouse G502', '7', '699.00', '10', 'MouseG502.jpg');
INSERT INTO `productos` VALUES ('9', '1', 'Teclado Bluetooth Wedge', '5', '699.00', '10', 'TecladoBluetoothWedge.jpg');
INSERT INTO `productos` VALUES ('10', '2', 'Bocinas Xplod Xs-fb1630', '9', '699.00', '15', 'Bocinas-fb1630.jpg');
INSERT INTO `productos` VALUES ('11', '2', 'Bocinas SRG-1623R', '8', '540.00', '1', 'BocinasSRG-1623R.jpg');
INSERT INTO `productos` VALUES ('12', '2', 'Hometheater DH4130S', '3', '2079.00', '3', 'HometheaterDH4130S.jpg');
INSERT INTO `productos` VALUES ('13', '2', 'Home Theater Bh6430p', '3', '4600.00', '14', 'HometheaterBh6430p.jpg');
INSERT INTO `productos` VALUES ('14', '2', 'Bocinas Torre 3 Vias Ssf5000', '9', '2599.00', '4', 'BocinasSsf5000.jpg');
INSERT INTO `productos` VALUES ('15', '2', 'Bocina Mini Xboom Bluetooth', '3', '4899.00', '2', 'BocinaMiniXboom.jpg');
INSERT INTO `productos` VALUES ('16', '3', 'DVD Dp132', '3', '479.00', '9', 'DVD_Dp132.jpg');
INSERT INTO `productos` VALUES ('17', '3', 'DVD Slim DP132', '3', '580.00', '3', 'DVDSlimDP132.jpg');
INSERT INTO `productos` VALUES ('18', '3', 'DVD Dvpsr210p', '9', '499.00', '5', 'DVD_Dvpsr210p.JPG');
INSERT INTO `productos` VALUES ('19', '3', 'Blu Ray BD-HM51', '10', '999.00', '4', 'BluRayBD-HM51.jpg');
INSERT INTO `productos` VALUES ('20', '3', 'Blu Ray Bdps5200r', '9', '1650.00', '7', 'BluRayBdps5200r.jpg');
INSERT INTO `productos` VALUES ('21', '3', 'Smart Tv 58 Full Hd', '10', '10699.00', '5', 'SmartTv58FullHd.jpg');
INSERT INTO `productos` VALUES ('22', '3', 'Smart Tv Suhd 4k', '10', '29599.00', '3', 'SmartTvSuhd4k.jpg');
INSERT INTO `productos` VALUES ('23', '4', 'Biclieta Pro Flex 1.9', '11', '7799.00', '5', 'BiclietaProFlex19.jpg');
INSERT INTO `productos` VALUES ('24', '4', 'Biclieta Ranger', '12', '3899.00', '4', 'BiclietaRanger.jpg');
INSERT INTO `productos` VALUES ('25', '4', 'Balon basketball replica NBA', '13', '429.00', '50', 'BalonBasketballReplicaNBA.jpg');
INSERT INTO `productos` VALUES ('26', '4', 'Balon basketball Platinum Zi/O Excel', '13', '459.00', '25', 'BalonBasketballPlatinum.jpg');
INSERT INTO `productos` VALUES ('27', '4', 'Tablero de basketball Platinum', '13', '13599.00', '6', 'TableroBasketballPlatinum.jpg');
INSERT INTO `productos` VALUES ('28', '4', 'Tablero de basketball The Beast', '13', '21999.00', '4', 'TableroBasketballTheBeast.jpg');
INSERT INTO `productos` VALUES ('29', '4', 'Porteria de Foot ball', '14', '2999.00', '6', 'PorteriaFootBallSoccerNet.jpg');
INSERT INTO `productos` VALUES ('30', '5', 'Cafetera Barista automatica', '15', '5999.00', '10', 'CafeteraBarista.jpg');
INSERT INTO `productos` VALUES ('31', '5', 'Cafetera automatica 15bar', '15', '2199.00', '6', 'CafeteraAutomatica15bar.jpg');
INSERT INTO `productos` VALUES ('32', '5', 'Licuadora Total Blender', '16', '7499.00', '15', 'LicuadoraTotalBlender.jpg');
INSERT INTO `productos` VALUES ('33', '5', 'Jarra WildSide', '16', '1999.00', '12', 'JarraWildSide.jpg');
INSERT INTO `productos` VALUES ('34', '5', 'Licuadora Vitamix', '17', '9999.00', '6', 'LicuadoraVitamix.jpg');
INSERT INTO `productos` VALUES ('35', '5', 'Jarra FourSide ', '16', '1599.00', '4', 'JarraFourSide.jpg');
INSERT INTO `productos` VALUES ('36', '5', 'Jarra Twister', '16', '1999.00', '2', 'JarraTwister.jpg');
INSERT INTO `productos` VALUES ('37', '5', 'Jarra 9L ', '17', '2199.00', '6', 'Jarra9L.jpg');
INSERT INTO `productos` VALUES ('38', '5', 'Jarra 14L', '17', '2199.00', '10', 'Jarra14L.jpg');
INSERT INTO `productos` VALUES ('39', '5', 'Horno tostador Oster', '18', '1149.00', '5', 'HornoTostadorOster.jpg');
INSERT INTO `productos` VALUES ('40', '5', 'Tostador de pan Oster', '18', '439.00', '4', 'TostadorOster.jpg');

-- ----------------------------
-- View structure for vwproductos
-- ----------------------------
DROP VIEW IF EXISTS `vwproductos`;
CREATE VIEW `vwproductos` AS SELECT
	`cetecnet_mitienda`.`productos`.`id_Producto` AS `id_Producto`,
	`cetecnet_mitienda`.`productos`.`id_Categoria` AS `id_Categoria`,
	`cetecnet_mitienda`.`productos`.`producto` AS `producto`,
	`cetecnet_mitienda`.`productos`.`id_Marca` AS `id_Marca`,
	`cetecnet_mitienda`.`productos`.`precio` AS `precio`,
	`cetecnet_mitienda`.`productos`.`existencias` AS `existencias`,
	`cetecnet_mitienda`.`categorias`.`categoria` AS `categoria`,
	`cetecnet_mitienda`.`marcas`.`marca` AS `marca`,
	`cetecnet_mitienda`.`productos`.`foto` AS `foto`
FROM
	(
		(
			`cetecnet_mitienda`.`productos`
			JOIN `cetecnet_mitienda`.`categorias` ON (
				(
					`cetecnet_mitienda`.`productos`.`id_Categoria` = `cetecnet_mitienda`.`categorias`.`id_Categoria`
				)
			)
		)
		JOIN `cetecnet_mitienda`.`marcas` ON (
			(
				`cetecnet_mitienda`.`productos`.`id_Marca` = `cetecnet_mitienda`.`marcas`.`id_Marca`
			)
		)
	)
ORDER BY
	`cetecnet_mitienda`.`productos`.`id_Producto` ;
