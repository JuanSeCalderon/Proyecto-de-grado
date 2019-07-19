-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2019 a las 17:42:35
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Barrio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fotoperfil` text COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Codigo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Id`, `Nombre`, `Email`, `Edad`, `Genero`, `Barrio`, `fotoperfil`, `Usuario`, `Contrasena`, `Codigo`) VALUES
(8, 'Sebastian ', 'sebastian@gmail.com', 23, 'Masculino', 'La grama', '', 'sebas', '$2y$10$XMewvl3eJmTQZuLyesXrrOIp65ygkBLGGmVN8jfISnIcbmpYs0oWG', '$2y$10$s.Hzb6JFDVjYj7SG4psHDeO'),
(9, 'juliana', 'julioana@gmail.com', 13, 'Femenino', 'Jordan', '', 'juli', '$2y$10$TvUPsdZyLr4Jbbn0Qln5U.f5ZBsEbqnfkPsBmT2uvHDzeY4Ua2/KW', '$2y$10$Yq6n7VhCiSoM5cjRSPnMAe2'),
(10, 'saul', 'sema183@hotmail.com', 35, 'Masculino', 'Playa rica', '', 'smora', '$2y$10$TXwZNFeGb5PxYq3ttBmgYOMglDOCwNe0u7w0Cw.CF07Xgi6shFISO', '$2y$10$xVEqb7C6ADtfxfxO1avTSuF');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
