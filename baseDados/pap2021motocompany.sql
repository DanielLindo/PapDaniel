/*
 Navicat MySQL Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : localhost:3306
 Source Schema         : pap2021motocompany

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 22/07/2021 02:48:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int NOT NULL AUTO_INCREMENT,
  `categoriaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`categoriaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `chaveId` int NOT NULL AUTO_INCREMENT,
  `chaveNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`chaveId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of chaves
-- ----------------------------
INSERT INTO `chaves` VALUES (1, 'DIÂMETRO X CURSO (mm)');
INSERT INTO `chaves` VALUES (4, 'Consumos');
INSERT INTO `chaves` VALUES (5, 'Capacidade útil do depósito');
INSERT INTO `chaves` VALUES (6, 'Peso em ordem de marcha');
INSERT INTO `chaves` VALUES (7, 'Potência/RPM');
INSERT INTO `chaves` VALUES (8, 'Motor');
INSERT INTO `chaves` VALUES (9, 'Sistema de refrigeração');
INSERT INTO `chaves` VALUES (10, 'Transmissão');
INSERT INTO `chaves` VALUES (11, 'Embraiagem');

-- ----------------------------
-- Table structure for classificacoes
-- ----------------------------
DROP TABLE IF EXISTS `classificacoes`;
CREATE TABLE `classificacoes`  (
  `classificacaoId` int NOT NULL AUTO_INCREMENT,
  `classificacaoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `classificacaoTipoId` int NOT NULL,
  PRIMARY KEY (`classificacaoId`) USING BTREE,
  INDEX `fk_classificacoes_tipos1_idx`(`classificacaoTipoId`) USING BTREE,
  CONSTRAINT `fk_classificacoes_tipos1` FOREIGN KEY (`classificacaoTipoId`) REFERENCES `tipos` (`tipoId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `marcaId` int NOT NULL AUTO_INCREMENT,
  `marcaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (1, 'Honda');
INSERT INTO `marcas` VALUES (2, 'yamaha');
INSERT INTO `marcas` VALUES (3, 'BMW');
INSERT INTO `marcas` VALUES (4, 'Kawasaki');
INSERT INTO `marcas` VALUES (5, 'Ducati');
INSERT INTO `marcas` VALUES (6, 'KTM');
INSERT INTO `marcas` VALUES (7, 'Mv Augusta');
INSERT INTO `marcas` VALUES (8, 'Suzuki');
INSERT INTO `marcas` VALUES (9, 'Aprillia');

-- ----------------------------
-- Table structure for motachaves
-- ----------------------------
DROP TABLE IF EXISTS `motachaves`;
CREATE TABLE `motachaves`  (
  `motaChaveMotaId` int NOT NULL,
  `motaChaveChaveId` int NOT NULL,
  `motaChaveValor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`motaChaveMotaId`, `motaChaveChaveId`) USING BTREE,
  INDEX `fk_motas_has_chaves_chaves1_idx`(`motaChaveChaveId`) USING BTREE,
  INDEX `fk_motas_has_chaves_motas1_idx`(`motaChaveMotaId`) USING BTREE,
  CONSTRAINT `fk_motas_has_chaves_chaves1` FOREIGN KEY (`motaChaveChaveId`) REFERENCES `chaves` (`chaveId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_motas_has_chaves_motas1` FOREIGN KEY (`motaChaveMotaId`) REFERENCES `motas` (`motaId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of motachaves
-- ----------------------------
INSERT INTO `motachaves` VALUES (1, 4, 'pç');
INSERT INTO `motachaves` VALUES (1, 5, '17 l');
INSERT INTO `motachaves` VALUES (1, 6, '209');
INSERT INTO `motachaves` VALUES (1, 7, '(81 kW ) às 7.750 rpm');
INSERT INTO `motachaves` VALUES (1, 8, 'Motor Boxer bicilíndrico a 4 tempos');
INSERT INTO `motachaves` VALUES (1, 9, 'refrigerado por ar/óleo');
INSERT INTO `motachaves` VALUES (1, 10, 'Cardan');
INSERT INTO `motachaves` VALUES (1, 11, 'Embraiagem a seco de disco simples, de acionamento hidráulico');
INSERT INTO `motachaves` VALUES (2, 4, ' 6,25 l/100 km');
INSERT INTO `motachaves` VALUES (2, 5, '16,1 l');
INSERT INTO `motachaves` VALUES (2, 6, '201');
INSERT INTO `motachaves` VALUES (2, 7, '160Kw / 14.500rpm');
INSERT INTO `motachaves` VALUES (2, 8, 'Motor de quatro cilindros em linha a 4 tempos, DOHC, 16 válvulas');
INSERT INTO `motachaves` VALUES (2, 9, 'arrefecimento por líquido');
INSERT INTO `motachaves` VALUES (2, 10, ' Por corrente');
INSERT INTO `motachaves` VALUES (2, 11, ' Embraiagem húmida hidráulica, discos múltiplos com função de assistência e deslizamento');
INSERT INTO `motachaves` VALUES (3, 5, '17 l');
INSERT INTO `motachaves` VALUES (3, 6, '216');
INSERT INTO `motachaves` VALUES (3, 7, '228 kW {310 PS} / 14,000 rpm');
INSERT INTO `motachaves` VALUES (3, 8, '4 tempos, 4 cilindros em linha com compressor.');
INSERT INTO `motachaves` VALUES (3, 9, 'Refrigeração líquida');
INSERT INTO `motachaves` VALUES (3, 10, 'corrente');
INSERT INTO `motachaves` VALUES (9, 5, '13,4 l');
INSERT INTO `motachaves` VALUES (9, 6, '137');
INSERT INTO `motachaves` VALUES (9, 7, '11,0 kw / 6,500 RPM');
INSERT INTO `motachaves` VALUES (9, 8, 'Motor de 1 cilindro, 4 tempos');
INSERT INTO `motachaves` VALUES (9, 9, 'Arrefecimento a líquido');
INSERT INTO `motachaves` VALUES (9, 11, 'Embraiagem húmida multidisco accionada mecanicamente');
INSERT INTO `motachaves` VALUES (10, 5, '11,5 l');
INSERT INTO `motachaves` VALUES (10, 6, '140');
INSERT INTO `motachaves` VALUES (10, 7, '11,0 kW / 9,000 RPM');
INSERT INTO `motachaves` VALUES (10, 8, 'Monocilíndrico 4 tempos, SOHC, 4 válvulas');
INSERT INTO `motachaves` VALUES (10, 9, 'refrigeração líquida');
INSERT INTO `motachaves` VALUES (10, 10, 'Corrente');
INSERT INTO `motachaves` VALUES (10, 11, '	Húmida, mola multidisco');
INSERT INTO `motachaves` VALUES (11, 5, '18 l');
INSERT INTO `motachaves` VALUES (11, 7, '(92 kW) às 7.750 rpm');
INSERT INTO `motachaves` VALUES (11, 8, 'Motor boxer bicilíndrico a quatro tempos');
INSERT INTO `motachaves` VALUES (11, 9, 'refrigeração ar/líquido');
INSERT INTO `motachaves` VALUES (11, 10, 'Cardan');
INSERT INTO `motachaves` VALUES (11, 11, 'Multidisco em banho de óleo, acionada hidraulicamente');
INSERT INTO `motachaves` VALUES (12, 5, '20 l');
INSERT INTO `motachaves` VALUES (12, 6, '	247');
INSERT INTO `motachaves` VALUES (12, 7, '79,0 kw');
INSERT INTO `motachaves` VALUES (12, 8, 'Dois cilindros em V a 90º, 4 tempos');
INSERT INTO `motachaves` VALUES (12, 9, 'refrigeração líquida');
INSERT INTO `motachaves` VALUES (12, 10, 'Corrente');

-- ----------------------------
-- Table structure for motas
-- ----------------------------
DROP TABLE IF EXISTS `motas`;
CREATE TABLE `motas`  (
  `motaId` int NOT NULL AUTO_INCREMENT,
  `motaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaModelo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaMarcaId` int NOT NULL,
  `motaDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  `motaPreco` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaCilindrada` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaAno` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaCombustivel` enum('gasoleo','gasolina') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'gasolina',
  `motaCaixa` enum('manual','automatica') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'manual',
  `motaMudanca` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motaClassificacaoId` int NOT NULL,
  PRIMARY KEY (`motaId`) USING BTREE,
  INDEX `fk_motas_marcas_idx`(`motaMarcaId`) USING BTREE,
  INDEX `fk_motas_classificacoes1_idx`(`motaClassificacaoId`) USING BTREE,
  CONSTRAINT `fk_motas_classificacoes1` FOREIGN KEY (`motaClassificacaoId`) REFERENCES `classificacoes` (`classificacaoId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_motas_marcas` FOREIGN KEY (`motaMarcaId`) REFERENCES `marcas` (`marcaId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of motas
-- ----------------------------
INSERT INTO `motas` VALUES (1, 'Scrambeler', 'bwm', 3, 'sim', '7500', '86', 'images/srambeler.jpg', '2020', 'gasolina', 'manual', '6', 1);
INSERT INTO `motas` VALUES (2, 'cbr1000', 'Honda cbr', 1, 'sim', '26000', '220', 'images/cbr1000rr-rAmostra.png', '2020', 'gasolina', 'manual', '6', 1);
INSERT INTO `motas` VALUES (3, 'kawasaki', 'Kawasaki H2R', 4, 'sim', '32000', '240', 'images/H2Rkawasaki1.png', '2021', 'gasolina', 'manual', '6', 1);
INSERT INTO `motas` VALUES (7, 'Aprillia Rsv4', 'Rsv', 7, 'sim', '27000', '217', 'images/aprilla1.png', '2020', 'gasolina', '', 'manual', 1);
INSERT INTO `motas` VALUES (9, 'Duke 125', 'ktm', 6, 'sim', '5000', '14', 'images/125.jpg', '2020', 'gasolina', '', 'manual', 4);
INSERT INTO `motas` VALUES (10, 'yamaha yzf r125', 'yamaha', 2, 'sim', '5000', '15', 'images/yamaha-yzf r125Amostra.png', '2020', 'gasolina', '', 'manual', 4);
INSERT INTO `motas` VALUES (11, 'Bmw 1200-rs', 'rs', 3, 'sim', '22000', '100', 'images/bmw12000rsAmostra.png', '2021', 'gasolina', '', 'manual', 5);
INSERT INTO `motas` VALUES (12, 'Suzuki 1050', 'V-strom', 8, 'sim', '16500', '85', 'images/suzukivstrom1050xtAmostra´~.png', '2021', 'gasolina', '', 'manual', 6);

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `produtoId` int NOT NULL AUTO_INCREMENT,
  `produtoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoCategoriaId` int NOT NULL,
  `produtoURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produtoPreco` decimal(10, 2) NOT NULL,
  `produtoDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`produtoId`) USING BTREE,
  INDEX `fk_produtos_categorias1_idx`(`produtoCategoriaId`) USING BTREE,
  CONSTRAINT `fk_produtos_categorias1` FOREIGN KEY (`produtoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `tipoId` int NOT NULL AUTO_INCREMENT,
  `tipoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`tipoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tipos
-- ----------------------------
INSERT INTO `tipos` VALUES (1, 'Estrada');
INSERT INTO `tipos` VALUES (2, 'Trail');
INSERT INTO `tipos` VALUES (3, 'Todo o terreno');
INSERT INTO `tipos` VALUES (4, 'Acessorios');

SET FOREIGN_KEY_CHECKS = 1;
