-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2026 a las 08:09:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campus_market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `id_legal` varchar(24) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `direccion_electronica` varchar(80) NOT NULL,
  `clave_acceso` varchar(128) NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `id_legal`, `nombres`, `apellidos`, `direccion_electronica`, `clave_acceso`, `fecha_creacion`) VALUES
(1, '1031654336', 'DYLAN', 'PEDRAZA', 'dylan.guasca@cun.edu.co', '$2y$10$POqcF6orWb.39KNPs3N3wOguOUbFjnOm50LLHy58GC8KGF86rM/Hi', '2026-04-28 22:16:46'),
(2, '1031654336', 'DYLAN', 'PEDRAZA', 'dylan.guasca@cun.edu.co', '$2y$10$9iNLLUkwkuWtghEbflS8cezpnSDDGtrBH9QlitSGZb0arxfVyyz4e', '2026-04-28 22:51:30'),
(3, '1031654336', 'DYLAN', 'PEDRAZA', 'dylan.guasca@cun.edu.co', '$2y$10$lzOadBpxmbGluTmEC3qEvuxcfGaGj3FbVDyqnz0nmq9U2i60cTBtu', '2026-04-28 22:51:35'),
(4, '1031654336', 'DYLAN', 'PEDRAZA', 'dylan.guasca@cun.edu.co', '$2y$10$3bla6NA.d9RinVKRb6QrHuvCdzAlctze/TKMCmfDDnAdgm3w8tZvG', '2026-04-28 22:57:11'),
(5, '1031654335', 'pepito', 'suarez', 'pepito@gmail.com', '$2y$10$vlx236usWd/aeGDachkJN.jnTgkdkG06hYW6Hw/AXBZjVb.X9QBWq', '2026-05-05 04:45:17'),
(6, '1031654335', 'pepito', 'suarez', 'pepito@gmail.com', '$2y$10$wHvcH3tH5iehhGxRYkaqVOFfIMLKxjXiVTfKyNvEpB2vUviMgh/HK', '2026-05-05 04:46:51'),
(7, '101425043', 'maria', 'perez', 'maria@gmail.com', '$2y$10$VNwwVLb0Sl0TrDwNLisAcucXs83gLznzcO3EiV8IYPMTdqMFFeRLC', '2026-05-05 05:48:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
