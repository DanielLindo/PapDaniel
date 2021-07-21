/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021motocompany

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 21/07/2021 17:48:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`categoriaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (2, 'Capacete');
INSERT INTO `categorias` VALUES (3, 'Casaco');
INSERT INTO `categorias` VALUES (4, 'Luvas');
INSERT INTO `categorias` VALUES (5, 'Calças');
INSERT INTO `categorias` VALUES (6, 'Botas');

-- ----------------------------
-- Table structure for chaves
-- ----------------------------
DROP TABLE IF EXISTS `chaves`;
CREATE TABLE `chaves`  (
  `chaveId` int(11) NOT NULL AUTO_INCREMENT,
  `chaveNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`chaveId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chaves
-- ----------------------------
INSERT INTO `chaves` VALUES (1, 'DIÂMETRO X CURSO (mm)');
INSERT INTO `chaves` VALUES (2, 'ALIMENTAÇÃO');
INSERT INTO `chaves` VALUES (3, 'TAXA DE COMPRESSÃO');

-- ----------------------------
-- Table structure for classificacoes
-- ----------------------------
DROP TABLE IF EXISTS `classificacoes`;
CREATE TABLE `classificacoes`  (
  `classificacaoId` int(11) NOT NULL AUTO_INCREMENT,
  `classificacaoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `classificacaoTipoId` int(11) NOT NULL,
  PRIMARY KEY (`classificacaoId`) USING BTREE,
  INDEX `fk_classificacoes_tipos1_idx`(`classificacaoTipoId`) USING BTREE,
  CONSTRAINT `fk_classificacoes_tipos1` FOREIGN KEY (`classificacaoTipoId`) REFERENCES `tipos` (`tipoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of classificacoes
-- ----------------------------
INSERT INTO `classificacoes` VALUES (1, 'Super Desportiva', 1);
INSERT INTO `classificacoes` VALUES (2, 'Hyper Naked', 1);
INSERT INTO `classificacoes` VALUES (3, 'Sport Heritage', 1);
INSERT INTO `classificacoes` VALUES (4, '125cc', 1);
INSERT INTO `classificacoes` VALUES (5, 'Desportivo de aventura', 2);
INSERT INTO `classificacoes` VALUES (6, 'Desporto e aventura', 2);
INSERT INTO `classificacoes` VALUES (7, 'Moto4', 3);
INSERT INTO `classificacoes` VALUES (8, 'Motas de competicao', 3);
INSERT INTO `classificacoes` VALUES (9, 'Capacete', 4);
INSERT INTO `classificacoes` VALUES (10, 'Casaco', 4);
INSERT INTO `classificacoes` VALUES (11, 'Calças', 4);
INSERT INTO `classificacoes` VALUES (12, 'Botas', 4);

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas`  (
  `marcaId` int(11) NOT NULL AUTO_INCREMENT,
  `marcaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (1, 'Honda');
INSERT INTO `marcas` VALUES (2, 'yamaha');
INSERT INTO `marcas` VALUES (3, 'BMW');
INSERT INTO `marcas` VALUES (4, 'Kawasaki');

-- ----------------------------
-- Table structure for motachaves
-- ----------------------------
DROP TABLE IF EXISTS `motachaves`;
CREATE TABLE `motachaves`  (
  `motaChaveMotaId` int(11) NOT NULL,
  `motaChaveChaveId` int(11) NOT NULL,
  `motaChaveValor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`motaChaveMotaId`, `motaChaveChaveId`) USING BTREE,
  INDEX `fk_motas_has_chaves_chaves1_idx`(`motaChaveChaveId`) USING BTREE,
  INDEX `fk_motas_has_chaves_motas1_idx`(`motaChaveMotaId`) USING BTREE,
  CONSTRAINT `fk_motas_has_chaves_chaves1` FOREIGN KEY (`motaChaveChaveId`) REFERENCES `chaves` (`chaveId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_motas_has_chaves_motas1` FOREIGN KEY (`motaChaveMotaId`) REFERENCES `motas` (`motaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of motachaves
-- ----------------------------
INSERT INTO `motachaves` VALUES (1, 1, ' 	81 mm x 48,5 mm');

-- ----------------------------
-- Table structure for motas
-- ----------------------------
DROP TABLE IF EXISTS `motas`;
CREATE TABLE `motas`  (
  `motaId` int(11) NOT NULL AUTO_INCREMENT,
  `motaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaModelo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaMarcaId` int(11) NOT NULL,
  `motaDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  `motaPreco` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaCilindrada` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaAno` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaCombustivel` enum('gasoleo','gasolina') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'gasolina',
  `motaCaixa` enum('manual','automatica') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'manual',
  `motaMudanca` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaClassificacaoId` int(11) NOT NULL,
  PRIMARY KEY (`motaId`) USING BTREE,
  INDEX `fk_motas_marcas_idx`(`motaMarcaId`) USING BTREE,
  INDEX `fk_motas_classificacoes1_idx`(`motaClassificacaoId`) USING BTREE,
  CONSTRAINT `fk_motas_classificacoes1` FOREIGN KEY (`motaClassificacaoId`) REFERENCES `classificacoes` (`classificacaoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_motas_marcas` FOREIGN KEY (`motaMarcaId`) REFERENCES `marcas` (`marcaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of motas
-- ----------------------------
INSERT INTO `motas` VALUES (1, 'Scrambeler', 'bwm', 3, 'sim', '7500', '86', 'images/srambeler.jpg', '2020', 'gasolina', 'manual', '6', 1);
INSERT INTO `motas` VALUES (2, 'cbr1000', 'Honda cbr', 1, 'sim', '26000', '220', 'images/cbr1000rr-rAmostra.png', '2020', 'gasolina', 'manual', '6', 1);
INSERT INTO `motas` VALUES (3, 'kawasaki', 'Kawasaki H2R', 4, 'sim', '32000', '240', 'images/H2Rkawasaki1.png', '2021', 'gasolina', 'manual', '6', 1);

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `produtoId` int(11) NOT NULL AUTO_INCREMENT,
  `produtoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoCategoriaId` int(11) NOT NULL,
  `produtoURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoPreco` decimal(10, 2) NOT NULL,
  `produtoDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`produtoId`) USING BTREE,
  INDEX `fk_produtos_categorias1_idx`(`produtoCategoriaId`) USING BTREE,
  CONSTRAINT `fk_produtos_categorias1` FOREIGN KEY (`produtoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (9, 'Casaco', 3, 'images/Casaco.png', 220.00, 'nao');
INSERT INTO `produtos` VALUES (10, 'Botas', 6, 'images/Botas.png', 120.00, 'sim');

-- ----------------------------
-- Table structure for tipos
-- ----------------------------
DROP TABLE IF EXISTS `tipos`;
CREATE TABLE `tipos`  (
  `tipoId` int(11) NOT NULL AUTO_INCREMENT,
  `tipoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`tipoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tipos
-- ----------------------------
INSERT INTO `tipos` VALUES (1, 'Estrada');
INSERT INTO `tipos` VALUES (2, 'Trail');
INSERT INTO `tipos` VALUES (3, 'Todo o terreno');
INSERT INTO `tipos` VALUES (4, 'Acessorios');

SET FOREIGN_KEY_CHECKS = 1;
