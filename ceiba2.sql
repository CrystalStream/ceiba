-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2016 a las 01:00:51
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ceiba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idalumno` int(11) NOT NULL,
  `nombre` char(20) DEFAULT NULL,
  `apellidos` char(20) DEFAULT NULL,
  `direccion` char(20) DEFAULT NULL,
  `seccion` char(20) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `doc` char(20) DEFAULT NULL,
  `moda` char(20) DEFAULT NULL,
  `inscri` date DEFAULT NULL,
  `asistencia` varchar(5) DEFAULT NULL,
  `beca` char(20) DEFAULT NULL,
  `sexo` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idalumno`, `nombre`, `apellidos`, `direccion`, `seccion`, `telefono`, `doc`, `moda`, `inscri`, `asistencia`, `beca`, `sexo`) VALUES
(501719, '1', '10', '1', 'A', 1, '2342423423', NULL, NULL, NULL, NULL, 'hombre'),
(174491, '2', '2', '2', 'A', 2, '2012858274755', 'flexible', NULL, NULL, NULL, 'hombre'),
(334974, '3', '3', '3', 'A', 3, '54456', 'Cap. Tecnica', NULL, NULL, NULL, 'hombre'),
(794889, '4', '4', '4', 'A', 4, '285526', 'Cap. Tecnologica', NULL, NULL, NULL, '2016-02-02'),
(502048, '1', '1', '1', 'A', 1, '5644', 'Cap. Tecnologica', '0000-00-00', NULL, NULL, 'hombre'),
(851331, '2', '2', '2', 'A', 2, '52552', 'Cap. Tecnologica', '2016-02-10', NULL, NULL, 'hombre'),
(329673, '6', '6', '6', 'A', 6, '200', 'Cap. Tecnologica', '2016-02-10', '200', NULL, 'hombre'),
(602848, '7', '7', '7', 'A', 7, '5', 'Cap. Tecnologica', '2016-09-02', '200', 'si', 'hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` char(10) NOT NULL,
  `nombre` char(15) DEFAULT NULL,
  `paterno` char(15) DEFAULT NULL,
  `usuario` char(15) DEFAULT NULL,
  `contra` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `paterno`, `usuario`, `contra`) VALUES
('12', '1', '1', '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
