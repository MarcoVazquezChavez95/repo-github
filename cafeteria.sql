-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-10-2022 a las 11:48:34
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `ActualizarProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto` (IN `id` VARCHAR(15), IN `nombre` VARCHAR(45), IN `referencia` VARCHAR(45), IN `precio` INT, IN `peso` INT, IN `categoria` VARCHAR(45), IN `stock` INT)  BEGIN 

UPDATE 
 producto SET nombre=nombre,referencia=referencia,precio=precio,peso=peso,
 categoria=categoria,stock=stock

WHERE id_producto=id;

END$$

DROP PROCEDURE IF EXISTS `ActualizarStock`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarStock` (IN `id` VARCHAR(15), IN `cantidad` INT)  BEGIN 

UPDATE 
 producto SET stock=stock-cantidad

 WHERE
 id_producto=id;

END$$

DROP PROCEDURE IF EXISTS `EliminarProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProducto` (IN `id` VARCHAR(15))  BEGIN 

DELETE FROM
  producto

WHERE

id_producto=id;

END$$

DROP PROCEDURE IF EXISTS `InsertarProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto` (IN `id_producto` VARCHAR(15), IN `nombre` VARCHAR(45), IN `referencia` VARCHAR(45), IN `precio` INT, IN `peso` INT, IN `categoria` VARCHAR(45), IN `stock` VARCHAR(45))  BEGIN 

INSERT INTO 
 producto(id_producto ,nombre,referencia,precio,peso,categoria,stock )

 VALUES 

 (id_producto ,nombre,referencia,precio,peso,categoria,stock);

END$$

DROP PROCEDURE IF EXISTS `InsertarVenta`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVenta` (IN `id_producto` VARCHAR(15), IN `cantidad` INT)  BEGIN 
INSERT INTO venta(id_producto, cantidad ) 
VALUES 
(id_producto ,cantidad); 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` varchar(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `stock` int(11) UNSIGNED NOT NULL,
  `fecha_de_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_de_creacion`) VALUES
('CAFE3021', 'Cafe Americano', 'Cafe colombiano', 355, 500, 'Cafes', 310, '2022-10-05 02:47:36'),
('PAY28397', 'Pay de manzana', 'Pay de harina', 65, 1000, 'Panes', 440, '2022-10-05 02:49:06'),
('MOF29327', 'MOFIN', 'Mofin de chocolate', 33, 130, 'Panes', 147, '2022-10-05 04:13:06'),
('PAN22337', 'Cuerno de dulce', 'Cuerno ', 35, 200, 'Panes', 967, '2022-10-05 05:27:20'),
('PAN22307', 'Pan de muerto', 'Pan con azucar', 45, 220, 'Panes', 308, '2022-10-05 05:25:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id_producto` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `id_producto` (`id_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_producto`, `cantidad`) VALUES
('CAFE3021', 20),
('CAFE3021', 20),
('PAY28397', 30),
('PAY28397', 30),
('MOF29327', 15),
('MOF29327', 15),
('PAN22337', 33),
('PAN22307', 3),
('CAFE3021', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
