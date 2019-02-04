-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-02-2019 a las 13:56:42
-- Versión del servidor: 5.7.24-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.10-0ubuntu0.18.04.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionaulas`
--
CREATE DATABASE IF NOT EXISTS `gestionaulas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `gestionaulas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--
-- Creación: 25-01-2019 a las 11:22:44
-- Última actualización: 04-02-2019 a las 11:22:34
--

DROP TABLE IF EXISTS `aula`;
CREATE TABLE IF NOT EXISTS `aula` (
  `nombrecorto` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tic` tinyint(4) NOT NULL DEFAULT '0',
  `numordenadores` int(11) DEFAULT NULL,
  PRIMARY KEY (`nombrecorto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `aula`:
--

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`nombrecorto`, `nombre`, `ubicacion`, `tic`, `numordenadores`) VALUES('primera', 'primera', 'primera', 0, 0);
INSERT INTO `aula` (`nombrecorto`, `nombre`, `ubicacion`, `tic`, `numordenadores`) VALUES('segunda', 'segunda', 'segunda', 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--
-- Creación: 25-01-2019 a las 11:40:10
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasenia` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`usuario`,`contrasenia`),
  KEY `login_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='existe el usuario usuario para loguearse al sistema';

--
-- RELACIONES PARA LA TABLA `login`:
--   `id_usuario`
--       `usuario` -> `id`
--

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contrasenia`, `id_usuario`) VALUES('usuario', 'd9e94fd2b4c5522e5bb7996aa4df48a3f6b8f1b0c3e7fadb5fcc724e3ab6d85dc401b0a2789fe56c209b80e86102b218ff74ff8614f315599a180691846138b6', -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 28-01-2019 a las 09:50:47
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fnac` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `usuario`:
--

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `fnac`, `email`, `id`, `admin`) VALUES('GOD USER', '0000-01-01', ' ', -1, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
