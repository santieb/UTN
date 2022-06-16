-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para empresa_ventas
CREATE DATABASE IF NOT EXISTS `empresa_ventas` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `empresa_ventas`;

-- Volcando estructura para tabla empresa_ventas.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomyape` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  `dni` int(11) DEFAULT '0',
  `direccion` tinytext COLLATE utf8_spanish2_ci,
  `ciudad` tinytext COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.cliente: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cod_cliente`, `nomyape`, `dni`, `direccion`, `ciudad`) VALUES
	(1, 'Juan Hernandez', 32549654, '3 de abril 423', 'Río Grande'),
	(2, 'Carlos Ahumada', 28765293, 'San Martin 2015', 'Ushuaia'),
	(3, 'Alberto Fernandez', 22934102, 'Perito Moreno 105', 'Tolhuin');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla empresa_ventas.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `cod_compra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `forma_pago` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  `total` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  PRIMARY KEY (`cod_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.compra: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` (`cod_compra`, `fecha`, `forma_pago`, `total`, `cod_cliente`) VALUES
	(1, '2022-05-01', 'efectivo', 150000, 1);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Volcando estructura para tabla empresa_ventas.detallecompra
CREATE TABLE IF NOT EXISTS `detallecompra` (
  `cod_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `cod_compra` int(11) DEFAULT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_detalle`),
  KEY `FK_detallecompra_producto` (`cod_producto`),
  KEY `FK_detallecompra_compra` (`cod_compra`),
  CONSTRAINT `FK_detallecompra_compra` FOREIGN KEY (`cod_compra`) REFERENCES `compra` (`cod_compra`),
  CONSTRAINT `FK_detallecompra_producto` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.detallecompra: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `detallecompra` DISABLE KEYS */;
INSERT INTO `detallecompra` (`cod_detalle`, `cod_compra`, `cod_producto`, `cantidad`) VALUES
	(1, 1, 3, 2),
	(2, 1, 1, 3);
/*!40000 ALTER TABLE `detallecompra` ENABLE KEYS */;

-- Volcando estructura para tabla empresa_ventas.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` tinytext COLLATE utf8_spanish2_ci,
  `punitario` float DEFAULT NULL,
  `categoria` tinytext COLLATE utf8_spanish2_ci,
  `stock` int(11) DEFAULT NULL,
  `cod_proveedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.producto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`cod_producto`, `nombre`, `punitario`, `categoria`, `stock`, `cod_proveedor`) VALUES
	(1, 'Mouse Logi G305', 3500, 'computación', 100, 5),
	(2, 'Notebook Gigabyte', 240000, 'computación', 4, 5),
	(3, 'English book', 3500, 'librería', 43, 1),
	(4, 'Hojas A4 x300', 980, 'librería', 80, 1),
	(5, 'Lápices de colores', 350, 'librería', 45, 1),
	(6, 'Monitor 22 pulgadas', 47000, 'Computación', 5, 1),
	(8, 'Gabinete HP', 9500, 'Computación', 20, 3),
	(11, 'Libro para colorear', 250, 'Librería', 150, 1),
	(12, 'Cuadernillo ', 700, 'Librería', 350, 1);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla empresa_ventas.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `cod_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `razonsocial` tinytext COLLATE utf8_spanish2_ci,
  `direccion` tinytext COLLATE utf8_spanish2_ci,
  `calidad` tinytext COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`cod_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.proveedor: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` (`cod_proveedor`, `razonsocial`, `direccion`, `calidad`) VALUES
	(1, 'Rayuela', 'Montevideo 400', 'alta'),
	(2, 'TDF Informática', 'San Martin 607', 'baja'),
	(3, 'Neutro', 'Andasabe 123', 'media'),
	(4, 'La Anonima', 'San Martin 1609', 'media'),
	(5, 'Wallnet', 'San Martin 500', 'baja'),
	(6, 'Atlantico Sur', 'Rosales 1200', 'alta');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla empresa_ventas.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `user` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  `pass` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Volcando datos para la tabla empresa_ventas.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
