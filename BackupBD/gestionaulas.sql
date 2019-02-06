-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2019 a las 21:07:47
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

CREATE TABLE IF NOT EXISTS `aula` (
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tic` tinyint(4) NOT NULL DEFAULT '0',
  `numordenadores` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`nombre`, `descripcion`, `ubicacion`, `tic`, `numordenadores`) VALUES('primera', 'primera', 'primera', 0, 0);
INSERT INTO `aula` (`nombre`, `descripcion`, `ubicacion`, `tic`, `numordenadores`) VALUES('segunda', 'segunda', 'segunda', 1, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `aula` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `tramo` enum('8:15','9:15','10:15','11:45','12:45','13:45','all') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`usuario`,`aula`,`fecha`,`tramo`),
  KEY `reserva_usuario` (`aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`usuario`, `aula`, `fecha`, `tramo`) VALUES('usuario', 'primera', '2019-02-04', '8:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fnac` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`usuario`) USING BTREE,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `fnac`, `email`, `admin`, `usuario`, `password`) VALUES('GOD USER', '0000-00-00', ' god@godmodeon.god', 1, 'usuario', 'd9e94fd2b4c5522e5bb7996aa4df48a3f6b8f1b0c3e7fadb5fcc724e3ab6d85dc401b0a2789fe56c209b80e86102b218ff74ff8614f315599a180691846138b6');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_aula` FOREIGN KEY (`aula`) REFERENCES `aula` (`nombre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
