-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2015 a las 15:14:38
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datosalirio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajusteinventario`
--

CREATE TABLE IF NOT EXISTS `ajusteinventario` (
`idajusteinventario` bigint(20) NOT NULL,
  `idproducto` bigint(20) NOT NULL,
  `cantidad` int(12) NOT NULL,
  `concepto` longtext NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `tipo` bigint(20) NOT NULL,
  `identradasalidaproducto` bigint(11) NOT NULL,
  `valorunitario` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignarcarretaje`
--

CREATE TABLE IF NOT EXISTS `asignarcarretaje` (
`idasignar` bigint(20) NOT NULL,
  `idbodega` bigint(20) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `asignarcarretaje`
--

INSERT INTO `asignarcarretaje` (`idasignar`, `idbodega`, `nombre`) VALUES
(1, 7, 'sixto'),
(2, 8, 'sixto'),
(3, 9, 'sixto'),
(4, 10, 'sixto'),
(5, 11, 'sixto'),
(6, 12, 'lola'),
(7, 13, 'lola'),
(8, 14, 'sixto'),
(9, 15, 'gallo fino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE IF NOT EXISTS `bodega` (
`idbodega` int(11) NOT NULL,
  `nombrebodega` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `idmunicipio` int(4) NOT NULL,
  `direccionbodega` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `idtipobodega` int(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `bodega`
--

INSERT INTO `bodega` (`idbodega`, `nombrebodega`, `idmunicipio`, `direccionbodega`, `idtipobodega`) VALUES
(7, 'toboganes 1', 337, 'afueras', 9),
(8, 'toboganes 2', 337, 'afueras', 9),
(9, 'morrosquillo', 337, 'afueras', 9),
(10, 'mister', 337, 'afueras', 9),
(11, 'iregui', 337, 'afueras', 9),
(12, 'lola 2', 337, 'afueras', 9),
(13, 'lola 1', 337, 'afueras', 9),
(14, 'la dorian', 337, 'afueras', 9),
(15, 'gallo fino', 337, 'afueras', 9),
(16, 'planta ', 337, 'afueras', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE IF NOT EXISTS `caja` (
`idcaja` int(4) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`idcliente` int(4) NOT NULL,
  `nombrecliente` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `telefonocliente` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nitcliente` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombrecliente`, `telefonocliente`, `nitcliente`) VALUES
(5, 'YOSIMAR                    ', 'XXX         ', 'XXX'),
(6, 'MULAS          ', 'XXX         ', 'XXX'),
(7, 'OTROS          ', 'XXX         ', 'XXX'),
(8, 'MURILLO          ', 'XXX         ', 'XXX'),
(9, 'GEREMIAS          ', 'XXX         ', 'XXX'),
(10, 'MARCOS          ', 'XXX         ', 'XXX'),
(11, 'LA MEJOR VIVIENDA          ', 'XXX         ', 'XXX'),
(12, 'MG          ', 'XXX         ', 'XXX'),
(13, 'NORCASIA          ', 'XXX         ', 'XXX'),
(14, 'PACHO PALERO                        ', ' XXX        ', 'XXX'),
(15, 'CHOSA                    ', 'XXX         ', 'XXX'),
(16, 'ANDRES          ', 'XXX         ', 'XXX'),
(17, 'JAVIER          ', 'XXX         ', 'XXX'),
(18, 'DANIEL ESCOM          ', 'XXX         ', 'XXX'),
(19, 'HNOS MARCOS          ', 'XXX       ', 'XXX'),
(20, 'DARI GOMEZ          ', 'XXX         ', 'XXX'),
(21, 'DOBLE TROQUE           ', 'XXX         ', 'XXX'),
(22, 'ALADINO          ', 'XXX         ', 'XXX'),
(23, 'CHACHACO          ', 'XXX         ', 'XXX'),
(24, 'CONSORCIO 064                          ', 'XXX         ', 'XXX'),
(25, 'JESICA SALDAÑA          ', 'XXX         ', 'XXX'),
(26, 'YACOPI          ', 'XXX         ', 'XXX'),
(48, 'ERALDO          ', 'XXX         ', 'XXX'),
(82, 'ASOCIACION', 'XXX', 'XXX'),
(30, 'PURNIO          ', 'XXX         ', 'XXX'),
(31, 'DON VICTOR          ', 'XXX      ', 'XXX'),
(32, 'WILSON PIRA', 'XXX', 'XXX'),
(33, 'RONCANSIO          ', 'XXX         ', 'XXX'),
(34, 'WILSON PIRA                           ', 'XXX         ', 'XXX'),
(35, 'FONSECA                    ', 'XXX         ', 'XXX'),
(36, 'MINCHO          ', 'XXX         ', 'XXX'),
(46, 'ZIPAQUIRA', 'XXX', 'XXX'),
(47, 'PORFIDIO           ', 'XXX         ', 'XXX'),
(37, 'SIXTO          ', 'XXX         ', 'XXX'),
(38, 'GUILLERMO          ', 'XXX         ', 'XXX'),
(39, 'BOYACA', 'XXX', 'XXX'),
(40, 'PALMA REAL', 'XXX', 'XXX'),
(41, 'VILLETA          ', 'XXX         ', 'XXX'),
(42, 'MISTER          ', 'XXX         ', 'XXX'),
(43, 'ERIBERTO  1        ', 'XXX         ', 'XXX'),
(44, 'FERCHO          ', 'XXX         ', 'XXX'),
(45, 'JULIO', 'XXX', 'XXX'),
(49, 'MARIQUITA', 'XXX', 'XXX'),
(50, 'VICTORIA', 'XXX', 'XXX'),
(51, 'OSCAR', 'XXX', 'XXX'),
(52, 'LA VEGA', 'XXX', 'XXX'),
(53, 'CONSORCIO 064                    ', 'XXX         ', 'XXX'),
(54, 'PAIME', 'XXX', 'XXX'),
(55, 'CARLOS JULIO', 'XXX', 'XXX'),
(56, 'MARQUETALIA', 'XXX', 'XXX'),
(57, 'EL PEÑOL YILMER      ', 'XXX         ', 'XXX'),
(58, 'FACA YEPEZ', 'XXX', 'XXX'),
(59, 'HNO YOSIMAR', 'XXX', 'XXX'),
(60, 'ANDRES VILLETA', 'XXX', 'XXX'),
(61, 'HECTOR RETRO', 'XXX', 'XXX'),
(62, 'OSWAL', 'XXX', 'XXX'),
(63, 'OMAR ARCILA', 'XXX', 'XXX'),
(64, 'EL PEÑOL', 'XXX', 'XXX'),
(65, 'HAWEI', 'XXX', 'XXX'),
(66, 'FRANCISCO', 'XXX', 'XXX'),
(67, 'VOLQUETA MACO', 'XXX', 'XXX'),
(68, 'AMIGO CHAOS', 'XXX', 'XXX'),
(69, 'MAIZENA', 'XXX', 'XXX'),
(70, 'AMIGO WILMAR', 'XXX', 'XXX'),
(71, 'CAMION', 'XXX', 'XXX'),
(72, 'RAMIRO', 'XXX', 'XXX'),
(73, 'ESPAÃ‘OL', 'XXX', 'XXX'),
(74, 'MIGUEL', 'XXX', 'XXX'),
(75, 'ALIRIO', 'XXX', 'XXX'),
(76, 'CHIMBILA', 'XXX', 'XXX'),
(77, 'CARRILLO', 'XXX', 'XXX'),
(78, 'PEPE', 'XXX', 'XXX'),
(79, 'LAGARTIJA', 'XXX', 'XXX'),
(80, 'FABIAN', 'XXX', 'XXX'),
(81, 'ISMAEL', 'XXX', 'XXX'),
(83, 'TNC-060 VOLQUETA', 'XXX', 'XXX'),
(84, 'HIUNDAI', 'XXX', 'XXX'),
(85, 'SAMANA', 'XXX', 'XXX'),
(86, 'MAKO VOLQUETA', 'XXX', 'XXX'),
(87, 'FRESNO', 'XXX', 'XXX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_sucursal`
--

CREATE TABLE IF NOT EXISTS `cliente_sucursal` (
  `idcliente_sucursal` bigint(20) NOT NULL,
  `idcliente` int(4) NOT NULL,
  `direccion` int(11) NOT NULL,
  `idmunicipio` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
`idcompra` bigint(20) NOT NULL,
  `idproveedor` int(6) NOT NULL,
  `documentocompra` int(11) NOT NULL,
  `fecha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `valortotal` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idcompra`, `idproveedor`, `documentocompra`, `fecha`, `valortotal`) VALUES
(1, 14, 201511901, '2014-12-23', 42000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE IF NOT EXISTS `compra_producto` (
`idcompra` bigint(20) NOT NULL,
  `idinventario` int(4) NOT NULL,
  `viajes` int(4) NOT NULL,
  `metros` int(6) NOT NULL,
  `valorunitario` int(10) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `valor` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `compra_producto`
--

INSERT INTO `compra_producto` (`idcompra`, `idinventario`, `viajes`, `metros`, `valorunitario`, `cantidad`, `valor`) VALUES
(1, 14, 3, 7, 2000, 21, 42000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE IF NOT EXISTS `conductor` (
`idconductor` int(4) NOT NULL,
  `nombreconductor` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convertirmaterial`
--

CREATE TABLE IF NOT EXISTS `convertirmaterial` (
`idconvertirmaterial` bigint(20) NOT NULL,
  `idproductoentrante` bigint(20) NOT NULL,
  `cantidadentrante` int(6) NOT NULL,
  `idproductosalida` bigint(20) NOT NULL,
  `cantidadsalida` bigint(20) NOT NULL,
  `idproveedorcarretaje` bigint(20) NOT NULL,
  `valorcarretaje` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `concepto` longtext NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `convertirmaterial`
--

INSERT INTO `convertirmaterial` (`idconvertirmaterial`, `idproductoentrante`, `cantidadentrante`, `idproductosalida`, `cantidadsalida`, `idproveedorcarretaje`, `valorcarretaje`, `fecha`, `concepto`) VALUES
(1, 12, 30, 13, 30, 12, 520000, '2015-01-14', 'TRANSFORMACION DE MATERIAL, \r\nVOLQUETA GEREMIAS 200.000, COMBUSTIBLE 100.000, SUELDO 50.000, ARRIENDO RETRO 170.000'),
(2, 12, 6, 19, 6, 12, 0, '2015-01-14', ''),
(3, 12, 6, 16, 6, 12, 0, '2015-01-14', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costoscompra`
--

CREATE TABLE IF NOT EXISTS `costoscompra` (
`idcostocompra` bigint(20) NOT NULL,
  `idcompra` bigint(20) NOT NULL,
  `idproveedorcargeplaya` bigint(20) NOT NULL,
  `valorcargeplaya` bigint(20) NOT NULL,
  `idproveedortransporteplanta` bigint(20) NOT NULL,
  `valortransporte` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `costoscompra`
--

INSERT INTO `costoscompra` (`idcostocompra`, `idcompra`, `idproveedorcargeplaya`, `valorcargeplaya`, `idproveedortransporteplanta`, `valortransporte`) VALUES
(1, 1, 13, 42000, 13, 63000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_cobrar`
--

CREATE TABLE IF NOT EXISTS `cuenta_cobrar` (
`idcuenta_cobrar` bigint(20) NOT NULL,
  `idventa` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cuenta_cobrar`
--

INSERT INTO `cuenta_cobrar` (`idcuenta_cobrar`, `idventa`) VALUES
(3, 64);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_pagar`
--

CREATE TABLE IF NOT EXISTS `cuenta_pagar` (
`idcuenta_pagar` bigint(20) NOT NULL,
  `idcompra` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cuenta_pagar`
--

INSERT INTO `cuenta_pagar` (`idcuenta_pagar`, `idcompra`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` int(4) NOT NULL,
  `nombredepartamento` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `nombredepartamento`) VALUES
(1, 'AMAZONAS'),
(2, 'ANTIOQUIA'),
(3, 'ARAUCA'),
(4, 'ATLÁNTICO'),
(5, 'BOLÍVAR'),
(6, 'BOYACÁ'),
(7, 'CALDAS'),
(8, 'CAQUETÁ'),
(9, 'CASANARE'),
(10, 'CAUCA'),
(11, 'CESAR'),
(12, 'CHOCÓ'),
(13, 'CÓRDOBA'),
(14, 'CUNDINAMARCA'),
(15, 'GUAINÍA'),
(16, 'GUAVIARE'),
(17, 'HUILA'),
(18, 'LA GUAJIRA'),
(19, 'MAGDALENA'),
(20, 'META'),
(21, 'NARIÑO'),
(22, 'NORTE DE SANTANDER'),
(23, 'PUTUMAYO'),
(24, 'QUINDÍO'),
(25, 'RISARALDA'),
(26, 'SAN ANDRÉS Y ROVIDENCIA'),
(27, 'SANTANDER'),
(28, 'SUCRE'),
(29, 'TOLIMA'),
(30, 'VALLE DEL CAUCA'),
(31, 'VAUPÉS'),
(32, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_caja`
--

CREATE TABLE IF NOT EXISTS `entrada_caja` (
`identrada_caja` bigint(20) NOT NULL,
  `idcaja` int(4) NOT NULL,
  `valor` int(10) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `concepto` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=147 ;

--
-- Volcado de datos para la tabla `entrada_caja`
--

INSERT INTO `entrada_caja` (`identrada_caja`, `idcaja`, `valor`, `fecha_hora`, `concepto`, `fecha`) VALUES
(93, 1, 250000, '2015-01-15 17:36:34', 'venta numero=91', '2015-01-11'),
(113, 1, 180000, '2015-01-22 09:47:41', 'venta numero=111', '2014-12-01'),
(102, 1, 180000, '2015-01-21 15:03:45', 'venta numero=100', '2014-12-01'),
(25, 1, 250000, '2014-12-17 21:51:59', 'venta numero=27', '2014-12-01'),
(26, 1, 250000, '2014-12-17 22:23:15', 'venta numero=28', '2014-12-01'),
(27, 1, 240000, '2014-12-18 14:22:03', 'venta numero=29', '2014-12-02'),
(31, 1, 240000, '2014-12-18 20:19:05', 'venta numero=33', '2014-12-03'),
(30, 1, 250000, '2014-12-18 19:54:30', 'venta numero=32', '2014-12-02'),
(32, 1, 240000, '2014-12-18 21:07:19', 'venta numero=34', '2014-12-04'),
(34, 1, 250000, '2014-12-18 21:15:17', 'venta numero=35', '2014-12-04'),
(35, 1, 130000, '2014-12-18 21:20:28', 'venta numero=36', '2014-12-05'),
(36, 1, 140000, '2014-12-18 21:25:03', 'venta numero=37', '2014-12-05'),
(41, 1, 250000, '2014-12-18 22:18:35', 'venta numero=39', '2014-12-07'),
(107, 1, 280000, '2015-01-21 15:25:07', 'venta numero=105', '2014-12-05'),
(43, 1, 120000, '2014-12-18 22:41:37', 'venta numero=41', '2014-12-05'),
(44, 1, 235000, '2014-12-18 22:43:30', 'venta numero=42', '2014-12-06'),
(45, 1, 250000, '2014-12-18 22:58:33', 'venta numero=43', '2014-12-09'),
(46, 1, 90000, '2014-12-18 23:02:08', 'venta numero=44', '2014-12-09'),
(47, 1, 120000, '2014-12-19 13:20:30', 'venta numero=45', '2014-12-09'),
(104, 1, 260000, '2015-01-21 15:16:08', 'venta numero=102', '2014-12-13'),
(105, 1, 250000, '2015-01-21 15:18:07', 'venta numero=103', '2014-12-13'),
(52, 1, 220000, '2014-12-19 14:14:45', 'venta numero=50', '2014-12-16'),
(53, 1, 120000, '2014-12-19 14:17:36', 'venta numero=51', '2014-12-17'),
(54, 1, 105000, '2014-12-19 14:24:12', 'venta numero=52', '2014-12-17'),
(55, 1, 130000, '2014-12-19 15:52:10', 'venta numero=53', '2014-12-18'),
(131, 1, 180000, '2015-01-27 16:05:37', 'venta numero=129', '2015-01-16'),
(57, 1, 230000, '2014-12-29 13:28:15', 'venta numero=55', '2014-12-28'),
(58, 1, 230000, '2014-12-29 16:33:47', 'venta numero=56', '2014-12-29'),
(59, 1, 125000, '2014-12-29 16:34:57', 'venta numero=57', '2014-12-29'),
(60, 1, 230000, '2014-12-31 13:29:01', 'venta numero=58', '2014-12-30'),
(61, 1, 115000, '2014-12-31 13:31:42', 'venta numero=59', '2014-12-31'),
(95, 1, 105000, '2015-01-20 16:05:35', 'venta numero=93', '2014-12-29'),
(67, 1, 280000, '2015-01-05 08:44:03', 'venta numero=63', '2014-12-29'),
(68, 1, 230000, '2015-01-05 08:49:09', 'venta numero=65', '2015-01-02'),
(69, 1, 225000, '2015-01-05 08:50:52', 'venta numero=66', '2015-01-02'),
(70, 1, 250000, '2015-01-05 09:04:22', 'venta numero=67', '2015-01-03'),
(71, 1, 240000, '2015-01-05 09:07:21', 'venta numero=68', '2015-01-03'),
(72, 1, 250000, '2015-01-05 09:08:47', 'venta numero=69', '2015-01-04'),
(73, 1, 240000, '2015-01-06 11:42:29', 'venta numero=71', '2015-01-06'),
(74, 1, 250000, '2015-01-07 11:10:35', 'venta numero=72', '2015-01-07'),
(75, 1, 280000, '2015-01-07 11:12:33', 'venta numero=73', '2015-01-07'),
(76, 1, 360000, '2015-01-13 11:26:36', 'venta numero=74', '2015-01-08'),
(97, 1, 220000, '2015-01-20 17:13:57', 'venta numero=95', '2015-01-09'),
(78, 1, 140000, '2015-01-13 11:34:35', 'venta numero=76', '2015-01-10'),
(79, 1, 108000, '2015-01-13 11:38:56', 'venta numero=77', '2015-01-10'),
(80, 1, 120000, '2015-01-13 11:41:31', 'venta numero=78', '2015-01-10'),
(81, 1, 220000, '2015-01-13 11:43:45', 'venta numero=79', '2015-01-10'),
(91, 1, 200000, '2015-01-15 17:33:16', 'venta numero=89', '2015-01-11'),
(96, 1, 220000, '2015-01-20 17:08:06', 'venta numero=94', '2015-01-11'),
(85, 1, 220000, '2015-01-13 12:24:35', 'venta numero=83', '2015-01-12'),
(86, 1, 140000, '2015-01-13 12:25:47', 'venta numero=84', '2015-01-13'),
(88, 1, 130000, '2015-01-15 15:58:54', 'venta numero=86', '2015-01-14'),
(89, 1, 230000, '2015-01-15 16:01:03', 'venta numero=87', '2015-01-14'),
(94, 1, 200000, '2015-01-15 17:38:12', 'venta numero=92', '2015-01-11'),
(112, 1, 130000, '2015-01-22 09:29:19', 'venta numero=110', '2014-12-27'),
(110, 1, 260000, '2015-01-22 09:15:50', 'venta numero=108', '2014-12-13'),
(108, 1, 260000, '2015-01-21 15:26:43', 'venta numero=106', '2014-12-05'),
(111, 1, 105000, '2015-01-22 09:26:34', 'venta numero=109', '2014-12-30'),
(116, 1, 240000, '2015-01-22 17:03:46', 'venta numero=114', '2015-01-16'),
(118, 1, 220000, '2015-01-22 17:34:26', 'venta numero=116', '2015-01-16'),
(119, 1, 250000, '2015-01-23 08:42:09', 'venta numero=117', '2015-01-16'),
(120, 1, 100000, '2015-01-23 09:53:18', 'venta numero=118', '2015-01-18'),
(121, 1, 220000, '2015-01-23 09:55:39', 'venta numero=119', '2015-01-18'),
(122, 1, 120000, '2015-01-23 10:00:15', 'venta numero=120', '2015-01-19'),
(123, 1, 120000, '2015-01-23 10:06:26', 'venta numero=121', '2015-01-19'),
(124, 1, 240000, '2015-01-23 10:08:27', 'venta numero=122', '2015-01-19'),
(125, 1, 220000, '2015-01-23 10:11:12', 'venta numero=123', '2015-01-19'),
(126, 1, 80000, '2015-01-23 10:16:24', 'venta numero=124', '2015-01-20'),
(127, 1, 120000, '2015-01-23 10:37:02', 'venta numero=125', '2015-01-20'),
(128, 1, 220000, '2015-01-23 10:40:01', 'venta numero=126', '2015-01-20'),
(129, 1, 250000, '2015-01-23 10:41:27', 'venta numero=127', '2015-01-20'),
(130, 1, 240000, '2015-01-23 10:42:34', 'venta numero=128', '2015-01-22'),
(138, 1, 420000, '2015-01-27 16:26:54', 'venta numero=136', '2015-01-23'),
(133, 1, 450000, '2015-01-27 16:15:59', 'venta numero=131', '2015-01-23'),
(134, 1, 120000, '2015-01-27 16:17:38', 'venta numero=132', '2015-01-23'),
(135, 1, 100000, '2015-01-27 16:19:41', 'venta numero=133', '2015-01-23'),
(136, 1, 240000, '2015-01-27 16:22:03', 'venta numero=134', '2015-01-23'),
(137, 1, 400000, '2015-01-27 16:24:07', 'venta numero=135', '2015-01-23'),
(139, 1, 160000, '2015-01-27 17:41:17', 'venta numero=137', '2015-01-26'),
(140, 1, 80000, '2015-01-27 17:42:42', 'venta numero=138', '2015-01-26'),
(141, 1, 120000, '2015-01-27 17:44:49', 'venta numero=139', '2015-01-27'),
(142, 1, 240000, '2015-01-27 17:47:03', 'venta numero=140', '2015-01-27'),
(143, 1, 240000, '2015-01-27 17:50:48', 'venta numero=141', '2015-01-27'),
(144, 1, 270000, '2015-01-27 17:52:41', 'venta numero=142', '2015-01-27'),
(145, 1, 392000, '2015-01-27 17:55:50', 'venta numero=143', '2015-01-27'),
(146, 1, 220000, '2015-01-27 17:56:59', 'venta numero=144', '2015-01-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_producto`
--

CREATE TABLE IF NOT EXISTS `entrada_producto` (
`identradaproducto` bigint(20) NOT NULL,
  `idinventario_producto` bigint(20) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `entrada_producto`
--

INSERT INTO `entrada_producto` (`identradaproducto`, `idinventario_producto`, `cantidad`, `fecha_hora`, `fecha`) VALUES
(5, 12, 17, '2014-12-30 14:31:46', '2014-12-23'),
(6, 12, 7, '2014-12-30 14:32:52', '2014-12-23'),
(7, 12, 119, '2015-01-02 13:48:03', '2014-12-23'),
(10, 12, 105, '2015-01-14 16:39:40', '2014-12-27'),
(9, 12, 63, '2015-01-02 13:53:47', '2014-12-29'),
(11, 12, 161, '2015-01-14 22:07:57', '2015-01-02'),
(12, 12, 105, '2015-01-14 22:09:31', '2014-12-30'),
(13, 12, 140, '2015-01-14 22:10:19', '2015-01-03'),
(14, 12, 84, '2015-01-14 22:11:15', '2015-01-06'),
(16, 12, 133, '2015-01-14 22:13:46', '2015-01-09'),
(17, 12, 182, '2015-01-14 22:15:24', '2015-01-10'),
(18, 13, 30, '2015-01-15 21:26:51', '2015-01-15'),
(19, 19, 6, '2015-01-15 21:28:06', '2015-01-15'),
(20, 16, 6, '2015-01-15 21:29:09', '2015-01-15'),
(21, 14, 21, '2015-01-19 18:14:15', '2014-12-23'),
(24, 12, 147, '2015-01-27 21:57:30', '2015-01-16'),
(25, 12, 15, '2015-01-27 23:00:45', '2015-01-20'),
(26, 12, 180, '2015-01-27 23:02:09', '2015-01-21'),
(27, 12, 195, '2015-01-27 23:03:08', '2015-01-22'),
(28, 12, 165, '2015-01-27 23:04:28', '2015-01-23'),
(29, 12, 21, '2015-01-27 23:07:14', '2015-01-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_producto`
--

CREATE TABLE IF NOT EXISTS `inventario_producto` (
`idinventario_producto` bigint(20) NOT NULL,
  `idproducto` int(4) NOT NULL,
  `idbodega` int(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `inventario_producto`
--

INSERT INTO `inventario_producto` (`idinventario_producto`, `idproducto`, `idbodega`) VALUES
(3, 16, 7),
(4, 16, 8),
(5, 16, 9),
(6, 16, 10),
(7, 16, 11),
(8, 16, 12),
(9, 16, 13),
(10, 16, 14),
(11, 16, 15),
(12, 16, 16),
(13, 15, 16),
(14, 10, 16),
(15, 13, 16),
(16, 14, 16),
(18, 11, 16),
(19, 18, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientoaja`
--

CREATE TABLE IF NOT EXISTS `movimientoaja` (
`idmovimientocaja` bigint(20) NOT NULL,
  `tipomovimiento` int(2) NOT NULL,
  `numerodocumento` bigint(20) NOT NULL,
  `idclienteproveedor` bigint(20) NOT NULL,
  `concepto` varchar(60) NOT NULL,
  `valor` bigint(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10010211216 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `idmunicipio` int(4) NOT NULL,
  `nombreMunicipio` varchar(60) NOT NULL,
  `departamento_iddepartamento` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idmunicipio`, `nombreMunicipio`, `departamento_iddepartamento`) VALUES
(1, 'EL ENCANTO', 1),
(2, 'LA CHORRERA', 1),
(3, 'LA PEDRERA', 1),
(4, 'LA VICTORIA', 1),
(5, 'LETICIA', 1),
(6, 'MIRITI', 1),
(7, 'PUERTO ALEGRIA', 1),
(8, 'PUERTO ARICA', 1),
(9, 'PUERTO NARIÑO', 1),
(10, 'PUERTO SANTANDER', 1),
(11, 'TURAPACA', 1),
(12, 'ABEJORRAL', 2),
(13, 'ABRIAQUI', 2),
(14, 'ALEJANDRIA', 2),
(15, 'AMAGA', 2),
(16, 'AMALFI', 2),
(17, 'ANDES', 2),
(18, 'ANGELOPOLIS', 2),
(19, 'ANGOSTURA', 2),
(20, 'ANORI', 2),
(21, 'ANTIOQUIA', 2),
(22, 'ANZA', 2),
(23, 'APARTADO', 2),
(24, 'ARBOLETES', 2),
(25, 'ARGELIA', 2),
(26, 'ARMENIA', 2),
(27, 'BARBOSA', 2),
(28, 'BELLO', 2),
(29, 'BELMIRA', 2),
(30, 'BETANIA', 2),
(31, 'BETULIA', 2),
(32, 'BOLIVAR', 2),
(33, 'BRICEÑO', 2),
(34, 'BURITICA', 2),
(35, 'CACERES', 2),
(36, 'CAICEDO', 2),
(37, 'CALDAS', 2),
(38, 'CAMPAMENTO', 2),
(39, 'CANASGORDAS', 2),
(40, 'CARACOLI', 2),
(41, 'CARAMANTA', 2),
(42, 'CAREPA', 2),
(43, 'CARMEN DE VIBORAL', 2),
(44, 'CAROLINA DEL PRINCIPE', 2),
(45, 'CAUCASIA', 2),
(46, 'CHIGORODO', 2),
(47, 'CISNEROS', 2),
(48, 'COCORNA', 2),
(49, 'CONCEPCION', 2),
(50, 'CONCORDIA', 2),
(51, 'COPACABANA', 2),
(52, 'DABEIBA', 2),
(53, 'DONMATIAS', 2),
(54, 'EBEJICO', 2),
(55, 'EL BAGRE', 2),
(56, 'EL PENOL', 2),
(57, 'EL RETIRO', 2),
(58, 'ENTRERRIOS', 2),
(59, 'ENVIGADO', 2),
(60, 'FREDONIA', 2),
(61, 'FRONTINO', 2),
(62, 'GIRALDO', 2),
(63, 'GIRARDOTA', 2),
(64, 'GOMEZ PLATA', 2),
(65, 'GRANADA', 2),
(66, 'GUADALUPE', 2),
(67, 'GUARNE', 2),
(68, 'GUATAQUE', 2),
(69, 'HELICONIA', 2),
(70, 'HISPANIA', 2),
(71, 'ITAGUI', 2),
(72, 'ITUANGO', 2),
(73, 'JARDIN', 2),
(74, 'JERICO', 2),
(75, 'LA CEJA', 2),
(76, 'LA ESTRELLA', 2),
(77, 'LA PINTADA', 2),
(78, 'LA UNION', 2),
(79, 'LIBORINA', 2),
(80, 'MACEO', 2),
(81, 'MARINILLA', 2),
(82, 'MEDELLIN', 2),
(83, 'MONTEBELLO', 2),
(84, 'MURINDO', 2),
(85, 'MUTATA', 2),
(86, 'NARINO', 2),
(87, 'NECHI', 2),
(88, 'NECOCLI', 2),
(89, 'OLAYA', 2),
(90, 'PEQUE', 2),
(91, 'PUEBLORRICO', 2),
(92, 'PUERTO BERRIO', 2),
(93, 'PUERTO NARE', 2),
(94, 'PUERTO TRIUNFO', 2),
(95, 'REMEDIOS', 2),
(96, 'RIONEGRO', 2),
(97, 'SABANALARGA', 2),
(98, 'SABANETA', 2),
(99, 'SALGAR', 2),
(100, 'SAN ANDRES DE CUERQUIA', 2),
(101, 'SAN CARLOS', 2),
(102, 'SAN FRANCISCO', 2),
(103, 'SAN JERONIMO', 2),
(104, 'SAN JOSE DE LA MONTAÑA', 2),
(105, 'SAN JUAN DE URABA', 2),
(106, 'SAN LUIS', 2),
(107, 'SAN PEDRO DE LOS MILAGROS', 2),
(108, 'SAN PEDRO DE URABA', 2),
(109, 'SAN RAFAEL', 2),
(110, 'SAN ROQUE', 2),
(111, 'SAN VICENTE', 2),
(112, 'SANTA BARBARA', 2),
(113, 'SANTA ROSA DE OSOS', 2),
(114, 'SANTO DOMINGO', 2),
(115, 'SANTUARIO', 2),
(116, 'SEGOVIA', 2),
(117, 'SONSON', 2),
(118, 'SOPETRAN', 2),
(119, 'TAMESIS', 2),
(120, 'TARAZA', 2),
(121, 'TARSO', 2),
(122, 'TITIRIBI', 2),
(123, 'TOLEDO', 2),
(124, 'TURBO', 2),
(125, 'URAMITA', 2),
(126, 'URRAO', 2),
(127, 'VALDIVIA', 2),
(128, 'VALPARAISO', 2),
(129, 'VEGACHI', 2),
(130, 'VENECIA', 2),
(131, 'VIGIA DEL FUERTE', 2),
(132, 'YALI', 2),
(133, 'YARUMAL', 2),
(134, 'YOLOMBO', 2),
(135, 'YONDO', 2),
(136, 'ZARAGOZA', 2),
(137, 'ARAUCA', 3),
(138, 'ARAUQUITA', 3),
(139, 'CRAVO NORTE', 3),
(140, 'FORTUL', 3),
(141, 'PUERTO RONDON', 3),
(142, 'SARAVENA', 3),
(143, 'TAME', 3),
(144, 'BARANOA', 4),
(145, 'BARRANQUILLA', 4),
(146, 'CAMPO DE LA CRUZ', 4),
(147, 'CANDELARIA', 4),
(148, 'GALAPA', 4),
(149, 'JUAN DE ACOSTA', 4),
(150, 'LURUACO', 4),
(151, 'MALAMBO', 4),
(152, 'MANATI', 4),
(153, 'PALMAR DE VARELA', 4),
(154, 'PIOJO', 4),
(155, 'POLO NUEVO', 4),
(156, 'PONEDERA', 4),
(157, 'PUERTO COLOMBIA', 4),
(158, 'REPELON', 4),
(159, 'SABANAGRANDE', 4),
(160, 'SABANALARGA', 4),
(161, 'SANTA LUCIA', 4),
(162, 'SANTO TOMAS', 4),
(163, 'SOLEDAD', 4),
(164, 'SUAN', 4),
(165, 'TUBARA', 4),
(166, 'USIACURI', 4),
(167, 'ACHI', 5),
(168, 'ALTOS DEL ROSARIO', 5),
(169, 'ARENAL', 5),
(170, 'ARJONA', 5),
(171, 'ARROYOHONDO', 5),
(172, 'BARRANCO DE LOBA', 5),
(173, 'BRAZUELO DE PAPAYAL', 5),
(174, 'CALAMAR', 5),
(175, 'CANTAGALLO', 5),
(176, 'CARTAGENA DE INDIAS', 5),
(177, 'CICUCO', 5),
(178, 'CLEMENCIA', 5),
(179, 'CORDOBA', 5),
(180, 'EL CARMEN DE BOLIVAR', 5),
(181, 'EL GUAMO', 5),
(182, 'EL PENION', 5),
(183, 'HATILLO DE LOBA', 5),
(184, 'MAGANGUE', 5),
(185, 'MAHATES', 5),
(186, 'MARGARITA', 5),
(187, 'MARIA LA BAJA', 5),
(188, 'MONTECRISTO', 5),
(189, 'MORALES', 5),
(190, 'MORALES', 5),
(191, 'NOROSI', 5),
(192, 'PINILLOS', 5),
(193, 'REGIDOR', 5),
(194, 'RIO VIEJO', 5),
(195, 'SAN CRISTOBAL', 5),
(196, 'SAN ESTANISLAO', 5),
(197, 'SAN FERNANDO', 5),
(198, 'SAN JACINTO', 5),
(199, 'SAN JACINTO DEL CAUCA', 5),
(200, 'SAN JUAN DE NEPOMUCENO', 5),
(201, 'SAN MARTIN DE LOBA', 5),
(202, 'SAN PABLO', 5),
(203, 'SAN PABLO NORTE', 5),
(204, 'SANTA CATALINA', 5),
(205, 'SANTA CRUZ DE MOMPOX', 5),
(206, 'SANTA ROSA', 5),
(207, 'SANTA ROSA DEL SUR', 5),
(208, 'SIMITI', 5),
(209, 'SOPLAVIENTO', 5),
(210, 'TALAIGUA NUEVO', 5),
(211, 'TUQUISIO', 5),
(212, 'TURBACO', 5),
(213, 'TURBANA', 5),
(214, 'VILLANUEVA', 5),
(215, 'ZAMBRANO', 5),
(216, 'AQUITANIA', 6),
(217, 'ARCABUCO', 6),
(218, 'BELÉN', 6),
(219, 'BERBEO', 6),
(220, 'BETÉITIVA', 6),
(221, 'BOAVITA', 6),
(222, 'BOYACÁ', 6),
(223, 'BRICEÑO', 6),
(224, 'BUENAVISTA', 6),
(225, 'BUSBANZÁ', 6),
(226, 'CALDAS', 6),
(227, 'CAMPO HERMOSO', 6),
(228, 'CERINZA', 6),
(229, 'CHINAVITA', 6),
(230, 'CHIQUINQUIRÁ', 6),
(231, 'CHÍQUIZA', 6),
(232, 'CHISCAS', 6),
(233, 'CHITA', 6),
(234, 'CHITARAQUE', 6),
(235, 'CHIVATÁ', 6),
(236, 'CIÉNEGA', 6),
(237, 'CÓMBITA', 6),
(238, 'COPER', 6),
(239, 'CORRALES', 6),
(240, 'COVARACHÍA', 6),
(241, 'CUBARA', 6),
(242, 'CUCAITA', 6),
(243, 'CUITIVA', 6),
(244, 'DUITAMA', 6),
(245, 'EL COCUY', 6),
(246, 'EL ESPINO', 6),
(247, 'FIRAVITOBA', 6),
(248, 'FLORESTA', 6),
(249, 'GACHANTIVÁ', 6),
(250, 'GÁMEZA', 6),
(251, 'GARAGOA', 6),
(252, 'GUACAMAYAS', 6),
(253, 'GÜICÁN', 6),
(254, 'IZA', 6),
(255, 'JENESANO', 6),
(256, 'JERICÓ', 6),
(257, 'LA UVITA', 6),
(258, 'LA VICTORIA', 6),
(259, 'LABRANZA GRANDE', 6),
(260, 'MACANAL', 6),
(261, 'MARIPÍ', 6),
(262, 'MIRAFLORES', 6),
(263, 'MONGUA', 6),
(264, 'MONGUÍ', 6),
(265, 'MONIQUIRÁ', 6),
(266, 'MOTAVITA', 6),
(267, 'MUZO', 6),
(268, 'NOBSA', 6),
(269, 'NUEVO COLÓN', 6),
(270, 'OICATÁ', 6),
(271, 'OTANCHE', 6),
(272, 'PACHAVITA', 6),
(273, 'PÁEZ', 6),
(274, 'PAIPA', 6),
(275, 'PAJARITO', 6),
(276, 'PANQUEBA', 6),
(277, 'PAUNA', 6),
(278, 'PAYA', 6),
(279, 'PAZ DE RÍO', 6),
(280, 'PESCA', 6),
(281, 'PISBA', 6),
(282, 'PUERTO BOYACA', 6),
(283, 'QUÍPAMA', 6),
(284, 'RAMIRIQUÍ', 6),
(285, 'RÁQUIRA', 6),
(286, 'RONDÓN', 6),
(287, 'SABOYÁ', 6),
(288, 'SÁCHICA', 6),
(289, 'SAMACÁ', 6),
(290, 'SAN EDUARDO', 6),
(291, 'SAN JOSÉ DE PARE', 6),
(292, 'SAN LUÍS DE GACENO', 6),
(293, 'SAN MATEO', 6),
(294, 'SAN MIGUEL DE SEMA', 6),
(295, 'SAN PABLO DE BORBUR', 6),
(296, 'SANTA MARÍA', 6),
(297, 'SANTA ROSA DE VITERBO', 6),
(298, 'SANTA SOFÍA', 6),
(299, 'SANTANA', 6),
(300, 'SATIVANORTE', 6),
(301, 'SATIVASUR', 6),
(302, 'SIACHOQUE', 6),
(303, 'SOATÁ', 6),
(304, 'SOCHA', 6),
(305, 'SOCOTÁ', 6),
(306, 'SOGAMOSO', 6),
(307, 'SORA', 6),
(308, 'SORACÁ', 6),
(309, 'SOTAQUIRÁ', 6),
(310, 'SUSACÓN', 6),
(311, 'SUTARMACHÁN', 6),
(312, 'TASCO', 6),
(313, 'TIBANÁ', 6),
(314, 'TIBASOSA', 6),
(315, 'TINJACÁ', 6),
(316, 'TIPACOQUE', 6),
(317, 'TOCA', 6),
(318, 'TOGÜÍ', 6),
(319, 'TÓPAGA', 6),
(320, 'TOTA', 6),
(321, 'TUNJA', 6),
(322, 'TUNUNGUÁ', 6),
(323, 'TURMEQUÉ', 6),
(324, 'TUTA', 6),
(325, 'TUTAZÁ', 6),
(326, 'UMBITA', 6),
(327, 'VENTA QUEMADA', 6),
(328, 'VILLA DE LEYVA', 6),
(329, 'VIRACACHÁ', 6),
(330, 'ZETAQUIRA', 6),
(331, 'AGUADAS', 7),
(332, 'ANSERMA', 7),
(333, 'ARANZAZU', 7),
(334, 'BELALCAZAR', 7),
(335, 'CHINCHINÁ', 7),
(336, 'FILADELFIA', 7),
(337, 'LA DORADA', 7),
(338, 'LA MERCED', 7),
(339, 'MANIZALES', 7),
(340, 'MANZANARES', 7),
(341, 'MARMATO', 7),
(342, 'MARQUETALIA', 7),
(343, 'MARULANDA', 7),
(344, 'NEIRA', 7),
(345, 'NORCASIA', 7),
(346, 'PACORA', 7),
(347, 'PALESTINA', 7),
(348, 'PENSILVANIA', 7),
(349, 'RIOSUCIO', 7),
(350, 'RISARALDA', 7),
(351, 'SALAMINA', 7),
(352, 'SAMANA', 7),
(353, 'SAN JOSE', 7),
(354, 'SUPÍA', 7),
(355, 'VICTORIA', 7),
(356, 'VILLAMARÍA', 7),
(357, 'VITERBO', 7),
(358, 'ALBANIA', 8),
(359, 'BELÉN ANDAQUIES', 8),
(360, 'CARTAGENA DEL CHAIRA', 8),
(361, 'CURILLO', 8),
(362, 'EL DONCELLO', 8),
(363, 'EL PAUJIL', 8),
(364, 'FLORENCIA', 8),
(365, 'LA MONTAÑITA', 8),
(366, 'MILÁN', 8),
(367, 'MORELIA', 8),
(368, 'PUERTO RICO', 8),
(369, 'SAN  VICENTE DEL CAGUAN', 8),
(370, 'SAN JOSÉ DE FRAGUA', 8),
(371, 'SOLANO', 8),
(372, 'SOLITA', 8),
(373, 'VALPARAÍSO', 8),
(374, 'AGUAZUL', 9),
(375, 'CHAMEZA', 9),
(376, 'HATO COROZAL', 9),
(377, 'LA SALINA', 9),
(378, 'MANÍ', 9),
(379, 'MONTERREY', 9),
(380, 'NUNCHIA', 9),
(381, 'OROCUE', 9),
(382, 'PAZ DE ARIPORO', 9),
(383, 'PORE', 9),
(384, 'RECETOR', 9),
(385, 'SABANA LARGA', 9),
(386, 'SACAMA', 9),
(387, 'SAN LUIS DE PALENQUE', 9),
(388, 'TAMARA', 9),
(389, 'TAURAMENA', 9),
(390, 'TRINIDAD', 9),
(391, 'VILLANUEVA', 9),
(392, 'YOPAL', 9),
(393, 'ALMAGUER', 10),
(394, 'ARGELIA', 10),
(395, 'BALBOA', 10),
(396, 'BOLÍVAR', 10),
(397, 'BUENOS AIRES', 10),
(398, 'CAJIBIO', 10),
(399, 'CALDONO', 10),
(400, 'CALOTO', 10),
(401, 'CORINTO', 10),
(402, 'EL TAMBO', 10),
(403, 'FLORENCIA', 10),
(404, 'GUAPI', 10),
(405, 'INZA', 10),
(406, 'JAMBALÓ', 10),
(407, 'LA SIERRA', 10),
(408, 'LA VEGA', 10),
(409, 'LÓPEZ', 10),
(410, 'MERCADERES', 10),
(411, 'MIRANDA', 10),
(412, 'MORALES', 10),
(413, 'PADILLA', 10),
(414, 'PÁEZ', 10),
(415, 'PATIA (EL BORDO)', 10),
(416, 'PIAMONTE', 10),
(417, 'PIENDAMO', 10),
(418, 'POPAYÁN', 10),
(419, 'PUERTO TEJADA', 10),
(420, 'PURACE', 10),
(421, 'ROSAS', 10),
(422, 'SAN SEBASTIÁN', 10),
(423, 'SANTA ROSA', 10),
(424, 'SANTANDER DE QUILICHAO', 10),
(425, 'SILVIA', 10),
(426, 'SOTARA', 10),
(427, 'SUÁREZ', 10),
(428, 'SUCRE', 10),
(429, 'TIMBÍO', 10),
(430, 'TIMBIQUÍ', 10),
(431, 'TORIBIO', 10),
(432, 'TOTORO', 10),
(433, 'VILLA RICA', 10),
(434, 'AGUACHICA', 11),
(435, 'AGUSTÍN CODAZZI', 11),
(436, 'ASTREA', 11),
(437, 'BECERRIL', 11),
(438, 'BOSCONIA', 11),
(439, 'CHIMICHAGUA', 11),
(440, 'CHIRIGUANÁ', 11),
(441, 'CURUMANÍ', 11),
(442, 'EL COPEY', 11),
(443, 'EL PASO', 11),
(444, 'GAMARRA', 11),
(445, 'GONZÁLEZ', 11),
(446, 'LA GLORIA', 11),
(447, 'LA JAGUA IBIRICO', 11),
(448, 'MANAURE BALCÓN DEL CESAR', 11),
(449, 'PAILITAS', 11),
(450, 'PELAYA', 11),
(451, 'PUEBLO BELLO', 11),
(452, 'RÍO DE ORO', 11),
(453, 'ROBLES (LA PAZ)', 11),
(454, 'SAN ALBERTO', 11),
(455, 'SAN DIEGO', 11),
(456, 'SAN MARTÍN', 11),
(457, 'TAMALAMEQUE', 11),
(458, 'VALLEDUPAR', 11),
(459, 'ACANDI', 12),
(460, 'ALTO BAUDO (PIE DE PATO)', 12),
(461, 'ATRATO', 12),
(462, 'BAGADO', 12),
(463, 'BAHIA SOLANO (MUTIS)', 12),
(464, 'BAJO BAUDO (PIZARRO)', 12),
(465, 'BOJAYA (BELLAVISTA)', 12),
(466, 'CANTON DE SAN PABLO', 12),
(467, 'CARMEN DEL DARIEN', 12),
(468, 'CERTEGUI', 12),
(469, 'CONDOTO', 12),
(470, 'EL CARMEN', 12),
(471, 'ISTMINA', 12),
(472, 'JURADO', 12),
(473, 'LITORAL DEL SAN JUAN', 12),
(474, 'LLORO', 12),
(475, 'MEDIO ATRATO', 12),
(476, 'MEDIO BAUDO (BOCA DE PEPE)', 12),
(477, 'MEDIO SAN JUAN', 12),
(478, 'NOVITA', 12),
(479, 'NUQUI', 12),
(480, 'QUIBDO', 12),
(481, 'RIO IRO', 12),
(482, 'RIO QUITO', 12),
(483, 'RIOSUCIO', 12),
(484, 'SAN JOSE DEL PALMAR', 12),
(485, 'SIPI', 12),
(486, 'TADO', 12),
(487, 'UNGUIA', 12),
(488, 'UNIÓN PANAMERICANA', 12),
(489, 'AYAPEL', 13),
(490, 'BUENAVISTA', 13),
(491, 'CANALETE', 13),
(492, 'CERETÉ', 13),
(493, 'CHIMA', 13),
(494, 'CHINÚ', 13),
(495, 'CIENAGA DE ORO', 13),
(496, 'COTORRA', 13),
(497, 'LA APARTADA', 13),
(498, 'LORICA', 13),
(499, 'LOS CÓRDOBAS', 13),
(500, 'MOMIL', 13),
(501, 'MONTELÍBANO', 13),
(502, 'MONTERÍA', 13),
(503, 'MOÑITOS', 13),
(504, 'PLANETA RICA', 13),
(505, 'PUEBLO NUEVO', 13),
(506, 'PUERTO ESCONDIDO', 13),
(507, 'PUERTO LIBERTADOR', 13),
(508, 'PURÍSIMA', 13),
(509, 'SAHAGÚN', 13),
(510, 'SAN ANDRÉS SOTAVENTO', 13),
(511, 'SAN ANTERO', 13),
(512, 'SAN BERNARDO VIENTO', 13),
(513, 'SAN CARLOS', 13),
(514, 'SAN PELAYO', 13),
(515, 'TIERRALTA', 13),
(516, 'VALENCIA', 13),
(517, 'AGUA DE DIOS', 14),
(518, 'ALBAN', 14),
(519, 'ANAPOIMA', 14),
(520, 'ANOLAIMA', 14),
(521, 'ARBELAEZ', 14),
(522, 'BELTRÁN', 14),
(523, 'BITUIMA', 14),
(524, 'BOGOTÁ DC', 14),
(525, 'BOJACÁ', 14),
(526, 'CABRERA', 14),
(527, 'CACHIPAY', 14),
(528, 'CAJICÁ', 14),
(529, 'CAPARRAPÍ', 14),
(530, 'CAQUEZA', 14),
(531, 'CARMEN DE CARUPA', 14),
(532, 'CHAGUANÍ', 14),
(533, 'CHIA', 14),
(534, 'CHIPAQUE', 14),
(535, 'CHOACHÍ', 14),
(536, 'CHOCONTÁ', 14),
(537, 'COGUA', 14),
(538, 'COTA', 14),
(539, 'CUCUNUBÁ', 14),
(540, 'EL COLEGIO', 14),
(541, 'EL PEÑÓN', 14),
(542, 'EL ROSAL1', 14),
(543, 'FACATATIVA', 14),
(544, 'FÓMEQUE', 14),
(545, 'FOSCA', 14),
(546, 'FUNZA', 14),
(547, 'FÚQUENE', 14),
(548, 'FUSAGASUGA', 14),
(549, 'GACHALÁ', 14),
(550, 'GACHANCIPÁ', 14),
(551, 'GACHETA', 14),
(552, 'GAMA', 14),
(553, 'GIRARDOT', 14),
(554, 'GRANADA2', 14),
(555, 'GUACHETÁ', 14),
(556, 'GUADUAS', 14),
(557, 'GUASCA', 14),
(558, 'GUATAQUÍ', 14),
(559, 'GUATAVITA', 14),
(560, 'GUAYABAL DE SIQUIMA', 14),
(561, 'GUAYABETAL', 14),
(562, 'GUTIÉRREZ', 14),
(563, 'JERUSALÉN', 14),
(564, 'JUNÍN', 14),
(565, 'LA CALERA', 14),
(566, 'LA MESA', 14),
(567, 'LA PALMA', 14),
(568, 'LA PEÑA', 14),
(569, 'LA VEGA', 14),
(570, 'LENGUAZAQUE', 14),
(571, 'MACHETÁ', 14),
(572, 'MADRID', 14),
(573, 'MANTA', 14),
(574, 'MEDINA', 14),
(575, 'MOSQUERA', 14),
(576, 'NARIÑO', 14),
(577, 'NEMOCÓN', 14),
(578, 'NILO', 14),
(579, 'NIMAIMA', 14),
(580, 'NOCAIMA', 14),
(581, 'OSPINA PÉREZ', 14),
(582, 'PACHO', 14),
(583, 'PAIME', 14),
(584, 'PANDI', 14),
(585, 'PARATEBUENO', 14),
(586, 'PASCA', 14),
(587, 'PUERTO SALGAR', 14),
(588, 'PULÍ', 14),
(589, 'QUEBRADANEGRA', 14),
(590, 'QUETAME', 14),
(591, 'QUIPILE', 14),
(592, 'RAFAEL REYES', 14),
(593, 'RICAURTE', 14),
(594, 'SAN  ANTONIO DEL  TEQUENDAMA', 14),
(595, 'SAN BERNARDO', 14),
(596, 'SAN CAYETANO', 14),
(597, 'SAN FRANCISCO', 14),
(598, 'SAN JUAN DE RIOSECO', 14),
(599, 'SASAIMA', 14),
(600, 'SESQUILÉ', 14),
(601, 'SIBATÉ', 14),
(602, 'SILVANIA', 14),
(603, 'SIMIJACA', 14),
(604, 'SOACHA', 14),
(605, 'SOPO', 14),
(606, 'SUBACHOQUE', 14),
(607, 'SUESCA', 14),
(608, 'SUPATÁ', 14),
(609, 'SUSA', 14),
(610, 'SUTATAUSA', 14),
(611, 'TABIO', 14),
(612, 'TAUSA', 14),
(613, 'TENA', 14),
(614, 'TENJO', 14),
(615, 'TIBACUY', 14),
(616, 'TIBIRITA', 14),
(617, 'TOCAIMA', 14),
(618, 'TOCANCIPÁ', 14),
(619, 'TOPAIPÍ', 14),
(620, 'UBALÁ', 14),
(621, 'UBAQUE', 14),
(622, 'UBATÉ', 14),
(623, 'UNE', 14),
(624, 'UTICA', 14),
(625, 'VERGARA', 14),
(626, 'VIANI', 14),
(627, 'VILLA GOMEZ', 14),
(628, 'VILLA PINZÓN', 14),
(629, 'VILLETA', 14),
(630, 'VIOTA', 14),
(631, 'YACOPÍ', 14),
(632, 'ZIPACÓN', 14),
(633, 'ZIPAQUIRÁ', 14),
(634, 'BARRANCO MINAS', 15),
(635, 'CACAHUAL', 15),
(636, 'INÍRIDA', 15),
(637, 'LA GUADALUPE', 15),
(638, 'MAPIRIPANA', 15),
(639, 'MORICHAL', 15),
(640, 'PANA PANA', 15),
(641, 'PUERTO COLOMBIA', 15),
(642, 'SAN FELIPE', 15),
(643, 'CALAMAR', 16),
(644, 'EL RETORNO', 16),
(645, 'MIRAFLOREZ', 16),
(646, 'SAN JOSÉ DEL GUAVIARE', 16),
(647, 'ACEVEDO', 17),
(648, 'AGRADO', 17),
(649, 'AIPE', 17),
(650, 'ALGECIRAS', 17),
(651, 'ALTAMIRA', 17),
(652, 'BARAYA', 17),
(653, 'CAMPO ALEGRE', 17),
(654, 'COLOMBIA', 17),
(655, 'ELIAS', 17),
(656, 'GARZÓN', 17),
(657, 'GIGANTE', 17),
(658, 'GUADALUPE', 17),
(659, 'HOBO', 17),
(660, 'IQUIRA', 17),
(661, 'ISNOS', 17),
(662, 'LA ARGENTINA', 17),
(663, 'LA PLATA', 17),
(664, 'NATAGA', 17),
(665, 'NEIVA', 17),
(666, 'OPORAPA', 17),
(667, 'PAICOL', 17),
(668, 'PALERMO', 17),
(669, 'PALESTINA', 17),
(670, 'PITAL', 17),
(671, 'PITALITO', 17),
(672, 'RIVERA', 17),
(673, 'SALADO BLANCO', 17),
(674, 'SAN AGUSTÍN', 17),
(675, 'SANTA MARIA', 17),
(676, 'SUAZA', 17),
(677, 'TARQUI', 17),
(678, 'TELLO', 17),
(679, 'TERUEL', 17),
(680, 'TESALIA', 17),
(681, 'TIMANA', 17),
(682, 'VILLAVIEJA', 17),
(683, 'YAGUARA', 17),
(684, 'ALBANIA', 18),
(685, 'BARRANCAS', 18),
(686, 'DIBULLA', 18),
(687, 'DISTRACCIÓN', 18),
(688, 'EL MOLINO', 18),
(689, 'FONSECA', 18),
(690, 'HATO NUEVO', 18),
(691, 'LA JAGUA DEL PILAR', 18),
(692, 'MAICAO', 18),
(693, 'MANAURE', 18),
(694, 'RIOHACHA', 18),
(695, 'SAN JUAN DEL CESAR', 18),
(696, 'URIBIA', 18),
(697, 'URUMITA', 18),
(698, 'VILLANUEVA', 18),
(699, 'ALGARROBO', 19),
(700, 'ARACATACA', 19),
(701, 'ARIGUANI', 19),
(702, 'CERRO SAN ANTONIO', 19),
(703, 'CHIVOLO', 19),
(704, 'CIENAGA', 19),
(705, 'CONCORDIA', 19),
(706, 'EL BANCO', 19),
(707, 'EL PIÑON', 19),
(708, 'EL RETEN', 19),
(709, 'FUNDACION', 19),
(710, 'GUAMAL', 19),
(711, 'NUEVA GRANADA', 19),
(712, 'PEDRAZA', 19),
(713, 'PIJIÑO DEL CARMEN', 19),
(714, 'PIVIJAY', 19),
(715, 'PLATO', 19),
(716, 'PUEBLO VIEJO', 19),
(717, 'REMOLINO', 19),
(718, 'SABANAS DE SAN ANGEL', 19),
(719, 'SALAMINA', 19),
(720, 'SAN SEBASTIAN DE BUENAVISTA', 19),
(721, 'SAN ZENON', 19),
(722, 'SANTA ANA', 19),
(723, 'SANTA BARBARA DE PINTO', 19),
(724, 'SANTA MARTA', 19),
(725, 'SITIONUEVO', 19),
(726, 'TENERIFE', 19),
(727, 'ZAPAYAN', 19),
(728, 'ZONA BANANERA', 19),
(729, 'ACACIAS', 20),
(730, 'BARRANCA DE UPIA', 20),
(731, 'CABUYARO', 20),
(732, 'CASTILLA LA NUEVA', 20),
(733, 'CUBARRAL', 20),
(734, 'CUMARAL', 20),
(735, 'EL CALVARIO', 20),
(736, 'EL CASTILLO', 20),
(737, 'EL DORADO', 20),
(738, 'FUENTE DE ORO', 20),
(739, 'GRANADA', 20),
(740, 'GUAMAL', 20),
(741, 'LA MACARENA', 20),
(742, 'LA URIBE', 20),
(743, 'LEJANÍAS', 20),
(744, 'MAPIRIPÁN', 20),
(745, 'MESETAS', 20),
(746, 'PUERTO CONCORDIA', 20),
(747, 'PUERTO GAITÁN', 20),
(748, 'PUERTO LLERAS', 20),
(749, 'PUERTO LÓPEZ', 20),
(750, 'PUERTO RICO', 20),
(751, 'RESTREPO', 20),
(752, 'SAN  JUAN DE ARAMA', 20),
(753, 'SAN CARLOS GUAROA', 20),
(754, 'SAN JUANITO', 20),
(755, 'SAN MARTÍN', 20),
(756, 'VILLAVICENCIO', 20),
(757, 'VISTA HERMOSA', 20),
(758, 'ALBAN', 21),
(759, 'ALDAÑA', 21),
(760, 'ANCUYA', 21),
(761, 'ARBOLEDA', 21),
(762, 'BARBACOAS', 21),
(763, 'BELEN', 21),
(764, 'BUESACO', 21),
(765, 'CHACHAGUI', 21),
(766, 'COLON (GENOVA)', 21),
(767, 'CONSACA', 21),
(768, 'CONTADERO', 21),
(769, 'CORDOBA', 21),
(770, 'CUASPUD', 21),
(771, 'CUMBAL', 21),
(772, 'CUMBITARA', 21),
(773, 'EL CHARCO', 21),
(774, 'EL PEÑOL', 21),
(775, 'EL ROSARIO', 21),
(776, 'EL TABLÓN', 21),
(777, 'EL TAMBO', 21),
(778, 'FUNES', 21),
(779, 'GUACHUCAL', 21),
(780, 'GUAITARILLA', 21),
(781, 'GUALMATAN', 21),
(782, 'ILES', 21),
(783, 'IMUES', 21),
(784, 'IPIALES', 21),
(785, 'LA CRUZ', 21),
(786, 'LA FLORIDA', 21),
(787, 'LA LLANADA', 21),
(788, 'LA TOLA', 21),
(789, 'LA UNION', 21),
(790, 'LEIVA', 21),
(791, 'LINARES', 21),
(792, 'LOS ANDES', 21),
(793, 'MAGUI', 21),
(794, 'MALLAMA', 21),
(795, 'MOSQUEZA', 21),
(796, 'NARIÑO', 21),
(797, 'OLAYA HERRERA', 21),
(798, 'OSPINA', 21),
(799, 'PASTO', 21),
(800, 'PIZARRO', 21),
(801, 'POLICARPA', 21),
(802, 'POTOSI', 21),
(803, 'PROVIDENCIA', 21),
(804, 'PUERRES', 21),
(805, 'PUPIALES', 21),
(806, 'RICAURTE', 21),
(807, 'ROBERTO PAYAN', 21),
(808, 'SAMANIEGO', 21),
(809, 'SAN BERNARDO', 21),
(810, 'SAN LORENZO', 21),
(811, 'SAN PABLO', 21),
(812, 'SAN PEDRO DE CARTAGO', 21),
(813, 'SANDONA', 21),
(814, 'SANTA BARBARA', 21),
(815, 'SANTACRUZ', 21),
(816, 'SAPUYES', 21),
(817, 'TAMINANGO', 21),
(818, 'TANGUA', 21),
(819, 'TUMACO', 21),
(820, 'TUQUERRES', 21),
(821, 'YACUANQUER', 21),
(822, 'ABREGO', 22),
(823, 'ARBOLEDAS', 22),
(824, 'BOCHALEMA', 22),
(825, 'BUCARASICA', 22),
(826, 'CÁCHIRA', 22),
(827, 'CÁCOTA', 22),
(828, 'CHINÁCOTA', 22),
(829, 'CHITAGÁ', 22),
(830, 'CONVENCIÓN', 22),
(831, 'CÚCUTA', 22),
(832, 'CUCUTILLA', 22),
(833, 'DURANIA', 22),
(834, 'EL CARMEN', 22),
(835, 'EL TARRA', 22),
(836, 'EL ZULIA', 22),
(837, 'GRAMALOTE', 22),
(838, 'HACARI', 22),
(839, 'HERRÁN', 22),
(840, 'LA ESPERANZA', 22),
(841, 'LA PLAYA', 22),
(842, 'LABATECA', 22),
(843, 'LOS PATIOS', 22),
(844, 'LOURDES', 22),
(845, 'MUTISCUA', 22),
(846, 'OCAÑA', 22),
(847, 'PAMPLONA', 22),
(848, 'PAMPLONITA', 22),
(849, 'PUERTO SANTANDER', 22),
(850, 'RAGONVALIA', 22),
(851, 'SALAZAR', 22),
(852, 'SAN CALIXTO', 22),
(853, 'SAN CAYETANO', 22),
(854, 'SANTIAGO', 22),
(855, 'SARDINATA', 22),
(856, 'SILOS', 22),
(857, 'TEORAMA', 22),
(858, 'TIBÚ', 22),
(859, 'TOLEDO', 22),
(860, 'VILLA CARO', 22),
(861, 'VILLA DEL ROSARIO', 22),
(862, 'COLÓN', 23),
(863, 'MOCOA', 23),
(864, 'ORITO', 23),
(865, 'PUERTO ASÍS', 23),
(866, 'PUERTO CAYCEDO', 23),
(867, 'PUERTO GUZMÁN', 23),
(868, 'PUERTO LEGUÍZAMO', 23),
(869, 'SAN FRANCISCO', 23),
(870, 'SAN MIGUEL', 23),
(871, 'SANTIAGO', 23),
(872, 'SIBUNDOY', 23),
(873, 'VALLE DEL GUAMUEZ', 23),
(874, 'VILLAGARZÓN', 23),
(875, 'ARMENIA', 24),
(876, 'BUENAVISTA', 24),
(877, 'CALARCÁ', 24),
(878, 'CIRCASIA', 24),
(879, 'CÓRDOBA', 24),
(880, 'FILANDIA', 24),
(881, 'GÉNOVA', 24),
(882, 'LA TEBAIDA', 24),
(883, 'MONTENEGRO', 24),
(884, 'PIJAO', 24),
(885, 'QUIMBAYA', 24),
(886, 'SALENTO', 24),
(887, 'APIA', 25),
(888, 'BALBOA', 25),
(889, 'BELÉN DE UMBRÍA', 25),
(890, 'DOS QUEBRADAS', 25),
(891, 'GUATICA', 25),
(892, 'LA CELIA', 25),
(893, 'LA VIRGINIA', 25),
(894, 'MARSELLA', 25),
(895, 'MISTRATO', 25),
(896, 'PEREIRA', 25),
(897, 'PUEBLO RICO', 25),
(898, 'QUINCHÍA', 25),
(899, 'SANTA ROSA DE CABAL', 25),
(900, 'SANTUARIO', 25),
(901, 'PROVIDENCIA', 26),
(902, 'SAN ANDRES', 26),
(903, 'SANTA CATALINA', 26),
(904, 'AGUADA', 27),
(905, 'ALBANIA', 27),
(906, 'ARATOCA', 27),
(907, 'BARBOSA', 27),
(908, 'BARICHARA', 27),
(909, 'BARRANCABERMEJA', 27),
(910, 'BETULIA', 27),
(911, 'BOLÍVAR', 27),
(912, 'BUCARAMANGA', 27),
(913, 'CABRERA', 27),
(914, 'CALIFORNIA', 27),
(915, 'CAPITANEJO', 27),
(916, 'CARCASI', 27),
(917, 'CEPITA', 27),
(918, 'CERRITO', 27),
(919, 'CHARALÁ', 27),
(920, 'CHARTA', 27),
(921, 'CHIMA', 27),
(922, 'CHIPATÁ', 27),
(923, 'CIMITARRA', 27),
(924, 'CONCEPCIÓN', 27),
(925, 'CONFINES', 27),
(926, 'CONTRATACIÓN', 27),
(927, 'COROMORO', 27),
(928, 'CURITÍ', 27),
(929, 'EL CARMEN', 27),
(930, 'EL GUACAMAYO', 27),
(931, 'EL PEÑÓN', 27),
(932, 'EL PLAYÓN', 27),
(933, 'ENCINO', 27),
(934, 'ENCISO', 27),
(935, 'FLORIÁN', 27),
(936, 'FLORIDABLANCA', 27),
(937, 'GALÁN', 27),
(938, 'GAMBITA', 27),
(939, 'GIRÓN', 27),
(940, 'GUACA', 27),
(941, 'GUADALUPE', 27),
(942, 'GUAPOTA', 27),
(943, 'GUAVATÁ', 27),
(944, 'GUEPSA', 27),
(945, 'HATO', 27),
(946, 'JESÚS MARIA', 27),
(947, 'JORDÁN', 27),
(948, 'LA BELLEZA', 27),
(949, 'LA PAZ', 27),
(950, 'LANDAZURI', 27),
(951, 'LEBRIJA', 27),
(952, 'LOS SANTOS', 27),
(953, 'MACARAVITA', 27),
(954, 'MÁLAGA', 27),
(955, 'MATANZA', 27),
(956, 'MOGOTES', 27),
(957, 'MOLAGAVITA', 27),
(958, 'OCAMONTE', 27),
(959, 'OIBA', 27),
(960, 'ONZAGA', 27),
(961, 'PALMAR', 27),
(962, 'PALMAS DEL SOCORRO', 27),
(963, 'PÁRAMO', 27),
(964, 'PIEDECUESTA', 27),
(965, 'PINCHOTE', 27),
(966, 'PUENTE NACIONAL', 27),
(967, 'PUERTO PARRA', 27),
(968, 'PUERTO WILCHES', 27),
(969, 'RIONEGRO', 27),
(970, 'SABANA DE TORRES', 27),
(971, 'SAN ANDRÉS', 27),
(972, 'SAN BENITO', 27),
(973, 'SAN GIL', 27),
(974, 'SAN JOAQUÍN', 27),
(975, 'SAN JOSÉ DE MIRANDA', 27),
(976, 'SAN MIGUEL', 27),
(977, 'SAN VICENTE DE CHUCURÍ', 27),
(978, 'SANTA BÁRBARA', 27),
(979, 'SANTA HELENA', 27),
(980, 'SIMACOTA', 27),
(981, 'SOCORRO', 27),
(982, 'SUAITA', 27),
(983, 'SUCRE', 27),
(984, 'SURATA', 27),
(985, 'TONA', 27),
(986, 'VALLE SAN JOSÉ', 27),
(987, 'VÉLEZ', 27),
(988, 'VETAS', 27),
(989, 'VILLANUEVA', 27),
(990, 'ZAPATOCA', 27),
(991, 'BUENAVISTA', 28),
(992, 'CAIMITO', 28),
(993, 'CHALÁN', 28),
(994, 'COLOSO', 28),
(995, 'COROZAL', 28),
(996, 'EL ROBLE', 28),
(997, 'GALERAS', 28),
(998, 'GUARANDA', 28),
(999, 'LA UNIÓN', 28),
(1000, 'LOS PALMITOS', 28),
(1001, 'MAJAGUAL', 28),
(1002, 'MORROA', 28),
(1003, 'OVEJAS', 28),
(1004, 'PALMITO', 28),
(1005, 'SAMPUES', 28),
(1006, 'SAN BENITO ABAD', 28),
(1007, 'SAN JUAN DE BETULIA', 28),
(1008, 'SAN MARCOS', 28),
(1009, 'SAN ONOFRE', 28),
(1010, 'SAN PEDRO', 28),
(1011, 'SINCÉ', 28),
(1012, 'SINCELEJO', 28),
(1013, 'SUCRE', 28),
(1014, 'TOLÚ', 28),
(1015, 'TOLUVIEJO', 28),
(1016, 'ALPUJARRA', 29),
(1017, 'ALVARADO', 29),
(1018, 'AMBALEMA', 29),
(1019, 'ANZOATEGUI', 29),
(1020, 'ARMERO (GUAYABAL)', 29),
(1021, 'ATACO', 29),
(1022, 'CAJAMARCA', 29),
(1023, 'CARMEN DE APICALÁ', 29),
(1024, 'CASABIANCA', 29),
(1025, 'CHAPARRAL', 29),
(1026, 'COELLO', 29),
(1027, 'COYAIMA', 29),
(1028, 'CUNDAY', 29),
(1029, 'DOLORES', 29),
(1030, 'ESPINAL', 29),
(1031, 'FALÁN', 29),
(1032, 'FLANDES', 29),
(1033, 'FRESNO', 29),
(1034, 'GUAMO', 29),
(1035, 'HERVEO', 29),
(1036, 'HONDA', 29),
(1037, 'IBAGUÉ', 29),
(1038, 'ICONONZO', 29),
(1039, 'LÉRIDA', 29),
(1040, 'LÍBANO', 29),
(1041, 'MARIQUITA', 29),
(1042, 'MELGAR', 29),
(1043, 'MURILLO', 29),
(1044, 'NATAGAIMA', 29),
(1045, 'ORTEGA', 29),
(1046, 'PALOCABILDO', 29),
(1047, 'PIEDRAS PLANADAS', 29),
(1048, 'PRADO', 29),
(1049, 'PURIFICACIÓN', 29),
(1050, 'RIOBLANCO', 29),
(1051, 'RONCESVALLES', 29),
(1052, 'ROVIRA', 29),
(1053, 'SALDAÑA', 29),
(1054, 'SAN ANTONIO', 29),
(1055, 'SAN LUIS', 29),
(1056, 'SANTA ISABEL', 29),
(1057, 'SUÁREZ', 29),
(1058, 'VALLE DE SAN JUAN', 29),
(1059, 'VENADILLO', 29),
(1060, 'VILLAHERMOSA', 29),
(1061, 'VILLARRICA', 29),
(1062, 'ALCALÁ', 30),
(1063, 'ANDALUCÍA', 30),
(1064, 'ANSERMA NUEVO', 30),
(1065, 'ARGELIA', 30),
(1066, 'BOLÍVAR', 30),
(1067, 'BUENAVENTURA', 30),
(1068, 'BUGA', 30),
(1069, 'BUGALAGRANDE', 30),
(1070, 'CAICEDONIA', 30),
(1071, 'CALI', 30),
(1072, 'CALIMA (DARIEN)', 30),
(1073, 'CANDELARIA', 30),
(1074, 'CARTAGO', 30),
(1075, 'DAGUA', 30),
(1076, 'EL AGUILA', 30),
(1077, 'EL CAIRO', 30),
(1078, 'EL CERRITO', 30),
(1079, 'EL DOVIO', 30),
(1080, 'FLORIDA', 30),
(1081, 'GINEBRA GUACARI', 30),
(1082, 'JAMUNDÍ', 30),
(1083, 'LA CUMBRE', 30),
(1084, 'LA UNIÓN', 30),
(1085, 'LA VICTORIA', 30),
(1086, 'OBANDO', 30),
(1087, 'PALMIRA', 30),
(1088, 'PRADERA', 30),
(1089, 'RESTREPO', 30),
(1090, 'RIO FRÍO', 30),
(1091, 'ROLDANILLO', 30),
(1092, 'SAN PEDRO', 30),
(1093, 'SEVILLA', 30),
(1094, 'TORO', 30),
(1095, 'TRUJILLO', 30),
(1096, 'TULÚA', 30),
(1097, 'ULLOA', 30),
(1098, 'VERSALLES', 30),
(1099, 'VIJES', 30),
(1100, 'YOTOCO', 30),
(1101, 'YUMBO', 30),
(1102, 'ZARZAL', 30),
(1103, 'CARURÚ', 31),
(1104, 'MITÚ', 31),
(1105, 'PACOA', 31),
(1106, 'PAPUNAUA', 31),
(1107, 'TARAIRA', 31),
(1108, 'YAVARATÉ', 31),
(1109, 'CUMARIBO', 32),
(1110, 'LA PRIMAVERA', 32),
(1111, 'PUERTO CARREÑO', 32),
(1112, 'SANTA ROSALIA', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numerodocumento`
--

CREATE TABLE IF NOT EXISTS `numerodocumento` (
`idnumerodocumento` int(8) unsigned zerofill NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`idproducto` int(4) NOT NULL,
  `nombreproducto` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionproducto` text COLLATE utf8_unicode_ci NOT NULL,
  `valorventa` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nombreproducto`, `descripcionproducto`, `valorventa`) VALUES
(10, 'resevo para afirmado', 'material natural', '100'),
(11, 'piedra rajona', 'material natural', '100'),
(12, 'piedra gavion', 'material natural', '100'),
(13, 'piedra filtro', 'material procesado', '200'),
(14, 'grava de 1/2               ', 'material procesado                    ', '200'),
(15, 'arena lavada', 'material procesado', '200'),
(16, 'crudo', 'material natural', '1000'),
(18, 'gravilla de 3/4', 'material procesado', 'xxxxxx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
`idproveedor` int(6) NOT NULL,
  `nombreproveedor` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `telefonoproveedor` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nitproveedor` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idtipoproveedor` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `nombreproveedor`, `telefonoproveedor`, `nitproveedor`, `idtipoproveedor`) VALUES
(5, 'MAIZENA GUILLERMO         ', 'XXX ', 'XXX         ', 5),
(6, 'ASOVOLDO  ', 'XXX         ', 'XXX       ', 5),
(7, 'MAIZENA GUILLERMO     ', 'XXX         ', 'XXX         ', 5),
(8, 'RAJONA   ', 'XXX     ', 'XXX         ', 5),
(9, 'PLAYAS VARIAS      ', 'XXX         ', 'XXX          ', 5),
(10, 'RECEVERA          ', 'XXX         ', 'XXX          ', 0),
(11, 'suluaga', 'xxx', 'xxx', 6),
(12, 'MAURI                    ', 'XXX         ', 'XXX            ', 8),
(13, 'ALIRIO', 'XXX', 'XXX', 10),
(14, 'RESEVERA', 'XXX', 'XXX', 5),
(15, 'GEREMIAS', 'XXX', 'XXX', 11),
(16, 'ARMANDO', 'XXX', 'XXX', 11),
(17, 'JAIR', 'XXX', 'XXX', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_sucursal`
--

CREATE TABLE IF NOT EXISTS `proveedor_sucursal` (
  `idproveedor_sucursal` bigint(20) NOT NULL,
  `idproveedor` int(6) NOT NULL,
  `direccion` int(60) NOT NULL,
  `idmunicipio` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida_caja`
--

CREATE TABLE IF NOT EXISTS `salida_caja` (
`idsalida_caja` bigint(20) NOT NULL,
  `idcaja` int(4) NOT NULL,
  `valor` int(10) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `concepto` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida_producto`
--

CREATE TABLE IF NOT EXISTS `salida_producto` (
`idsalida_producto` bigint(20) NOT NULL,
  `idinventario_producto` bigint(20) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha_hora` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=169 ;

--
-- Volcado de datos para la tabla `salida_producto`
--

INSERT INTO `salida_producto` (`idsalida_producto`, `idinventario_producto`, `cantidad`, `fecha_hora`, `fecha`) VALUES
(107, 12, 15, '2015-01-15 17:36:34', '2015-01-11'),
(127, 3, 15, '2015-01-22 09:47:41', '2014-12-01'),
(116, 9, 15, '2015-01-21 15:03:44', '2014-12-01'),
(27, 12, 15, '2014-12-17 21:51:59', '2014-12-01'),
(28, 12, 15, '2014-12-17 22:23:13', '2014-12-01'),
(29, 3, 21, '2014-12-18 14:22:02', '2014-12-02'),
(32, 12, 15, '2014-12-18 19:54:28', '2014-12-02'),
(33, 12, 15, '2014-12-18 20:19:04', '2014-12-03'),
(34, 12, 15, '2014-12-18 21:07:18', '2014-12-04'),
(35, 12, 15, '2014-12-18 21:15:16', '2014-12-04'),
(36, 12, 7, '2014-12-18 21:20:26', '2014-12-05'),
(37, 12, 7, '2014-12-18 21:25:02', '2014-12-05'),
(121, 13, 15, '2015-01-21 15:25:07', '2014-12-05'),
(39, 12, 15, '2014-12-18 22:18:32', '2014-12-07'),
(122, 13, 15, '2015-01-21 15:26:43', '2014-12-05'),
(41, 12, 7, '2014-12-18 22:41:36', '2014-12-05'),
(42, 12, 15, '2014-12-18 22:43:29', '2014-12-06'),
(43, 12, 15, '2014-12-18 22:58:32', '2014-12-09'),
(44, 12, 6, '2014-12-18 23:02:07', '2014-12-09'),
(45, 12, 7, '2014-12-19 13:20:29', '2014-12-09'),
(118, 13, 15, '2015-01-21 15:16:08', '2014-12-13'),
(119, 13, 15, '2015-01-21 15:18:07', '2014-12-13'),
(50, 12, 15, '2014-12-19 14:14:43', '2014-12-16'),
(51, 12, 7, '2014-12-19 14:17:35', '2014-12-17'),
(52, 12, 7, '2014-12-19 14:24:11', '2014-12-17'),
(53, 12, 7, '2014-12-19 15:52:08', '2014-12-18'),
(155, 3, 147, '2015-01-27 16:57:30', '2015-01-16'),
(55, 12, 15, '2014-12-29 13:28:14', '2014-12-28'),
(56, 12, 15, '2014-12-29 16:33:45', '2014-12-29'),
(57, 12, 7, '2014-12-29 16:34:56', '2014-12-29'),
(58, 5, 17, '2014-12-30 14:31:46', '2014-12-23'),
(60, 12, 15, '2014-12-31 13:28:59', '2014-12-30'),
(61, 12, 7, '2014-12-31 13:31:39', '2014-12-31'),
(62, 5, 119, '2015-01-02 08:48:03', '2014-12-23'),
(91, 8, 105, '2015-01-14 11:39:40', '2014-12-27'),
(64, 8, 63, '2015-01-02 08:53:47', '2014-12-29'),
(109, 8, 7, '2015-01-20 16:05:34', '2014-12-29'),
(66, 8, 7, '2015-01-05 08:37:27', '2014-12-30'),
(68, 12, 15, '2015-01-05 08:44:03', '2014-12-29'),
(117, 8, 7, '2015-01-21 15:11:15', '2014-12-30'),
(70, 12, 15, '2015-01-05 08:49:09', '2015-01-02'),
(71, 12, 15, '2015-01-05 08:50:52', '2015-01-02'),
(72, 7, 15, '2015-01-05 09:04:22', '2015-01-03'),
(73, 12, 15, '2015-01-05 09:07:20', '2015-01-03'),
(74, 12, 15, '2015-01-05 09:08:47', '2015-01-04'),
(76, 12, 15, '2015-01-06 11:42:29', '2015-01-06'),
(77, 12, 15, '2015-01-07 11:10:35', '2015-01-07'),
(78, 12, 14, '2015-01-07 11:12:33', '2015-01-07'),
(79, 12, 20, '2015-01-13 11:26:36', '2015-01-08'),
(111, 12, 15, '2015-01-20 17:13:57', '2015-01-09'),
(81, 12, 7, '2015-01-13 11:34:34', '2015-01-10'),
(82, 12, 6, '2015-01-13 11:38:56', '2015-01-10'),
(83, 12, 6, '2015-01-13 11:41:30', '2015-01-10'),
(84, 12, 15, '2015-01-13 11:43:45', '2015-01-10'),
(105, 0, 15, '2015-01-15 17:33:15', '2015-01-11'),
(106, 12, 15, '2015-01-15 17:35:16', '2015-01-11'),
(88, 12, 15, '2015-01-13 12:24:35', '2015-01-12'),
(89, 12, 7, '2015-01-13 12:25:47', '2015-01-13'),
(92, 6, 161, '2015-01-14 17:07:57', '2015-01-02'),
(93, 8, 105, '2015-01-14 17:09:31', '2014-12-30'),
(94, 7, 140, '2015-01-14 17:10:19', '2015-01-03'),
(95, 7, 84, '2015-01-14 17:11:15', '2015-01-06'),
(97, 3, 133, '2015-01-14 17:13:46', '2015-01-09'),
(98, 3, 182, '2015-01-14 17:15:24', '2015-01-10'),
(99, 12, 7, '2015-01-15 15:58:54', '2015-01-14'),
(100, 12, 15, '2015-01-15 16:01:03', '2015-01-14'),
(102, 12, 30, '2015-01-15 16:26:51', '2015-01-15'),
(103, 12, 6, '2015-01-15 16:28:06', '2015-01-15'),
(104, 12, 6, '2015-01-15 16:29:09', '2015-01-15'),
(110, 12, 15, '2015-01-20 17:08:06', '2015-01-11'),
(124, 13, 15, '2015-01-22 09:15:50', '2014-12-13'),
(126, 8, 7, '2015-01-22 09:29:19', '2014-12-27'),
(130, 12, 15, '2015-01-22 17:03:45', '2015-01-16'),
(147, 3, 15, '2015-01-27 16:05:37', '2015-01-16'),
(133, 12, 12, '2015-01-22 17:34:26', '2015-01-16'),
(134, 12, 14, '2015-01-23 08:42:09', '2015-01-16'),
(135, 12, 6, '2015-01-23 09:53:18', '2015-01-18'),
(136, 12, 14, '2015-01-23 09:55:39', '2015-01-18'),
(137, 12, 7, '2015-01-23 10:00:15', '2015-01-19'),
(138, 12, 7, '2015-01-23 10:06:26', '2015-01-19'),
(139, 12, 15, '2015-01-23 10:08:27', '2015-01-19'),
(140, 12, 15, '2015-01-23 10:11:12', '2015-01-19'),
(141, 12, 4, '2015-01-23 10:16:23', '2015-01-20'),
(142, 12, 6, '2015-01-23 10:37:02', '2015-01-20'),
(143, 12, 15, '2015-01-23 10:40:01', '2015-01-20'),
(144, 12, 15, '2015-01-23 10:41:26', '2015-01-20'),
(145, 12, 15, '2015-01-23 10:42:34', '2015-01-22'),
(154, 16, 14, '2015-01-27 16:26:54', '2015-01-23'),
(149, 16, 15, '2015-01-27 16:15:58', '2015-01-23'),
(150, 12, 7, '2015-01-27 16:17:37', '2015-01-23'),
(151, 12, 6, '2015-01-27 16:19:40', '2015-01-23'),
(152, 12, 15, '2015-01-27 16:22:03', '2015-01-23'),
(153, 12, 18, '2015-01-27 16:24:07', '2015-01-23'),
(156, 16, 7, '2015-01-27 17:41:17', '2015-01-26'),
(157, 12, 6, '2015-01-27 17:42:41', '2015-01-26'),
(158, 12, 7, '2015-01-27 17:44:48', '2015-01-27'),
(159, 12, 14, '2015-01-27 17:47:03', '2015-01-27'),
(160, 12, 14, '2015-01-27 17:50:48', '2015-01-27'),
(161, 12, 15, '2015-01-27 17:52:41', '2015-01-27'),
(162, 15, 14, '2015-01-27 17:55:50', '2015-01-27'),
(163, 12, 15, '2015-01-27 17:56:59', '2015-01-27'),
(164, 10, 15, '2015-01-27 18:00:45', '2015-01-20'),
(165, 10, 180, '2015-01-27 18:02:09', '2015-01-21'),
(166, 10, 195, '2015-01-27 18:03:08', '2015-01-22'),
(167, 10, 165, '2015-01-27 18:04:28', '2015-01-23'),
(168, 10, 21, '2015-01-27 18:07:14', '2015-01-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal_otros`
--

CREATE TABLE IF NOT EXISTS `sucursal_otros` (
  `idsucursal_otros` bigint(20) NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `idmunicipio` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipobodega`
--

CREATE TABLE IF NOT EXISTS `tipobodega` (
`idtipobodeba` int(4) NOT NULL,
  `tipo` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tipobodega`
--

INSERT INTO `tipobodega` (`idtipobodeba`, `tipo`) VALUES
(9, 'PLAYA        '),
(10, 'RESEVERA  '),
(11, 'PLANTA'),
(12, 'IREGUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproveedor`
--

CREATE TABLE IF NOT EXISTS `tipoproveedor` (
`idtipoproveedor` bigint(20) NOT NULL,
  `tipoproveedor` varchar(60) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tipoproveedor`
--

INSERT INTO `tipoproveedor` (`idtipoproveedor`, `tipoproveedor`) VALUES
(5, 'material agregados'),
(6, 'transporte'),
(7, 'carretaje y transformacion en planta'),
(8, 'lavado transformacion de producto en planta'),
(9, 'transformacion en playas'),
(10, 'procesos multiples'),
(11, 'transporte multiples');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportematerial`
--

CREATE TABLE IF NOT EXISTS `transportematerial` (
`idtransporte` bigint(20) NOT NULL,
  `idinventarioproductosale` bigint(20) NOT NULL,
  `viajes` bigint(20) NOT NULL,
  `metros` bigint(20) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `idinventarioproductoentra` bigint(20) NOT NULL,
  `asopal` bigint(20) NOT NULL,
  `servidumbre` bigint(20) NOT NULL,
  `idproveedorcargeplaya` bigint(20) NOT NULL,
  `valorcargeplaya` bigint(20) NOT NULL,
  `idproveedortransporte` bigint(20) NOT NULL,
  `valortransporte` bigint(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `transportematerial`
--

INSERT INTO `transportematerial` (`idtransporte`, `idinventarioproductosale`, `viajes`, `metros`, `cantidad`, `idinventarioproductoentra`, `asopal`, `servidumbre`, `idproveedorcargeplaya`, `valorcargeplaya`, `idproveedortransporte`, `valortransporte`, `fecha`) VALUES
(1, 5, 17, 7, 119, 12, 178500, 203966, 13, 238000, 13, 357000, '2014-12-23'),
(4, 8, 15, 7, 105, 12, 157500, 157500, 13, 210000, 13, 315000, '2014-12-27'),
(3, 8, 9, 7, 63, 12, 94500, 107982, 13, 126000, 13, 189000, '2014-12-29'),
(5, 6, 23, 7, 161, 12, 241500, 241500, 13, 322000, 13, 483000, '2015-01-02'),
(6, 8, 15, 7, 105, 12, 157500, 157500, 13, 210000, 13, 315000, '2014-12-30'),
(7, 7, 20, 7, 140, 12, 210000, 210000, 13, 280000, 13, 420000, '2015-01-03'),
(8, 7, 12, 7, 84, 12, 126000, 126000, 13, 168000, 13, 252000, '2015-01-06'),
(10, 3, 19, 7, 133, 12, 199500, 199500, 13, 266000, 13, 399000, '2015-01-09'),
(11, 3, 26, 7, 182, 12, 273000, 273000, 13, 364000, 13, 564000, '2015-01-10'),
(14, 3, 21, 7, 147, 12, 220500, 251958, 13, 294000, 15, 441000, '2015-01-16'),
(15, 10, 1, 15, 15, 12, 22500, 18000, 16, 30000, 16, 45000, '2015-01-20'),
(16, 10, 12, 15, 180, 12, 270000, 216000, 16, 360000, 16, 540000, '2015-01-21'),
(17, 10, 13, 15, 195, 12, 292500, 234000, 16, 390000, 16, 585000, '2015-01-22'),
(18, 10, 11, 15, 165, 12, 247500, 198000, 16, 330000, 16, 495000, '2015-01-23'),
(19, 10, 3, 7, 21, 12, 31500, 35994, 16, 42000, 17, 63000, '2015-01-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` bigint(20) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(205) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`) VALUES
(2, 'abs', '879345cbe24bbc1226a3b14b4d1a0c82b39bd316'),
(3, 'NIDIA', '91abc80e1a13fe6fc7744ee94dba6f883ef9f11f'),
(4, 'MAURIZE', '7928ae9591cbb53993c6adb57d778200fbf86bae');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioeventos`
--

CREATE TABLE IF NOT EXISTS `usuarioeventos` (
`idevento` bigint(20) NOT NULL,
  `idusuario` bigint(20) NOT NULL,
  `evento` varchar(60) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=911 ;

--
-- Volcado de datos para la tabla `usuarioeventos`
--

INSERT INTO `usuarioeventos` (`idevento`, `idusuario`, `evento`, `fecha_hora`) VALUES
(425, 2, 'inicio de sesion', '2014-11-14 15:02:13'),
(426, 3, 'inicio de sesion', '2014-11-14 15:03:51'),
(427, 3, 'inicio de sesion', '2014-11-14 15:53:39'),
(428, 3, 'inicio de sesion', '2014-11-14 15:54:49'),
(429, 2, 'inicio de sesion', '2014-11-18 15:09:50'),
(430, 2, 'inicio de sesion', '2014-11-18 15:11:53'),
(431, 2, 'inicio de sesion', '2014-11-18 16:11:35'),
(432, 2, 'inicio de sesion', '2014-11-18 16:23:51'),
(433, 2, 'inicio de sesion', '2014-11-18 16:24:43'),
(434, 2, 'inicio de sesion', '2014-11-18 16:33:33'),
(435, 2, 'inicio de sesion', '2014-11-18 17:11:42'),
(436, 2, 'inicio de sesion', '2014-11-18 19:09:40'),
(437, 2, 'inicio de sesion', '2014-11-18 21:54:25'),
(438, 2, 'inicio de sesion', '2014-11-19 13:15:15'),
(439, 2, 'inicio de sesion', '2014-11-19 13:50:31'),
(440, 2, 'inicio de sesion', '2014-11-19 13:52:45'),
(441, 2, 'inicio de sesion', '2014-11-19 14:13:02'),
(442, 2, 'inicio de sesion', '2014-11-19 16:27:28'),
(443, 2, 'inicio de sesion', '2014-11-19 11:38:25'),
(444, 2, 'inicio de sesion', '2014-11-19 12:06:54'),
(445, 4, 'inicio de sesion', '2014-11-19 12:22:36'),
(446, 4, 'inicio de sesion', '2014-11-19 22:34:29'),
(447, 4, 'inicio de sesion', '2014-11-19 22:44:57'),
(448, 4, 'inicio de sesion', '2014-11-19 22:46:36'),
(449, 4, 'inicio de sesion', '2014-11-19 22:46:56'),
(450, 4, 'inicio de sesion', '2014-11-19 22:47:01'),
(451, 4, 'inicio de sesion', '2014-11-19 23:13:55'),
(452, 3, 'inicio de sesion', '2014-11-20 13:16:20'),
(453, 2, 'inicio de sesion', '2014-11-20 13:40:37'),
(454, 2, 'inicio de sesion', '2014-11-20 13:55:14'),
(455, 2, 'inicio de sesion', '2014-11-20 14:06:12'),
(456, 2, 'inicio de sesion', '2014-11-20 14:14:24'),
(457, 2, 'inicio de sesion', '2014-11-20 14:23:37'),
(458, 2, 'inicio de sesion', '2014-11-20 14:24:15'),
(459, 2, 'inicio de sesion', '2014-11-20 14:48:11'),
(460, 2, 'inicio de sesion', '2014-11-20 14:48:19'),
(461, 2, 'inicio de sesion', '2014-11-20 14:48:29'),
(462, 2, 'inicio de sesion', '2014-11-20 16:01:14'),
(463, 4, 'inicio de sesion', '2014-11-20 21:40:04'),
(464, 4, 'inicio de sesion', '2014-11-20 21:46:57'),
(465, 4, 'inicio de sesion', '2014-11-20 22:00:27'),
(466, 4, 'inicio de sesion', '2014-11-20 22:38:16'),
(467, 4, 'inicio de sesion', '2014-11-21 13:29:11'),
(468, 4, 'inicio de sesion', '2014-11-21 22:21:37'),
(469, 4, 'inicio de sesion', '2014-11-21 22:22:11'),
(470, 4, 'inicio de sesion', '2014-11-21 22:40:26'),
(471, 4, 'inicio de sesion', '2014-11-22 14:27:12'),
(472, 2, 'inicio de sesion', '2014-11-22 14:57:38'),
(473, 2, 'inicio de sesion', '2014-11-22 15:02:11'),
(474, 2, 'inicio de sesion', '2014-11-22 15:02:21'),
(475, 4, 'inicio de sesion', '2014-11-22 15:25:45'),
(476, 4, 'inicio de sesion', '2014-11-22 15:27:35'),
(477, 4, 'inicio de sesion', '2014-11-22 19:24:03'),
(478, 3, 'inicio de sesion', '2014-11-22 20:03:54'),
(479, 2, 'inicio de sesion', '2014-11-24 13:39:52'),
(480, 2, 'inicio de sesion', '2014-11-24 15:54:15'),
(481, 2, 'inicio de sesion', '2014-11-24 16:13:35'),
(482, 2, 'inicio de sesion', '2014-11-24 16:13:39'),
(483, 4, 'inicio de sesion', '2014-11-27 13:09:42'),
(484, 4, 'inicio de sesion', '2014-11-27 13:16:22'),
(485, 2, 'inicio de sesion', '2014-11-27 15:18:12'),
(486, 2, 'inicio de sesion', '2014-11-27 15:35:58'),
(487, 2, 'inicio de sesion', '2014-11-27 15:36:36'),
(488, 2, 'inicio de sesion', '2014-11-27 15:37:14'),
(489, 2, 'inicio de sesion', '2014-11-27 15:37:57'),
(490, 2, 'inicio de sesion', '2014-11-27 15:38:04'),
(491, 4, 'inicio de sesion', '2014-11-27 19:20:14'),
(492, 4, 'inicio de sesion', '2014-11-27 19:25:22'),
(493, 4, 'inicio de sesion', '2014-11-27 19:25:22'),
(494, 4, 'inicio de sesion', '2014-11-28 13:13:57'),
(495, 4, 'inicio de sesion', '2014-11-28 13:37:57'),
(496, 4, 'inicio de sesion', '2014-11-28 14:20:57'),
(497, 4, 'inicio de sesion', '2014-11-28 15:38:07'),
(498, 4, 'inicio de sesion', '2014-11-28 16:52:48'),
(499, 4, 'inicio de sesion', '2014-11-28 20:19:36'),
(500, 4, 'inicio de sesion', '2014-11-28 20:38:41'),
(501, 4, 'inicio de sesion', '2014-11-28 20:38:48'),
(502, 4, 'inicio de sesion', '2014-11-29 15:48:34'),
(503, 4, 'inicio de sesion', '2014-11-29 19:30:43'),
(504, 4, 'inicio de sesion', '2014-11-29 19:33:57'),
(505, 4, 'inicio de sesion', '2014-11-29 19:39:32'),
(506, 4, 'inicio de sesion', '2014-11-29 19:45:49'),
(507, 4, 'inicio de sesion', '2014-12-01 13:18:38'),
(508, 2, 'inicio de sesion', '2014-12-01 14:04:13'),
(509, 4, 'inicio de sesion', '2014-12-01 14:58:56'),
(510, 4, 'inicio de sesion', '2014-12-01 14:59:21'),
(511, 4, 'inicio de sesion', '2014-12-01 14:59:47'),
(512, 4, 'inicio de sesion', '2014-12-01 15:01:05'),
(513, 2, 'inicio de sesion', '2014-12-01 15:01:49'),
(514, 2, 'inicio de sesion', '2014-12-01 20:16:44'),
(515, 2, 'inicio de sesion', '2014-12-01 20:21:15'),
(516, 2, 'inicio de sesion', '2014-12-02 13:26:28'),
(517, 2, 'inicio de sesion', '2014-12-02 13:28:13'),
(518, 2, 'inicio de sesion', '2014-12-02 14:04:51'),
(519, 2, 'inicio de sesion', '2014-12-02 16:53:17'),
(520, 2, 'inicio de sesion', '2014-12-02 20:58:55'),
(521, 2, 'inicio de sesion', '2014-12-02 21:57:13'),
(522, 2, 'inicio de sesion', '2014-12-02 22:08:57'),
(523, 2, 'inicio de sesion', '2014-12-02 22:30:09'),
(524, 2, 'inicio de sesion', '2014-12-03 13:43:11'),
(525, 2, 'inicio de sesion', '2014-12-03 15:47:30'),
(526, 2, 'inicio de sesion', '2014-12-03 19:07:42'),
(527, 2, 'inicio de sesion', '2014-12-03 19:50:00'),
(528, 2, 'inicio de sesion', '2014-12-03 19:50:36'),
(529, 2, 'inicio de sesion', '2014-12-03 19:59:55'),
(530, 2, 'inicio de sesion', '2014-12-03 22:09:33'),
(531, 2, 'inicio de sesion', '2014-12-03 22:46:22'),
(532, 2, 'Borro venta numero 227 del 2014-11-27', '2014-12-03 22:47:39'),
(533, 2, 'Borro venta numero 216 del 2014-11-26', '2014-12-03 22:47:43'),
(534, 2, 'inicio de sesion', '2014-12-03 22:53:43'),
(535, 2, 'Borro venta numero 240 del 2014-11-13', '2014-12-03 23:03:23'),
(536, 2, 'Borro venta numero 240 del ', '2014-12-03 23:03:23'),
(537, 2, 'inicio de sesion', '2014-12-03 23:04:07'),
(538, 2, 'inicio de sesion', '2014-12-04 00:42:38'),
(539, 4, 'inicio de sesion', '2014-12-04 14:10:29'),
(540, 4, 'inicio de sesion', '2014-12-04 15:14:47'),
(541, 2, 'inicio de sesion', '2014-12-04 15:17:11'),
(542, 2, 'Borro venta numero 171 del 2014-11-11', '2014-12-04 15:19:52'),
(543, 2, 'inicio de sesion', '2014-12-04 15:20:14'),
(544, 2, 'inicio de sesion', '2014-12-04 15:57:31'),
(545, 2, 'Borro venta numero 241 del 2014-11-13', '2014-12-04 16:03:19'),
(546, 2, 'inicio de sesion', '2014-12-04 16:03:48'),
(547, 2, 'inicio de sesion', '2014-12-04 16:03:58'),
(548, 2, 'inicio de sesion', '2014-12-04 16:06:21'),
(549, 2, 'Borro venta numero 243 del 2014-11-28', '2014-12-04 16:10:35'),
(550, 2, 'Borro venta numero 242 del 2014-11-29', '2014-12-04 16:10:57'),
(551, 2, 'Borro venta numero 175 del 2014-11-13', '2014-12-04 16:25:18'),
(552, 2, 'Borro venta numero 155 del 2014-11-03', '2014-12-04 16:26:29'),
(553, 2, 'Borro venta numero 157 del 2014-11-05', '2014-12-04 16:26:58'),
(554, 2, 'inicio de sesion', '2014-12-04 16:27:12'),
(555, 2, 'inicio de sesion', '2014-12-04 16:56:21'),
(556, 2, 'Borro venta numero 246 del 2014-11-29', '2014-12-04 17:02:50'),
(557, 2, 'Borro venta numero 245 del 2014-11-28', '2014-12-04 17:03:04'),
(558, 2, 'inicio de sesion', '2014-12-04 17:03:17'),
(559, 2, 'inicio de sesion', '2014-12-04 17:06:19'),
(560, 2, 'inicio de sesion', '2014-12-04 17:06:26'),
(561, 2, 'inicio de sesion', '2014-12-04 17:12:19'),
(562, 2, 'inicio de sesion', '2014-12-04 17:13:20'),
(563, 2, 'inicio de sesion', '2014-12-04 20:01:38'),
(564, 2, 'inicio de sesion', '2014-12-04 20:16:24'),
(565, 2, 'inicio de sesion', '2014-12-04 20:16:26'),
(566, 2, 'inicio de sesion', '2014-12-04 22:05:40'),
(567, 2, 'inicio de sesion', '2014-12-04 22:34:26'),
(568, 2, 'Borro venta numero 250 del 2014-12-04', '2014-12-04 22:36:04'),
(569, 2, 'inicio de sesion', '2014-12-05 13:37:20'),
(570, 2, 'inicio de sesion', '2014-12-05 13:45:40'),
(571, 2, 'inicio de sesion', '2014-12-05 13:48:08'),
(572, 2, 'Borro venta numero 251 del 2014-11-05', '2014-12-05 13:51:49'),
(573, 2, 'inicio de sesion', '2014-12-05 13:53:52'),
(574, 2, 'inicio de sesion', '2014-12-05 13:58:41'),
(575, 2, 'inicio de sesion', '2014-12-09 21:11:56'),
(576, 2, 'inicio de sesion', '2014-12-10 15:46:33'),
(577, 2, 'inicio de sesion', '2014-12-11 19:42:32'),
(578, 2, 'inicio de sesion', '2014-12-11 19:51:19'),
(579, 2, 'inicio de sesion', '2014-12-11 19:54:05'),
(580, 2, 'inicio de sesion', '2014-12-11 20:01:04'),
(581, 2, 'inicio de sesion', '2014-12-11 20:42:29'),
(582, 2, 'inicio de sesion', '2014-12-12 14:24:26'),
(583, 2, 'inicio de sesion', '2014-12-12 14:36:22'),
(584, 2, 'inicio de sesion', '2014-12-12 15:04:23'),
(585, 2, 'inicio de sesion', '2014-12-12 15:15:23'),
(586, 2, 'Editar Tipo Bodega ', '2014-12-12 15:27:17'),
(587, 2, 'Editar Tipo Bodega ', '2014-12-12 15:28:28'),
(588, 2, 'Editar Tipo Bodega ', '2014-12-12 15:28:44'),
(589, 2, 'inicio de sesion', '2014-12-12 19:22:58'),
(590, 2, 'inicio de sesion', '2014-12-15 20:40:08'),
(591, 2, 'inicio de sesion', '2014-12-15 20:40:27'),
(592, 2, 'inicio de sesion', '2014-12-15 22:47:41'),
(593, 2, 'inicio de sesion', '2014-12-15 22:53:19'),
(594, 2, 'inicio de sesion', '2014-12-15 22:55:19'),
(595, 2, 'inicio de sesion', '2014-12-16 00:15:32'),
(596, 2, 'inicio de sesion', '2014-12-16 00:15:57'),
(597, 2, 'inicio de sesion', '2014-12-16 00:26:49'),
(598, 2, 'inicio de sesion', '2014-12-16 01:00:46'),
(599, 2, 'inicio de sesion', '2014-12-16 01:04:06'),
(600, 2, 'inicio de sesion', '2014-12-16 01:04:12'),
(601, 2, 'inicio de sesion', '2014-12-16 01:05:13'),
(602, 2, 'inicio de sesion', '2014-12-16 01:05:20'),
(603, 2, 'inicio de sesion', '2014-12-16 01:06:40'),
(604, 2, 'inicio de sesion', '2014-12-16 13:18:17'),
(605, 2, 'inicio de sesion', '2014-12-16 14:17:43'),
(606, 2, 'inicio de sesion', '2014-12-16 14:22:22'),
(607, 2, 'inicio de sesion', '2014-12-16 14:27:10'),
(608, 2, 'inicio de sesion', '2014-12-16 14:29:32'),
(609, 2, 'Borro venta numero 5 del 2014-11-01', '2014-12-16 14:30:09'),
(610, 2, 'inicio de sesion', '2014-12-16 14:35:13'),
(611, 2, 'inicio de sesion', '2014-12-16 16:14:27'),
(612, 2, 'inicio de sesion', '2014-12-16 20:19:38'),
(613, 2, 'inicio de sesion', '2014-12-16 21:37:29'),
(614, 2, 'inicio de sesion', '2014-12-16 21:38:29'),
(615, 2, 'inicio de sesion', '2014-12-16 22:10:03'),
(616, 2, 'inicio de sesion', '2014-12-16 22:16:31'),
(617, 2, 'inicio de sesion', '2014-12-16 22:34:44'),
(618, 2, 'inicio de sesion', '2014-12-16 22:38:21'),
(619, 2, 'inicio de sesion', '2014-12-17 13:59:35'),
(620, 2, 'inicio de sesion', '2014-12-17 14:02:09'),
(621, 2, 'inicio de sesion', '2014-12-17 14:03:05'),
(622, 2, 'inicio de sesion', '2014-12-17 14:11:22'),
(623, 2, 'inicio de sesion', '2014-12-17 14:51:21'),
(624, 2, 'inicio de sesion', '2014-12-17 16:15:42'),
(625, 2, 'inicio de sesion', '2014-12-17 16:32:01'),
(626, 2, 'inicio de sesion', '2014-12-17 18:09:18'),
(627, 2, 'inicio de sesion', '2014-12-17 18:11:53'),
(628, 2, 'Borro venta numero 24 del 2014-12-17', '2014-12-17 18:15:02'),
(629, 2, 'inicio de sesion', '2014-12-17 21:18:04'),
(630, 2, 'inicio de sesion', '2014-12-17 21:22:43'),
(631, 2, 'inicio de sesion', '2014-12-17 21:39:19'),
(632, 2, 'inicio de sesion', '2014-12-17 21:47:15'),
(633, 2, 'inicio de sesion', '2014-12-17 21:49:41'),
(634, 2, 'inicio de sesion', '2014-12-18 13:36:29'),
(635, 2, 'inicio de sesion', '2014-12-18 14:28:50'),
(636, 2, 'inicio de sesion', '2014-12-18 14:37:03'),
(637, 2, 'inicio de sesion', '2014-12-18 15:13:01'),
(638, 2, 'inicio de sesion', '2014-12-18 15:22:34'),
(639, 2, 'inicio de sesion', '2014-12-18 15:30:03'),
(640, 2, 'inicio de sesion', '2014-12-18 15:31:18'),
(641, 2, 'Borro venta numero 31 del 2014-12-02', '2014-12-18 15:37:05'),
(642, 2, 'inicio de sesion', '2014-12-18 15:49:58'),
(643, 2, 'inicio de sesion', '2014-12-18 19:19:56'),
(644, 2, 'inicio de sesion', '2014-12-18 19:27:09'),
(645, 2, 'inicio de sesion', '2014-12-18 19:29:07'),
(646, 2, 'inicio de sesion', '2014-12-18 19:29:15'),
(647, 2, 'inicio de sesion', '2014-12-18 19:29:33'),
(648, 2, 'inicio de sesion', '2014-12-18 19:29:49'),
(649, 2, 'inicio de sesion', '2014-12-18 19:29:54'),
(650, 2, 'inicio de sesion', '2014-12-18 19:40:41'),
(651, 2, 'inicio de sesion', '2014-12-18 21:05:09'),
(652, 2, 'inicio de sesion', '2014-12-18 21:21:13'),
(653, 2, 'inicio de sesion', '2014-12-18 22:20:52'),
(654, 2, 'inicio de sesion', '2014-12-18 22:33:17'),
(655, 2, 'inicio de sesion', '2014-12-18 22:45:15'),
(656, 2, 'inicio de sesion', '2014-12-18 22:45:28'),
(657, 2, 'inicio de sesion', '2014-12-18 22:45:57'),
(658, 2, 'inicio de sesion', '2014-12-18 22:48:04'),
(659, 2, 'inicio de sesion', '2014-12-18 22:52:28'),
(660, 2, 'inicio de sesion', '2014-12-18 22:56:25'),
(661, 2, 'inicio de sesion', '2014-12-19 13:09:02'),
(662, 2, 'inicio de sesion', '2014-12-19 13:12:48'),
(663, 2, 'Borro venta numero 49 del 2014-12-19', '2014-12-19 14:11:31'),
(664, 2, 'inicio de sesion', '2014-12-19 19:34:27'),
(665, 2, 'inicio de sesion', '2014-12-19 20:23:29'),
(666, 2, 'inicio de sesion', '2014-12-22 14:09:48'),
(667, 2, 'inicio de sesion', '2014-12-23 13:11:08'),
(668, 2, 'inicio de sesion', '2014-12-23 13:21:16'),
(669, 2, 'inicio de sesion', '2014-12-23 15:20:14'),
(670, 2, 'inicio de sesion', '2014-12-23 14:49:13'),
(671, 2, 'inicio de sesion', '2014-12-23 20:24:16'),
(672, 2, 'inicio de sesion', '2014-12-23 20:25:45'),
(673, 2, 'inicio de sesion', '2014-12-23 20:26:06'),
(674, 2, 'inicio de sesion', '2014-12-26 21:36:20'),
(675, 2, 'inicio de sesion', '2014-12-29 13:10:42'),
(676, 2, 'inicio de sesion', '2014-12-29 13:22:47'),
(677, 2, 'inicio de sesion', '2014-12-29 15:29:02'),
(678, 2, 'inicio de sesion', '2014-12-29 15:43:44'),
(679, 2, 'inicio de sesion', '2014-12-29 15:49:42'),
(680, 2, 'inicio de sesion', '2014-12-29 16:30:15'),
(681, 2, 'inicio de sesion', '2014-12-29 16:32:15'),
(682, 2, 'inicio de sesion', '2014-12-29 21:30:41'),
(683, 2, 'inicio de sesion', '2014-12-30 14:22:31'),
(684, 2, 'inicio de sesion', '2014-12-30 19:30:10'),
(685, 2, 'inicio de sesion', '2014-12-31 13:19:29'),
(686, 2, 'inicio de sesion', '2014-12-31 14:53:05'),
(687, 2, 'inicio de sesion', '2014-12-31 16:04:09'),
(688, 2, 'inicio de sesion', '2015-01-02 13:24:35'),
(689, 2, 'inicio de sesion', '2015-01-02 08:33:46'),
(690, 2, 'inicio de sesion', '2015-01-02 08:59:08'),
(691, 2, 'inicio de sesion', '2015-01-02 10:30:31'),
(692, 2, 'inicio de sesion', '2015-01-02 11:13:40'),
(693, 2, 'inicio de sesion', '2015-01-02 11:36:47'),
(694, 2, 'inicio de sesion', '2015-01-02 11:48:21'),
(695, 2, 'inicio de sesion', '2015-01-05 08:31:07'),
(696, 2, 'inicio de sesion', '2015-01-05 08:33:28'),
(697, 2, 'Insertar Tipo Bodega Nueva', '2015-01-05 09:02:36'),
(698, 2, 'inicio de sesion', '2015-01-05 14:39:54'),
(699, 2, 'inicio de sesion', '2015-01-05 14:42:06'),
(700, 2, 'inicio de sesion', '2015-01-05 14:45:03'),
(701, 2, 'inicio de sesion', '2015-01-05 14:58:23'),
(702, 2, 'inicio de sesion', '2015-01-06 08:52:33'),
(703, 2, 'inicio de sesion', '2015-01-06 09:21:58'),
(704, 2, 'inicio de sesion', '2015-01-06 11:30:58'),
(705, 2, 'inicio de sesion', '2015-01-07 08:58:59'),
(706, 2, 'inicio de sesion', '2015-01-07 11:07:48'),
(707, 2, 'inicio de sesion', '2015-01-07 11:11:21'),
(708, 2, 'inicio de sesion', '2015-01-08 09:17:23'),
(709, 2, 'inicio de sesion', '2015-01-08 09:19:45'),
(710, 2, 'inicio de sesion', '2015-01-09 08:39:17'),
(711, 2, 'inicio de sesion', '2015-01-13 09:11:50'),
(712, 2, 'inicio de sesion', '2015-01-13 11:03:05'),
(713, 2, 'inicio de sesion', '2015-01-13 11:24:25'),
(714, 2, 'inicio de sesion', '2015-01-13 11:27:31'),
(715, 2, 'inicio de sesion', '2015-01-13 11:31:33'),
(716, 2, 'inicio de sesion', '2015-01-13 11:35:34'),
(717, 2, 'inicio de sesion', '2015-01-13 11:47:04'),
(718, 2, 'inicio de sesion', '2015-01-13 12:00:41'),
(719, 2, 'Borro venta numero 54 del 2014-12-27', '2015-01-13 12:30:10'),
(720, 2, 'inicio de sesion', '2015-01-13 12:30:20'),
(721, 2, 'inicio de sesion', '2015-01-13 14:21:44'),
(722, 2, 'inicio de sesion', '2015-01-14 08:32:32'),
(723, 2, 'inicio de sesion', '2015-01-14 09:01:28'),
(724, 2, 'inicio de sesion', '2015-01-14 09:09:30'),
(725, 2, 'inicio de sesion', '2015-01-14 09:12:49'),
(726, 2, 'inicio de sesion', '2015-01-14 09:13:28'),
(727, 2, 'inicio de sesion', '2015-01-14 09:13:40'),
(728, 2, 'inicio de sesion', '2015-01-14 09:13:49'),
(729, 2, 'inicio de sesion', '2015-01-14 10:14:49'),
(730, 2, 'inicio de sesion', '2015-01-14 10:15:54'),
(731, 2, 'inicio de sesion', '2015-01-14 10:16:26'),
(732, 2, 'inicio de sesion', '2015-01-14 10:20:19'),
(733, 2, 'inicio de sesion', '2015-01-14 10:24:47'),
(734, 2, 'inicio de sesion', '2015-01-14 10:30:02'),
(735, 2, 'inicio de sesion', '2015-01-14 10:34:47'),
(736, 2, 'inicio de sesion', '2015-01-14 10:38:34'),
(737, 2, 'inicio de sesion', '2015-01-14 10:47:22'),
(738, 2, 'inicio de sesion', '2015-01-14 16:19:20'),
(739, 2, 'inicio de sesion', '2015-01-14 17:12:18'),
(740, 2, 'inicio de sesion', '2015-01-14 17:14:06'),
(741, 2, 'inicio de sesion', '2015-01-14 17:15:47'),
(742, 2, 'inicio de sesion', '2015-01-14 17:19:11'),
(743, 2, 'inicio de sesion', '2015-01-15 10:08:26'),
(744, 2, 'inicio de sesion', '2015-01-15 12:00:13'),
(745, 2, 'inicio de sesion', '2015-01-15 14:36:24'),
(746, 2, 'inicio de sesion', '2015-01-15 14:36:54'),
(747, 2, 'inicio de sesion', '2015-01-15 14:56:38'),
(748, 2, 'inicio de sesion', '2015-01-15 14:57:00'),
(749, 2, 'inicio de sesion', '2015-01-15 14:57:17'),
(750, 2, 'Borro venta numero  del ', '2015-01-15 15:03:29'),
(751, 2, 'inicio de sesion', '2015-01-15 15:05:35'),
(752, 2, 'inicio de sesion', '2015-01-15 15:21:13'),
(753, 2, 'inicio de sesion', '2015-01-15 15:52:28'),
(754, 2, 'inicio de sesion', '2015-01-15 15:55:51'),
(755, 2, 'inicio de sesion', '2015-01-15 15:56:43'),
(756, 2, 'inicio de sesion', '2015-01-15 16:09:19'),
(757, 2, 'inicio de sesion', '2015-01-15 16:16:17'),
(758, 2, 'inicio de sesion', '2015-01-15 16:39:03'),
(759, 2, 'Borro venta numero 2 del 2014-11-01', '2015-01-15 17:28:14'),
(760, 2, 'Borro venta numero 81 del 2015-01-11', '2015-01-15 17:28:32'),
(761, 2, 'Borro venta numero 82 del 2015-01-11', '2015-01-15 17:28:40'),
(762, 2, 'Borro venta numero 80 del 2015-01-11', '2015-01-15 17:28:44'),
(763, 2, 'inicio de sesion', '2015-01-15 17:29:12'),
(764, 2, 'inicio de sesion', '2015-01-15 17:33:52'),
(765, 2, 'inicio de sesion', '2015-01-15 17:38:25'),
(766, 2, 'Borro venta numero 6 del 2014-11-01', '2015-01-15 17:39:57'),
(767, 2, 'Borro venta numero 4 del 2014-11-01', '2015-01-15 17:40:11'),
(768, 2, 'Borro venta numero 3 del 2014-11-01', '2015-01-15 17:40:49'),
(769, 2, 'Borro venta numero 1 del 2014-11-01', '2015-01-15 17:41:00'),
(770, 2, 'Borro venta numero 8 del 2014-11-02', '2015-01-15 17:41:09'),
(771, 2, 'Borro venta numero 7 del 2014-11-02', '2015-01-15 17:41:19'),
(772, 2, 'Borro venta numero 10 del 2014-11-03', '2015-01-15 17:42:22'),
(773, 2, 'Borro venta numero 9 del 2014-11-03', '2015-01-15 17:42:32'),
(774, 2, 'Borro venta numero 15 del 2014-11-04', '2015-01-15 17:42:40'),
(775, 2, 'Borro venta numero 14 del 2014-11-04', '2015-01-15 17:42:49'),
(776, 2, 'Borro venta numero 13 del 2014-11-04', '2015-01-15 17:43:01'),
(777, 2, 'Borro venta numero 12 del 2014-11-04', '2015-01-15 17:43:13'),
(778, 2, 'Borro venta numero 11 del 2014-11-04', '2015-01-15 17:43:25'),
(779, 2, 'Borro venta numero 18 del 2014-11-05', '2015-01-15 17:43:45'),
(780, 2, 'Borro venta numero 17 del 2014-11-05', '2015-01-15 17:43:56'),
(781, 2, 'Borro venta numero 16 del 2014-11-05', '2015-01-15 17:44:07'),
(782, 2, 'Borro venta numero 19 del 2014-11-06', '2015-01-15 17:44:22'),
(783, 2, 'Borro venta numero 20 del 2014-11-07', '2015-01-15 17:44:31'),
(784, 2, 'Borro venta numero 23 del 2014-11-08', '2015-01-15 17:44:41'),
(785, 2, 'Borro venta numero 22 del 2014-11-08', '2015-01-15 17:44:49'),
(786, 2, 'Borro venta numero 21 del 2014-11-08', '2015-01-15 17:44:59'),
(787, 2, 'inicio de sesion', '2015-01-16 08:20:18'),
(788, 2, 'inicio de sesion', '2015-01-16 11:35:44'),
(789, 2, 'inicio de sesion', '2015-01-16 15:07:49'),
(790, 2, 'inicio de sesion', '2015-01-16 16:08:01'),
(791, 2, 'inicio de sesion', '2015-01-17 08:53:33'),
(792, 2, 'Borro venta numero 70 del 0000-00-00', '2015-01-17 08:58:08'),
(793, 2, 'Borro venta numero 62 del 0000-00-00', '2015-01-17 08:58:17'),
(794, 2, 'inicio de sesion', '2015-01-17 09:13:05'),
(795, 2, 'inicio de sesion', '2015-01-17 09:13:11'),
(796, 2, 'inicio de sesion', '2015-01-17 09:13:24'),
(797, 2, 'inicio de sesion', '2015-01-17 10:23:45'),
(798, 2, 'inicio de sesion', '2015-01-17 11:26:59'),
(799, 2, 'inicio de sesion', '2015-01-19 08:59:32'),
(800, 2, 'inicio de sesion', '2015-01-19 13:14:54'),
(801, 2, 'inicio de sesion', '2015-01-19 13:31:03'),
(802, 2, 'inicio de sesion', '2015-01-20 08:39:33'),
(803, 2, 'inicio de sesion', '2015-01-20 09:13:50'),
(804, 2, 'inicio de sesion', '2015-01-20 09:46:55'),
(805, 2, 'inicio de sesion', '2015-01-20 10:29:25'),
(806, 2, 'inicio de sesion', '2015-01-20 14:22:19'),
(807, 2, 'inicio de sesion', '2015-01-20 14:23:15'),
(808, 2, 'inicio de sesion', '2015-01-20 14:36:15'),
(809, 2, 'Borro venta numero 88 del 2015-01-15', '2015-01-20 15:43:19'),
(810, 2, 'Borro venta numero 60 del 2014-12-29', '2015-01-20 16:02:50'),
(811, 2, 'inicio de sesion', '2015-01-20 16:04:11'),
(812, 2, 'inicio de sesion', '2015-01-20 16:56:15'),
(813, 2, 'Borro venta numero 90 del 2015-01-11', '2015-01-20 17:06:48'),
(814, 2, 'Borro venta numero 75 del 2015-01-09', '2015-01-20 17:10:56'),
(815, 2, 'Borro venta numero 61 del 2014-12-30', '2015-01-20 17:16:04'),
(816, 2, 'Borro venta numero 85 del 2014-12-27', '2015-01-20 17:19:54'),
(817, 2, 'inicio de sesion', '2015-01-21 09:10:48'),
(818, 2, 'inicio de sesion', '2015-01-21 09:12:27'),
(819, 2, 'inicio de sesion', '2015-01-21 10:33:40'),
(820, 2, 'Borro venta numero 98 del 2015-01-21', '2015-01-21 10:36:00'),
(821, 2, 'inicio de sesion', '2015-01-21 11:38:27'),
(822, 2, 'inicio de sesion', '2015-01-21 11:40:59'),
(823, 2, 'inicio de sesion', '2015-01-21 11:44:53'),
(824, 2, 'inicio de sesion', '2015-01-21 14:31:05'),
(825, 2, 'Borro venta numero 26 del 2014-12-01', '2015-01-21 14:35:13'),
(826, 2, 'inicio de sesion', '2015-01-21 14:35:28'),
(827, 2, 'inicio de sesion', '2015-01-21 14:59:50'),
(828, 2, 'Borro venta numero 99 del 2014-12-01', '2015-01-21 15:02:30'),
(829, 2, 'Borro venta numero 96 del 2014-12-30', '2015-01-21 15:09:19'),
(830, 2, 'Borro venta numero 48 del 2014-12-13', '2015-01-21 15:13:15'),
(831, 2, 'Borro venta numero 47 del 2014-12-13', '2015-01-21 15:13:28'),
(832, 2, 'Borro venta numero 46 del 2014-12-13', '2015-01-21 15:13:37'),
(833, 2, 'Borro venta numero 38 del 2014-12-05', '2015-01-21 15:22:42'),
(834, 2, 'Borro venta numero 40 del 2014-12-05', '2015-01-21 15:23:06'),
(835, 2, 'Borro venta numero 97 del 2014-12-27', '2015-01-21 17:33:24'),
(836, 2, 'Borro venta numero 104 del 2014-12-13', '2015-01-21 17:44:30'),
(837, 2, 'inicio de sesion', '2015-01-22 08:26:10'),
(838, 2, 'inicio de sesion', '2015-01-22 08:29:10'),
(839, 2, 'inicio de sesion', '2015-01-22 08:29:42'),
(840, 2, 'inicio de sesion', '2015-01-22 09:11:54'),
(841, 2, 'Borro venta numero 101 del 2014-12-30', '2015-01-22 09:27:37'),
(842, 2, 'Borro venta numero 25 del 2014-12-01', '2015-01-22 09:37:23'),
(843, 2, 'Borro venta numero 112 del 2014-12-01', '2015-01-22 09:49:08'),
(844, 2, 'inicio de sesion', '2015-01-22 09:53:31'),
(845, 2, 'inicio de sesion', '2015-01-22 09:54:01'),
(846, 2, 'inicio de sesion', '2015-01-22 09:54:49'),
(847, 2, 'Borro venta numero 107 del 2015-01-27', '2015-01-22 09:57:02'),
(848, 2, 'Borro venta numero 113 del 2015-01-22', '2015-01-22 09:57:07'),
(849, 2, 'inicio de sesion', '2015-01-22 10:28:03'),
(850, 2, 'inicio de sesion', '2015-01-22 10:28:18'),
(851, 2, 'inicio de sesion', '2015-01-22 10:28:20'),
(852, 2, 'inicio de sesion', '2015-01-22 10:28:22'),
(853, 2, 'inicio de sesion', '2015-01-22 15:15:23'),
(854, 2, 'inicio de sesion', '2015-01-22 17:02:24'),
(855, 2, 'inicio de sesion', '2015-01-22 17:31:22'),
(856, 2, 'inicio de sesion', '2015-01-23 08:16:52'),
(857, 2, 'inicio de sesion', '2015-01-23 08:17:41'),
(858, 2, 'inicio de sesion', '2015-01-23 08:38:31'),
(859, 2, 'inicio de sesion', '2015-01-23 09:55:58'),
(860, 2, 'inicio de sesion', '2015-01-26 09:06:56'),
(861, 2, 'inicio de sesion', '2015-01-26 09:26:13'),
(862, 2, 'inicio de sesion', '2015-01-26 09:47:47'),
(863, 2, 'inicio de sesion', '2015-01-26 10:28:30'),
(864, 2, 'inicio de sesion', '2015-01-26 10:31:33'),
(865, 2, 'inicio de sesion', '2015-01-26 11:31:43'),
(866, 2, 'inicio de sesion', '2015-01-26 11:32:09'),
(867, 2, 'inicio de sesion', '2015-01-26 11:32:28'),
(868, 2, 'inicio de sesion', '2015-01-26 11:32:44'),
(869, 2, 'inicio de sesion', '2015-01-26 11:33:16'),
(870, 2, 'inicio de sesion', '2015-01-26 11:33:44'),
(871, 2, 'inicio de sesion', '2015-01-26 11:40:27'),
(872, 2, 'inicio de sesion', '2015-01-26 11:41:41'),
(873, 2, 'inicio de sesion', '2015-01-26 11:44:37'),
(874, 2, 'inicio de sesion', '2015-01-26 11:46:21'),
(875, 2, 'inicio de sesion', '2015-01-26 11:47:05'),
(876, 2, 'inicio de sesion', '2015-01-26 11:47:59'),
(877, 2, 'inicio de sesion', '2015-01-26 11:48:36'),
(878, 2, 'inicio de sesion', '2015-01-26 11:49:41'),
(879, 2, 'inicio de sesion', '2015-01-26 11:56:02'),
(880, 2, 'inicio de sesion', '2015-01-26 11:57:59'),
(881, 2, 'inicio de sesion', '2015-01-26 12:01:28'),
(882, 2, 'inicio de sesion', '2015-01-26 12:02:00'),
(883, 2, 'inicio de sesion', '2015-01-26 14:26:19'),
(884, 2, 'inicio de sesion', '2015-01-26 14:35:22'),
(885, 2, 'inicio de sesion', '2015-01-26 14:36:58'),
(886, 2, 'inicio de sesion', '2015-01-26 14:38:59'),
(887, 2, 'inicio de sesion', '2015-01-26 15:01:55'),
(888, 2, 'inicio de sesion', '2015-01-26 15:12:46'),
(889, 2, 'Borro venta numero 115 del 2015-01-16', '2015-01-26 15:13:12'),
(890, 2, 'inicio de sesion', '2015-01-26 15:20:37'),
(891, 2, 'inicio de sesion', '2015-01-26 15:25:11'),
(892, 2, 'inicio de sesion', '2015-01-26 15:25:20'),
(893, 2, 'inicio de sesion', '2015-01-26 15:35:02'),
(894, 2, 'inicio de sesion', '2015-01-27 09:28:37'),
(895, 2, 'inicio de sesion', '2015-01-27 09:30:24'),
(896, 2, 'inicio de sesion', '2015-01-27 11:28:23'),
(897, 2, 'inicio de sesion', '2015-01-27 15:05:33'),
(898, 2, 'inicio de sesion', '2015-01-27 15:28:06'),
(899, 2, 'inicio de sesion', '2015-01-27 16:03:36'),
(900, 2, 'inicio de sesion', '2015-01-27 16:07:37'),
(901, 2, 'inicio de sesion', '2015-01-27 16:11:36'),
(902, 2, 'Borro venta numero 130 del 2015-01-23', '2015-01-27 16:25:18'),
(903, 2, 'inicio de sesion', '2015-01-27 17:43:32'),
(904, 2, 'inicio de sesion', '2015-01-27 17:48:03'),
(905, 2, 'inicio de sesion', '2015-01-27 17:48:58'),
(906, 2, 'inicio de sesion', '2015-01-28 08:40:55'),
(907, 2, 'inicio de sesion', '2015-01-28 08:50:42'),
(908, 2, 'inicio de sesion', '2015-01-28 08:52:02'),
(909, 2, 'inicio de sesion', '2015-01-28 09:00:25'),
(910, 2, 'inicio de sesion', '2015-01-28 09:12:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tipo`
--

CREATE TABLE IF NOT EXISTS `usuario_tipo` (
  `idusuario` bigint(20) NOT NULL,
  `tipousuario` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_tipo`
--

INSERT INTO `usuario_tipo` (`idusuario`, `tipousuario`) VALUES
(2, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
`idvehiculo` int(4) NOT NULL,
  `placa` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
`idventa` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `documentoventa` bigint(20) NOT NULL,
  `tipoventa` int(2) NOT NULL,
  `idcliente` int(4) NOT NULL,
  `servidumbre` bigint(20) NOT NULL,
  `asopal` bigint(20) NOT NULL,
  `cargeplaya` bigint(20) NOT NULL,
  `transporteplanta` bigint(20) NOT NULL,
  `cargeclente` bigint(20) NOT NULL,
  `carretajeylavado` bigint(20) NOT NULL,
  `vale` int(12) NOT NULL,
  `comisionespecial` bigint(20) NOT NULL,
  `comisionplantas` bigint(20) NOT NULL,
  `comisionventas` bigint(20) NOT NULL,
  `costosventa` int(11) NOT NULL,
  `valorventa` bigint(20) NOT NULL,
  `idproveedorcargecliente` int(11) NOT NULL,
  `idproveedorcargeplaya` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=145 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `fecha`, `documentoventa`, `tipoventa`, `idcliente`, `servidumbre`, `asopal`, `cargeplaya`, `transporteplanta`, `cargeclente`, `carretajeylavado`, `vale`, `comisionespecial`, `comisionplantas`, `comisionventas`, `costosventa`, `valorventa`, `idproveedorcargecliente`, `idproveedorcargeplaya`) VALUES
(92, '2015-01-11', 0, 2, 72, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 200000, 0, 0),
(111, '2014-12-01', 0, 1, 42, 18000, 22500, 30000, 0, 0, 0, 0, 0, 0, 0, 70500, 180000, 0, 13),
(100, '2014-12-01', 0, 1, 42, 18000, 22500, 30000, 0, 0, 0, 0, 0, 0, 0, 70500, 180000, 0, 13),
(27, '2014-12-01', 0, 2, 54, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 5, 0),
(28, '2014-12-01', 0, 2, 41, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 5, 0),
(29, '2014-12-02', 0, 1, 55, 35994, 31500, 42000, 0, 0, 0, 0, 0, 0, 0, 67494, 240000, 0, 13),
(30, '2014-12-02', 0, 2, 54, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(32, '2014-12-02', 0, 2, 54, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(33, '2014-12-03', 0, 2, 5, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 0, 0),
(34, '2014-12-04', 0, 2, 54, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 0, 0),
(35, '2014-12-04', 0, 2, 40, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(36, '2014-12-05', 0, 2, 49, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 130000, 0, 0),
(37, '2014-12-05', 0, 2, 56, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 140000, 0, 0),
(106, '2014-12-05', 0, 3, 57, 18000, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 205500, 260000, 0, 0),
(39, '2014-12-07', 0, 2, 7, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(105, '2014-12-05', 0, 3, 58, 18000, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 205500, 280000, 0, 0),
(41, '2014-12-05', 0, 2, 59, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 0, 0),
(42, '2014-12-06', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 235000, 0, 0),
(43, '2014-12-09', 0, 2, 60, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(44, '2014-12-09', 0, 2, 7, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 90000, 0, 0),
(45, '2014-12-09', 0, 2, 47, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 0, 0),
(102, '2014-12-13', 0, 3, 7, 18000, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 205500, 260000, 0, 0),
(103, '2014-12-13', 0, 3, 7, 18000, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 205500, 250000, 0, 0),
(108, '2014-12-13', 0, 3, 7, 18000, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 205500, 260000, 13, 0),
(50, '2014-12-16', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 0, 0),
(51, '2014-12-17', 0, 2, 40, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 0, 0),
(52, '2014-12-17', 0, 2, 61, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 105000, 0, 0),
(53, '2014-12-18', 0, 2, 62, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 130000, 0, 0),
(129, '2015-01-16', 0, 1, 76, 18000, 22500, 30000, 0, 0, 0, 0, 0, 0, 0, 70500, 180000, 0, 13),
(55, '2014-12-28', 0, 2, 57, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 230000, 0, 0),
(56, '2014-12-29', 0, 2, 64, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 230000, 0, 0),
(57, '2014-12-29', 0, 2, 64, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 125000, 0, 0),
(58, '2014-12-30', 0, 2, 64, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 230000, 0, 0),
(59, '2014-12-31', 0, 2, 64, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 115000, 0, 0),
(93, '2014-12-29', 0, 1, 65, 11998, 10500, 14000, 0, 0, 0, 0, 0, 0, 0, 36498, 105000, 0, 13),
(110, '2014-12-27', 0, 1, 63, 10500, 10500, 14000, 0, 0, 0, 0, 0, 0, 0, 35000, 130000, 0, 13),
(63, '2014-12-29', 0, 2, 66, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 280000, 0, 0),
(64, '2014-12-30', 0, 2, 9, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 105000, 0, 0),
(65, '2015-01-02', 0, 2, 64, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 230000, 0, 0),
(66, '2015-01-02', 0, 2, 41, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 225000, 0, 0),
(67, '2015-01-03', 0, 2, 64, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(68, '2015-01-03', 0, 2, 67, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 0, 0),
(69, '2015-01-04', 0, 2, 52, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(71, '2015-01-06', 0, 2, 64, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 0, 0),
(72, '2015-01-07', 0, 2, 52, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(73, '2015-01-07', 0, 2, 9, 17990, 21000, 28000, 42000, 28000, 0, 0, 0, 0, 0, 136990, 280000, 0, 0),
(74, '2015-01-08', 0, 2, 68, 18000, 30000, 40000, 60000, 40000, 0, 0, 0, 0, 0, 188000, 360000, 0, 0),
(95, '2015-01-09', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 0, 0),
(76, '2015-01-10', 0, 2, 69, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 140000, 0, 0),
(77, '2015-01-10', 0, 2, 70, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 108000, 0, 0),
(78, '2015-01-10', 0, 2, 71, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 120000, 0, 0),
(79, '2015-01-10', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 0, 0),
(89, '2015-01-11', 0, 2, 72, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 200000, 0, 0),
(91, '2015-01-11', 0, 2, 52, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 0, 0),
(94, '2015-01-11', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 0, 0),
(83, '2015-01-12', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 0, 0),
(84, '2015-01-13', 0, 2, 9, 14000, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 73500, 140000, 0, 0),
(86, '2015-01-14', 0, 2, 73, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 130000, 0, 0),
(87, '2015-01-14', 0, 2, 72, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 230000, 0, 0),
(109, '2014-12-30', 0, 1, 65, 11998, 10500, 14000, 0, 0, 0, 0, 0, 0, 0, 36498, 105000, 0, 13),
(114, '2015-01-16', 0, 2, 75, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 13, 0),
(116, '2015-01-16', 0, 2, 77, 18000, 18000, 24000, 36000, 24000, 0, 0, 0, 0, 0, 120000, 220000, 13, 0),
(117, '2015-01-16', 0, 2, 78, 17990, 21000, 28000, 42000, 28000, 0, 0, 0, 0, 0, 136990, 250000, 13, 0),
(118, '2015-01-18', 0, 2, 79, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 100000, 13, 0),
(119, '2015-01-18', 0, 2, 80, 17990, 21000, 28000, 42000, 28000, 0, 0, 0, 0, 0, 136990, 220000, 13, 0),
(120, '2015-01-19', 0, 2, 7, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 13, 0),
(121, '2015-01-19', 0, 2, 81, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 13, 0),
(122, '2015-01-19', 0, 2, 7, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 13, 0),
(123, '2015-01-19', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 13, 0),
(124, '2015-01-20', 0, 2, 73, 12000, 6000, 8000, 12000, 8000, 0, 0, 0, 0, 0, 46000, 80000, 13, 0),
(125, '2015-01-20', 0, 2, 47, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 120000, 0, 0),
(126, '2015-01-20', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 13, 0),
(127, '2015-01-20', 0, 2, 80, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 250000, 13, 0),
(128, '2015-01-22', 0, 2, 75, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 13, 0),
(136, '2015-01-23', 0, 3, 82, 17990, 21000, 28000, 42000, 28000, 56000, 0, 0, 0, 0, 192990, 420000, 13, 0),
(131, '2015-01-23', 0, 3, 85, 22500, 22500, 30000, 45000, 30000, 60000, 0, 0, 0, 0, 210000, 450000, 13, 0),
(132, '2015-01-23', 0, 2, 72, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 13, 0),
(133, '2015-01-23', 0, 2, 83, 12000, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 63000, 100000, 13, 0),
(134, '2015-01-23', 0, 2, 86, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 240000, 13, 0),
(135, '2015-01-23', 0, 2, 84, 18000, 27000, 36000, 54000, 36000, 0, 0, 0, 0, 0, 171000, 400000, 13, 0),
(137, '2015-01-26', 0, 3, 7, 10500, 10500, 14000, 21000, 14000, 28000, 0, 0, 0, 0, 98000, 160000, 13, 0),
(138, '2015-01-26', 0, 2, 79, 10284, 9000, 12000, 18000, 12000, 0, 0, 0, 0, 0, 61284, 80000, 13, 0),
(139, '2015-01-27', 0, 2, 87, 11998, 10500, 14000, 21000, 14000, 0, 0, 0, 0, 0, 71498, 120000, 13, 0),
(140, '2015-01-27', 0, 2, 72, 17990, 21000, 28000, 42000, 28000, 0, 0, 0, 0, 0, 136990, 240000, 13, 0),
(141, '2015-01-27', 0, 2, 51, 23996, 21000, 28000, 42000, 28000, 0, 0, 0, 0, 0, 142996, 240000, 13, 0),
(142, '2015-01-27', 0, 2, 85, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 270000, 13, 0),
(143, '2015-01-27', 0, 3, 45, 17976, 21000, 28000, 42000, 28000, 56000, 0, 0, 0, 0, 192976, 392000, 13, 0),
(144, '2015-01-27', 0, 2, 10, 18000, 22500, 30000, 45000, 30000, 0, 0, 0, 0, 0, 145500, 220000, 13, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventacompra`
--

CREATE TABLE IF NOT EXISTS `ventacompra` (
`idventacompra` bigint(20) NOT NULL,
  `idcompra` bigint(20) NOT NULL,
  `cantidad` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_producto`
--

CREATE TABLE IF NOT EXISTS `venta_producto` (
  `idventa` bigint(20) NOT NULL,
  `idiventario_producto` bigint(20) NOT NULL,
  `destino` varchar(60) NOT NULL,
  `viajes` varchar(10) NOT NULL,
  `metros3` varchar(10) NOT NULL,
  `totalmetros` varchar(10) NOT NULL,
  `valorunitario` varchar(10) NOT NULL,
  `valortotalproducto` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_producto`
--

INSERT INTO `venta_producto` (`idventa`, `idiventario_producto`, `destino`, `viajes`, `metros3`, `totalmetros`, `valorunitario`, `valortotalproducto`) VALUES
(91, 12, 'LA VEGA', '1', '15', '15', '', '250000'),
(111, 3, '', '1', '15', '15', '', '180000'),
(100, 9, 'MISTER', '1', '15', '15', '', '180000'),
(27, 12, 'PAIME', '1', '15', '15', '', '250000'),
(28, 12, 'VILLETA', '1', '15', '15', '', '250000'),
(29, 3, 'CARLOS JULIO', '3', '07', '21', '', '240000'),
(33, 12, 'YOSIMAR', '1', '15', '15', '', '240000'),
(32, 12, 'PAIME', '1', '15', '15', '', '250000'),
(34, 12, 'PAIME', '1', '15', '15', '', '240000'),
(0, 12, 'MARIQUITA', '1', '07', '7', '', '140000'),
(35, 12, 'PALAMA REAL', '1', '15', '15', '', '250000'),
(36, 12, 'MARIQUITA', '1', '07', '7', '', '130000'),
(37, 12, 'MARQUETALIA', '1', '07', '7', '', '140000'),
(0, 13, 'YILMER', '1', '15', '15', '', '260000'),
(106, 13, 'EL PEÃ‘OL', '1', '15', '15', '', '260000'),
(0, 12, 'HNO YOSIMAR', '1', '07', '7', '', '120000'),
(0, 12, 'MARCOS', '1', '15', '15', '', '235000'),
(39, 12, 'OTROS', '1', '15', '15', '', '250000'),
(105, 13, 'YEPEZ', '1', '15', '15', '', '280000'),
(41, 12, 'HNO YOSIMAR', '1', '07', '7', '', '120000'),
(42, 12, 'MARCOS', '1', '15', '15', '', '235000'),
(43, 12, 'VILLETA', '1', '15', '15', '', '250000'),
(44, 12, 'OTROS', '1', '06', '6', '', '90000'),
(45, 12, 'PORFIDIO', '1', '07', '7', '0', '120000'),
(102, 13, 'OTROS', '1', '15', '15', '', '260000'),
(103, 13, 'OTROS', '1', '15', '15', '', '250000'),
(50, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(51, 12, 'PALMA REAL', '1', '07', '7', '', '120000'),
(52, 12, 'HECTOR RETRO', '1', '07', '7', '', '105000'),
(53, 12, 'MARIQUITA', '1', '07', '7', '', '130000'),
(55, 12, 'PEÑOL', '1', '15', '15', '', '230000'),
(56, 12, 'EL PEÑOL', '1', '15', '15', '', '230000'),
(57, 12, 'EL PEÑOL', '1', '07', '7', '', '125000'),
(58, 12, 'EL PEÑOL', '1', '15', '15', '', '230000'),
(59, 12, 'EL PEÑOL', '1', '07', '7', '', '115000'),
(93, 8, 'HAWEI', '1', '07', '7', '', '105000'),
(110, 8, 'MARIQUITA', '1', '07', '7', '', '130000'),
(63, 12, 'FRNACISCO', '1', '15', '15', '', '280000'),
(64, 8, 'GEREMIAS', '1', '07', '7', '', '105000'),
(65, 12, 'EL PEÃ‘OL', '1', '15', '15', '', '230000'),
(66, 12, 'VILLETA', '1', '15', '15', '', '225000'),
(67, 7, 'EL PEÃ‘OL', '1', '15', '15', '', '250000'),
(68, 12, 'VOLQUETA MACO', '1', '15', '15', '', '240000'),
(69, 12, 'LA VEGA', '1', '15', '15', '', '250000'),
(71, 12, 'EL PEÃ‘OL', '1', '15', '15', '0', '240000'),
(72, 12, 'LA VEGA', '1', '15', '15', '', '250000'),
(73, 12, 'GEREMIAS', '2', '07', '14', '', '280000'),
(74, 12, 'AMIGO CHAOS', '1', '20', '20', '', '360000'),
(95, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(76, 12, 'MAIZENA', '1', '07', '7', '', '140000'),
(77, 12, 'AMIGO WILMAR', '1', '06', '6', '', '108000'),
(78, 12, 'CAMION', '1', '06', '6', '', '120000'),
(79, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(89, 0, 'RAMIRO', '1', '15', '15', '', '200000'),
(94, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(83, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(84, 12, 'GEREMIAS', '1', '07', '7', '', '140000'),
(86, 12, 'ESPAÃ‘OL', '1', '07', '7', '', '130000'),
(87, 12, 'RAMIRO', '1', '15', '15', '', '230000'),
(92, 12, 'RAMIRO', '1', '15', '15', '', '200000'),
(108, 13, 'OTROS', '1', '15', '15', '', '260000'),
(109, 8, '', '1', '07', '7', '', '105000'),
(114, 12, 'ALIRIO', '1', '15', '15', '', '240000'),
(129, 3, 'CHIMBILA', '1', '15', '15', '', '180000'),
(116, 12, 'CARRILLO', '1', '12', '12', '', '220000'),
(117, 12, 'PEPE', '1', '14', '14', '', '250000'),
(118, 12, 'LAGARTIJA', '1', '06', '6', '', '100000'),
(119, 12, 'FABIAN', '1', '14', '14', '', '220000'),
(120, 12, 'OTROS', '1', '07', '7', '', '120000'),
(121, 12, 'ISMAEL', '1', '07', '7', '', '120000'),
(122, 12, 'OTROS', '1', '15', '15', '', '240000'),
(123, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(124, 12, 'ESPAÃ‘OL', '1', '04', '4', '', '80000'),
(125, 12, 'PORFIDIO', '1', '06', '6', '', '120000'),
(126, 12, 'MARCOS', '1', '15', '15', '', '220000'),
(127, 12, 'FABIAN', '1', '15', '15', '', '250000'),
(128, 12, 'ALIRIO', '1', '15', '15', '', '240000'),
(136, 16, 'ASOCIACION', '2', '07', '14', '', '420000'),
(131, 16, 'SAMANA', '1', '15', '15', '', '450000'),
(132, 12, 'RAMIRO', '1', '07', '7', '', '120000'),
(133, 12, 'VOLQUETA', '1', '06', '6', '', '100000'),
(134, 12, 'MAKO', '1', '15', '15', '', '240000'),
(135, 12, 'HIUNDAI', '1', '18', '18', '', '400000'),
(137, 16, 'OTROS', '1', '07', '7', '', '160000'),
(138, 12, 'LAGARTIJA', '1', '06', '6', '', '80000'),
(139, 12, 'FRESNO', '1', '07', '7', '', '120000'),
(140, 12, 'RAMIRO', '2', '07', '14', '', '240000'),
(141, 12, 'OSCAR', '2', '07', '14', '', '240000'),
(142, 12, 'SAMANA', '1', '15', '15', '', '270000'),
(143, 15, '', '1', '14', '14', '', '392000'),
(144, 12, 'MARCOS', '1', '15', '15', '', '220000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE IF NOT EXISTS `viaje` (
`idviaje` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idventa` bigint(20) NOT NULL,
  `valorm3` int(11) NOT NULL,
  `totalmetros` int(11) NOT NULL,
  `valorviaje` bigint(20) NOT NULL,
  `costoviaje` bigint(20) NOT NULL,
  `idvehiculo` int(11) NOT NULL,
  `idconductor` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`idviaje`, `idproveedor`, `idventa`, `valorm3`, `totalmetros`, `valorviaje`, `costoviaje`, `idvehiculo`, `idconductor`) VALUES
(1, 5, 18, 6000, 7, 42000, 42000, 0, 0),
(2, 5, 20, 7000, 7, 49000, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ajusteinventario`
--
ALTER TABLE `ajusteinventario`
 ADD PRIMARY KEY (`idajusteinventario`);

--
-- Indices de la tabla `asignarcarretaje`
--
ALTER TABLE `asignarcarretaje`
 ADD PRIMARY KEY (`idasignar`);

--
-- Indices de la tabla `bodega`
--
ALTER TABLE `bodega`
 ADD PRIMARY KEY (`idbodega`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
 ADD PRIMARY KEY (`idcaja`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
 ADD PRIMARY KEY (`idcompra`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
 ADD PRIMARY KEY (`idcompra`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
 ADD PRIMARY KEY (`idconductor`);

--
-- Indices de la tabla `convertirmaterial`
--
ALTER TABLE `convertirmaterial`
 ADD PRIMARY KEY (`idconvertirmaterial`);

--
-- Indices de la tabla `costoscompra`
--
ALTER TABLE `costoscompra`
 ADD PRIMARY KEY (`idcostocompra`);

--
-- Indices de la tabla `cuenta_cobrar`
--
ALTER TABLE `cuenta_cobrar`
 ADD PRIMARY KEY (`idcuenta_cobrar`);

--
-- Indices de la tabla `cuenta_pagar`
--
ALTER TABLE `cuenta_pagar`
 ADD PRIMARY KEY (`idcuenta_pagar`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
 ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `entrada_caja`
--
ALTER TABLE `entrada_caja`
 ADD PRIMARY KEY (`identrada_caja`);

--
-- Indices de la tabla `entrada_producto`
--
ALTER TABLE `entrada_producto`
 ADD PRIMARY KEY (`identradaproducto`);

--
-- Indices de la tabla `inventario_producto`
--
ALTER TABLE `inventario_producto`
 ADD PRIMARY KEY (`idinventario_producto`);

--
-- Indices de la tabla `movimientoaja`
--
ALTER TABLE `movimientoaja`
 ADD PRIMARY KEY (`idmovimientocaja`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`idmunicipio`);

--
-- Indices de la tabla `numerodocumento`
--
ALTER TABLE `numerodocumento`
 ADD PRIMARY KEY (`idnumerodocumento`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `salida_caja`
--
ALTER TABLE `salida_caja`
 ADD PRIMARY KEY (`idsalida_caja`);

--
-- Indices de la tabla `salida_producto`
--
ALTER TABLE `salida_producto`
 ADD PRIMARY KEY (`idsalida_producto`);

--
-- Indices de la tabla `tipobodega`
--
ALTER TABLE `tipobodega`
 ADD PRIMARY KEY (`idtipobodeba`);

--
-- Indices de la tabla `tipoproveedor`
--
ALTER TABLE `tipoproveedor`
 ADD PRIMARY KEY (`idtipoproveedor`);

--
-- Indices de la tabla `transportematerial`
--
ALTER TABLE `transportematerial`
 ADD PRIMARY KEY (`idtransporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `usuarioeventos`
--
ALTER TABLE `usuarioeventos`
 ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
 ADD PRIMARY KEY (`idvehiculo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
 ADD PRIMARY KEY (`idventa`);

--
-- Indices de la tabla `ventacompra`
--
ALTER TABLE `ventacompra`
 ADD PRIMARY KEY (`idventacompra`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
 ADD PRIMARY KEY (`idviaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ajusteinventario`
--
ALTER TABLE `ajusteinventario`
MODIFY `idajusteinventario` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `asignarcarretaje`
--
ALTER TABLE `asignarcarretaje`
MODIFY `idasignar` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `bodega`
--
ALTER TABLE `bodega`
MODIFY `idbodega` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
MODIFY `idcaja` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `idcliente` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
MODIFY `idcompra` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
MODIFY `idcompra` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
MODIFY `idconductor` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `convertirmaterial`
--
ALTER TABLE `convertirmaterial`
MODIFY `idconvertirmaterial` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `costoscompra`
--
ALTER TABLE `costoscompra`
MODIFY `idcostocompra` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cuenta_cobrar`
--
ALTER TABLE `cuenta_cobrar`
MODIFY `idcuenta_cobrar` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cuenta_pagar`
--
ALTER TABLE `cuenta_pagar`
MODIFY `idcuenta_pagar` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entrada_caja`
--
ALTER TABLE `entrada_caja`
MODIFY `identrada_caja` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT de la tabla `entrada_producto`
--
ALTER TABLE `entrada_producto`
MODIFY `identradaproducto` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `inventario_producto`
--
ALTER TABLE `inventario_producto`
MODIFY `idinventario_producto` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `movimientoaja`
--
ALTER TABLE `movimientoaja`
MODIFY `idmovimientocaja` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10010211216;
--
-- AUTO_INCREMENT de la tabla `numerodocumento`
--
ALTER TABLE `numerodocumento`
MODIFY `idnumerodocumento` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
MODIFY `idproveedor` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `salida_caja`
--
ALTER TABLE `salida_caja`
MODIFY `idsalida_caja` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salida_producto`
--
ALTER TABLE `salida_producto`
MODIFY `idsalida_producto` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT de la tabla `tipobodega`
--
ALTER TABLE `tipobodega`
MODIFY `idtipobodeba` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tipoproveedor`
--
ALTER TABLE `tipoproveedor`
MODIFY `idtipoproveedor` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `transportematerial`
--
ALTER TABLE `transportematerial`
MODIFY `idtransporte` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarioeventos`
--
ALTER TABLE `usuarioeventos`
MODIFY `idevento` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=911;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
MODIFY `idvehiculo` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
MODIFY `idventa` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT de la tabla `ventacompra`
--
ALTER TABLE `ventacompra`
MODIFY `idventacompra` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
MODIFY `idviaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
