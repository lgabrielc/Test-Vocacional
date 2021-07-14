-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 06:52:17
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testlg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreramas`
--

CREATE TABLE `carreramas` (
  `id` int(11) NOT NULL,
  `Gestion` varchar(20) NOT NULL,
  `Sistemas` varchar(20) NOT NULL,
  `Industrial` varchar(20) NOT NULL,
  `Redes` varchar(20) NOT NULL,
  `Civil` varchar(50) NOT NULL,
  `Mecanica` varchar(20) NOT NULL,
  `Petrolera` varchar(20) NOT NULL,
  `Ambiental` varchar(20) NOT NULL,
  `Bioquímica` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreramas`
--

INSERT INTO `carreramas` (`id`, `Gestion`, `Sistemas`, `Industrial`, `Redes`, `Civil`, `Mecanica`, `Petrolera`, `Ambiental`, `Bioquímica`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `carrera1` varchar(150) NOT NULL,
  `carrera2` varchar(150) NOT NULL,
  `carrera3` varchar(150) NOT NULL,
  `carrera4` varchar(150) NOT NULL,
  `carrera5` varchar(150) NOT NULL,
  `carrera6` varchar(150) NOT NULL,
  `carrera7` varchar(150) NOT NULL,
  `carrera8` varchar(150) NOT NULL,
  `carrera9` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `codigo`, `nombre`, `apellido`, `usuario`, `password`, `rol`) VALUES
(1, 74712308, 'Luis Gabriel', 'Coaquira Calloapaza', '74712308', '123456', 'admin'),
(2, 12345678, 'Juan', 'Quispe', '12345678', '123456', 'estudiante'),
(3, 98765432, 'Jonny', 'Lila Dolores', '98765432', '123456', 'estudiante'),
(4, 70654920, 'Ricardo ', 'Aponte Fatama', '70654920', '123456', 'estudiante'),
(5, 73654920, 'Enrique Gustavo', 'Salazar Barrientos', '73654920', '123456', 'estudiante'),
(6, 95344920, 'Diego Alfonso', 'Palomino Vasquez', '95344920', '123456', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreramas`
--
ALTER TABLE `carreramas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreramas`
--
ALTER TABLE `carreramas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
