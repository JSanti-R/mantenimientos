-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-12-2019 a las 20:38:48
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `NumDocumento` int(10) NOT NULL,
  `Celular` int(10) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Asunto` text NOT NULL,
  `Mensaje` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`Nombre`, `Apellido`, `NumDocumento`, `Celular`, `Correo`, `Asunto`, `Mensaje`) VALUES
('', '', 0, 0, 'makekill0107@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `UsuIdUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` text CHARACTER SET utf8 NOT NULL,
  `Apellido` text CHARACTER SET utf8 NOT NULL,
  `NumDocumento` int(10) NOT NULL,
  `Celular` int(10) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Asunto` text NOT NULL,
  `Mensaje` varchar(500) NOT NULL,
  `UsuEstadoSolic` int(10) NOT NULL,
  PRIMARY KEY (`UsuIdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`UsuIdUsuario`, `Nombre`, `Apellido`, `NumDocumento`, `Celular`, `Correo`, `Asunto`, `Mensaje`, `UsuEstadoSolic`) VALUES
(1, 'Juan', 'Rincon', 25698563, 3654586, 'mbns@sdfd.com', 'jdfgjgf', 'hola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlequipos`
--

DROP TABLE IF EXISTS `controlequipos`;
CREATE TABLE IF NOT EXISTS `controlequipos` (
  `CeIdEquipo` int(10) NOT NULL,
  `CeModulo` int(10) NOT NULL,
  `CeEstado` int(10) NOT NULL,
  `Cedescripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`CeIdEquipo`),
  KEY `CeModulo` (`CeModulo`),
  KEY `CeEstado` (`CeEstado`),
  KEY `CeTipSolicitud` (`Cedescripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `controlequipos`
--

INSERT INTO `controlequipos` (`CeIdEquipo`, `CeModulo`, `CeEstado`, `Cedescripcion`) VALUES
(1, 1, 2, 'HP'),
(2, 2, 2, 'Toshiba'),
(3, 3, 2, 'Asus'),
(4, 4, 2, 'Compaq'),
(5, 5, 2, 'Lenovo'),
(6, 6, 2, 'Dell'),
(7, 7, 2, 'Epson'),
(8, 8, 2, 'Hp'),
(9, 9, 2, 'Lexmark'),
(10, 10, 2, 'Richoh'),
(11, 11, 2, 'PC-11'),
(12, 12, 2, 'PC-12'),
(13, 13, 2, 'Ventanilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equiporegistro`
--

DROP TABLE IF EXISTS `equiporegistro`;
CREATE TABLE IF NOT EXISTS `equiporegistro` (
  `UsuIdUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `UsuNombres` varchar(150) NOT NULL,
  `UsuApellidos` varchar(150) NOT NULL,
  `UsuTipoDocumento` int(10) NOT NULL,
  `UsuNumDocumento` varchar(20) NOT NULL,
  `UsuCorreo` varchar(150) NOT NULL,
  `UsuTipUsuario` int(10) NOT NULL,
  `UsutipoSolicitud` int(10) NOT NULL,
  `UsuFechIni` datetime NOT NULL,
  `UsuFechFin` datetime DEFAULT NULL,
  `UsuEstadoSolic` int(10) NOT NULL,
  `UsuCodModulo` int(10) NOT NULL,
  PRIMARY KEY (`UsuIdUsuario`),
  KEY `UsuTipoDocumento` (`UsuTipoDocumento`),
  KEY `UsuTipUsuario` (`UsuTipUsuario`),
  KEY `UsutipoSolicitud` (`UsutipoSolicitud`),
  KEY `UsuEstadoSolic` (`UsuEstadoSolic`),
  KEY `UsuCodModulo` (`UsuCodModulo`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `equiporegistro`
--

INSERT INTO `equiporegistro` (`UsuIdUsuario`, `UsuNombres`, `UsuApellidos`, `UsuTipoDocumento`, `UsuNumDocumento`, `UsuCorreo`, `UsuTipUsuario`, `UsutipoSolicitud`, `UsuFechIni`, `UsuFechFin`, `UsuEstadoSolic`, `UsuCodModulo`) VALUES
(24, 'mateo', 'romario', 6, 'zxc', 'makekill0107@gmail.com', 2, 2, '2019-11-19 14:42:42', NULL, 1, 5),
(25, 'juan', 'asas', 4, 'asdasd', 'makekill0107@gmail.com', 1, 2, '2019-11-19 15:08:02', NULL, 1, 8),
(26, 'camilo', 'romero', 1, '1019064506', 'makekill0107@gmail.com', 3, 2, '2019-11-25 12:59:53', NULL, 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoequipo`
--

DROP TABLE IF EXISTS `estadoequipo`;
CREATE TABLE IF NOT EXISTS `estadoequipo` (
  `IDEstadoTurno` int(10) NOT NULL,
  `EstDescripcionT` varchar(100) NOT NULL,
  `CodEstadoT` int(10) NOT NULL,
  PRIMARY KEY (`IDEstadoTurno`),
  KEY `CodEstadoT` (`CodEstadoT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `estadoequipo`
--

INSERT INTO `estadoequipo` (`IDEstadoTurno`, `EstDescripcionT`, `CodEstadoT`) VALUES
(1, 'En Venta', 1),
(2, 'Bodega', 2),
(3, 'Alquiler', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosequipos`
--

DROP TABLE IF EXISTS `estadosequipos`;
CREATE TABLE IF NOT EXISTS `estadosequipos` (
  `IdEstado` int(10) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `CodEstado` int(10) NOT NULL,
  PRIMARY KEY (`IdEstado`),
  KEY `CodEstado` (`CodEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadosequipos`
--

INSERT INTO `estadosequipos` (`IdEstado`, `Descripcion`, `CodEstado`) VALUES
(1, 'Ocupado', 1),
(2, 'Libre', 2),
(3, 'En tramite', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosusuarios`
--

DROP TABLE IF EXISTS `estadosusuarios`;
CREATE TABLE IF NOT EXISTS `estadosusuarios` (
  `IDEstadousu` int(10) NOT NULL,
  `EstDescripcion` varchar(100) NOT NULL,
  `CodEstadoUsu` int(10) NOT NULL,
  PRIMARY KEY (`IDEstadousu`),
  KEY `CodEstadoUsu` (`CodEstadoUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadosusuarios`
--

INSERT INTO `estadosusuarios` (`IDEstadousu`, `EstDescripcion`, `CodEstadoUsu`) VALUES
(1, 'Activo', 0),
(2, 'Inactivo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesusuarios`
--

DROP TABLE IF EXISTS `rolesusuarios`;
CREATE TABLE IF NOT EXISTS `rolesusuarios` (
  `RuIdRol` int(10) NOT NULL,
  `RuDescripcion` varchar(100) NOT NULL,
  `RuCodRol` int(11) NOT NULL,
  PRIMARY KEY (`RuIdRol`),
  KEY `RuCodRol` (`RuCodRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rolesusuarios`
--

INSERT INTO `rolesusuarios` (`RuIdRol`, `RuDescripcion`, `RuCodRol`) VALUES
(1, 'Portatil', 1),
(2, 'Pc de escritorio', 2),
(3, 'Impresora', 3),
(4, 'Articulo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

DROP TABLE IF EXISTS `rolusuario`;
CREATE TABLE IF NOT EXISTS `rolusuario` (
  `TuIDUsuario` int(10) NOT NULL,
  `TuDescripcion` varchar(100) NOT NULL,
  `TuCodUsu` int(10) NOT NULL,
  PRIMARY KEY (`TuIDUsuario`),
  KEY `TuCodUsu` (`TuCodUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`TuIDUsuario`, `TuDescripcion`, `TuCodUsu`) VALUES
(1, 'Administrador', 1),
(2, 'Usuario', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

DROP TABLE IF EXISTS `tipodocumento`;
CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `TdID` int(10) NOT NULL,
  `TdDescripcion` varchar(100) DEFAULT NULL,
  `TdCodDoc` int(10) DEFAULT NULL,
  PRIMARY KEY (`TdID`),
  KEY `TdCodDoc` (`TdCodDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`TdID`, `TdDescripcion`, `TdCodDoc`) VALUES
(1, 'Cédula Ciudadanía\r\n', 1),
(2, 'Cédula Extranjería\r\n', 2),
(3, 'Registro Civil - NIP\r\n', 3),
(4, 'Tarjeta Identidad\r\n', 4),
(5, 'Pasaporte\r\n', 5),
(6, 'Registro Civil - NUIP\r\n', 6),
(7, 'Permiso Especial de Permanencia\r\n', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `TuIDUsuario` int(10) NOT NULL,
  `TuDescripcion` varchar(100) NOT NULL,
  `TuCodUsu` int(10) NOT NULL,
  PRIMARY KEY (`TuIDUsuario`),
  KEY `TuCodUsu` (`TuCodUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`TuIDUsuario`, `TuDescripcion`, `TuCodUsu`) VALUES
(1, 'Portatil', 1),
(2, 'PC Escritorio', 2),
(3, 'Impresora', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipsolicitudes`
--

DROP TABLE IF EXISTS `tipsolicitudes`;
CREATE TABLE IF NOT EXISTS `tipsolicitudes` (
  `TsIDSolicitud` int(10) NOT NULL,
  `TsDescripcion` varchar(100) NOT NULL,
  `TsAbreviatura` varchar(10) NOT NULL,
  `TsCodsol` int(10) NOT NULL,
  PRIMARY KEY (`TsIDSolicitud`),
  KEY `TsCodsol` (`TsCodsol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipsolicitudes`
--

INSERT INTO `tipsolicitudes` (`TsIDSolicitud`, `TsDescripcion`, `TsAbreviatura`, `TsCodsol`) VALUES
(1, 'Computador', 'PC', 1),
(2, 'Libro', 'LB', 2),
(3, 'Revista', 'RE', 3),
(4, 'Periodico', 'PE', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `UsisID` int(10) NOT NULL,
  `UsisNombres` varchar(100) NOT NULL,
  `UsisApellidos` varchar(100) NOT NULL,
  `UsisTipoRol` int(10) NOT NULL,
  `UsisPassword` varchar(20) NOT NULL,
  `UsisCodusuario` varchar(100) NOT NULL,
  `UsisEstado` int(10) NOT NULL,
  PRIMARY KEY (`UsisID`),
  KEY `UsisTipoRol` (`UsisTipoRol`),
  KEY `UsisEstado` (`UsisEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsisID`, `UsisNombres`, `UsisApellidos`, `UsisTipoRol`, `UsisPassword`, `UsisCodusuario`, `UsisEstado`) VALUES
(1, 'Administrador', 'Pruebas', 1, 'admin', 'admin', 1),
(2, 'Santiago', 'Rincon', 1, 'jsantiagorincon', 'jsantiagorincon', 1),
(3, 'Jhon', 'Castillo', 2, 'jacastillo', 'jacastillo', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `controlequipos`
--
ALTER TABLE `controlequipos`
  ADD CONSTRAINT `controlequipos_ibfk_1` FOREIGN KEY (`CeEstado`) REFERENCES `estadosequipos` (`IdEstado`);

--
-- Filtros para la tabla `equiporegistro`
--
ALTER TABLE `equiporegistro`
  ADD CONSTRAINT `equiporegistro_ibfk_1` FOREIGN KEY (`UsuTipoDocumento`) REFERENCES `tipodocumento` (`TdID`),
  ADD CONSTRAINT `equiporegistro_ibfk_3` FOREIGN KEY (`UsuTipUsuario`) REFERENCES `tipousuario` (`TuIDUsuario`),
  ADD CONSTRAINT `equiporegistro_ibfk_4` FOREIGN KEY (`UsutipoSolicitud`) REFERENCES `tipsolicitudes` (`TsIDSolicitud`),
  ADD CONSTRAINT `equiporegistro_ibfk_5` FOREIGN KEY (`UsuEstadoSolic`) REFERENCES `estadoequipo` (`IDEstadoTurno`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`UsisEstado`) REFERENCES `estadosusuarios` (`IDEstadousu`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`UsisTipoRol`) REFERENCES `rolusuario` (`TuIDUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
