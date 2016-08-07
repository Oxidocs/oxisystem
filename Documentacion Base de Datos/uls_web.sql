-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2016 a las 03:58:53
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uls_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SECCIONES_ID` int(11) DEFAULT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `TITULO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CONTENIDO_SECCIONES` (`SECCIONES_ID`),
  KEY `FK_RELATIONSHIP_19` (`ESTADOS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`ID`, `SECCIONES_ID`, `ESTADOS_ID`, `TITULO`, `DESCRIPCION`) VALUES
(1, 1, 1, 'myCarousel', 'GALERIA DE IMAGENES BOOSTRAP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_path`
--

DROP TABLE IF EXISTS `contenido_path`;
CREATE TABLE IF NOT EXISTS `contenido_path` (
  `CON_ID` int(11) DEFAULT NULL,
  `PAT_ID` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `FK_CONTENIDO_CONTENIDO_PATH` (`CON_ID`),
  KEY `FK_RELATIONSHIP_20` (`PAT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenido_path`
--

INSERT INTO `contenido_path` (`CON_ID`, `PAT_ID`, `ID`) VALUES
(1, 1, 1),
(1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dominio`
--

DROP TABLE IF EXISTS `dominio`;
CREATE TABLE IF NOT EXISTS `dominio` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIOS_ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_USUARIOS_DOMINIO` (`USUARIOS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `ID` int(11) NOT NULL,
  `USUARIOS_ID` int(11) NOT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PREDETERMINADO` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ESTADOS_EMAIL` (`ESTADOS_ID`),
  KEY `FK_USUARIOS_EMAIL` (`USUARIOS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`ID`, `NOMBRE`, `DESCRIPCION`) VALUES
(1, '1', 'activo'),
(2, '0', 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `ID` int(11) NOT NULL,
  `CONTENIDOS_ID` int(11) DEFAULT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_CONTENIDO_LINK` (`CONTENIDOS_ID`),
  KEY `FK_ESTADOS_LINKS` (`ESTADOS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `path_imagenes`
--

DROP TABLE IF EXISTS `path_imagenes`;
CREATE TABLE IF NOT EXISTS `path_imagenes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ESTADOS_ID` int(11) NOT NULL,
  `PATH` varchar(255) NOT NULL,
  `TITULO` varchar(255) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ESTADOS_PATH_IMAGENES` (`ESTADOS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `path_imagenes`
--

INSERT INTO `path_imagenes` (`ID`, `ESTADOS_ID`, `PATH`, `TITULO`, `DESCRIPCION`) VALUES
(1, 1, 'img/slide_portada/default.jpg', 'IMAGEN 1', 'imagen default'),
(2, 1, 'img/slide_portada/default.jpg', 'IMAGEN 2', 'imagen default');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

DROP TABLE IF EXISTS `redes_sociales`;
CREATE TABLE IF NOT EXISTS `redes_sociales` (
  `ID` int(11) NOT NULL,
  `TIPO_REDES_ID` int(11) NOT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `CON_ID` int(11) DEFAULT NULL,
  `LINK` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ESTADOS_REDES_SOCIALES` (`ESTADOS_ID`),
  KEY `FK_SECCIONES_REDES_SOCIALES` (`CON_ID`),
  KEY `FK_TIPO_REDES_SOCIALES` (`TIPO_REDES_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIOS_ID` int(11) NOT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `TIPO_SECCIONES_ID` int(11) NOT NULL,
  `TITULO` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ESTADOS_SECCIONES` (`ESTADOS_ID`),
  KEY `FK_SECCIONES_TIPO_SECCIONES` (`TIPO_SECCIONES_ID`),
  KEY `FK_USUARIOS_SECCIONES` (`USUARIOS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`ID`, `USUARIOS_ID`, `ESTADOS_ID`, `TIPO_SECCIONES_ID`, `TITULO`) VALUES
(1, 1, 1, 1, 'Slide Portada');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `slide_portada.v`
--
DROP VIEW IF EXISTS `slide_portada.v`;
CREATE TABLE IF NOT EXISTS `slide_portada.v` (
`TITULO_CONTENIDO` varchar(50)
,`CONTENIDO_ID` int(11)
,`PATH_ID` int(11)
,`ESTADO_PATH` int(11)
,`PATH` varchar(255)
,`TITULO` varchar(255)
,`DESCRIPCION` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE IF NOT EXISTS `telefono` (
  `ID` int(11) NOT NULL,
  `USUARIOS_ID` int(11) NOT NULL,
  `TIPO_TELEFONO_ID` int(11) NOT NULL,
  `ESTADOS_ID` int(11) NOT NULL,
  `NUMERO` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_TELEFONO_ESTADOS` (`ESTADOS_ID`),
  KEY `FK_TELEFONO_USUARIOS` (`USUARIOS_ID`),
  KEY `FK_TIPO_TELEFONO` (`TIPO_TELEFONO_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_redes`
--

DROP TABLE IF EXISTS `tipo_redes`;
CREATE TABLE IF NOT EXISTS `tipo_redes` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_secciones`
--

DROP TABLE IF EXISTS `tipo_secciones`;
CREATE TABLE IF NOT EXISTS `tipo_secciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_secciones`
--

INSERT INTO `tipo_secciones` (`ID`, `NOMBRE`, `DESCRIPCION`) VALUES
(1, 'Slider', 'Galeria de imagenes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

DROP TABLE IF EXISTS `tipo_telefono`;
CREATE TABLE IF NOT EXISTS `tipo_telefono` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NICKNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NICKNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura para la vista `slide_portada.v`
--
DROP TABLE IF EXISTS `slide_portada.v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `slide_portada.v`  AS  select `contenido`.`TITULO` AS `TITULO_CONTENIDO`,`contenido_path`.`CON_ID` AS `CONTENIDO_ID`,`contenido_path`.`PAT_ID` AS `PATH_ID`,`path_imagenes`.`ESTADOS_ID` AS `ESTADO_PATH`,`path_imagenes`.`PATH` AS `PATH`,`path_imagenes`.`TITULO` AS `TITULO`,`path_imagenes`.`DESCRIPCION` AS `DESCRIPCION` from (((`secciones` join `contenido` on((`secciones`.`ID` = `contenido`.`SECCIONES_ID`))) join `contenido_path` on((`contenido`.`ID` = `contenido_path`.`CON_ID`))) join `path_imagenes` on((`contenido_path`.`PAT_ID` = `path_imagenes`.`ID`))) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
