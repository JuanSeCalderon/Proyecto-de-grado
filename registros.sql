-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2019 a las 17:43:56
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
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `Fecha` timestamp NULL DEFAULT NULL,
  `Barrio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_identificacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_identificacion` int(255) NOT NULL,
  `Genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Orientacion_sexual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Situacion_problacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Grupo_etnico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Victima_conflicto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Rango_edad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Servicio_solicitar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CapacitacionRealizada` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`Fecha`, `Barrio`, `Nombre`, `Apellido`, `Tipo_identificacion`, `Numero_identificacion`, `Genero`, `Orientacion_sexual`, `Situacion_problacion`, `Grupo_etnico`, `Victima_conflicto`, `Fecha_nacimiento`, `Rango_edad`, `Telefono`, `Servicio_solicitar`, `CapacitacionRealizada`) VALUES
('2019-06-21 20:33:36', 'Playa Rica', 'Carlos ', 'Torres', 'Cédula de Ciudadania', 1121842840, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Desplazamiento', '1975-09-28', '27 a 59', '3143182893', 'Capacitación', ''),
('2019-06-21 22:13:39', 'La grama', 'Marly', 'Vergara', 'Cédula de Ciudadania', 1006820171, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '2000-01-31', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-06-25 15:00:18', 'La grama', 'Juan Sebastián', 'Calderón Apolinar', 'Cédula de Ciudadania', 1121943280, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Desplazamiento', '1997-03-15', '19 a 26', '3143182893', 'Capacitación', ''),
('2019-06-26 15:53:15', 'Playa Rica', 'saul', 'mora', 'Cédula de Ciudadania', 86081458, 'Hombre', 'Heterosexual', 'Mujer/Hombre cabeza de hogar', 'Ninguno', 'Ninguno', '1984-05-19', '27 a 59', '31313131313', 'Acceso a internet', ''),
('2019-07-05 15:00:35', 'Villa Fabiola', 'Cristian', 'Hernandez', 'Cédula de Ciudadania', 41657016, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1997-01-16', '19 a 26', '3118247419', 'Video juegos', ''),
('2019-07-06 21:40:35', 'Playa Rica', 'Juan Sebastian ', 'Calderón Apolinar', 'Cédula de Ciudadania', 1121943280, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Desplazamiento', '2006-10-24', '12 a 18', '3118247419', 'Consultas rapidas', ''),
('2019-07-06 21:42:25', 'Villa Fabiola', 'Daniela ', 'Barbosa', 'Cédula de Ciudadania', 41657016, 'Mujer', 'Heterosexual', 'Desmovilizado', 'Afrodescendiente', 'Ninguno', '1996-05-20', '19 a 26', '3118247419', 'Acceso a internet', ''),
('2019-07-06 21:46:34', 'Playa Rica', 'Victoria', 'Martinez', 'Tarjeta de Identidad', 1006856306, 'Mujer', 'Bisexual', 'Gestante', 'Ninguno', 'Ninguno', '1984-01-26', '27 a 59', '3123424521', 'Capacitación', ''),
('2019-07-06 22:02:17', 'Playa Rica', 'Fabiola', 'Muñoz', 'Cédula de Ciudadania', 32341412, 'Mujer', 'Heterosexual', 'Gestante', 'Raizal', 'Ninguno', '2009-06-19', '12 a 18', '3118247419', 'Capacitación', ''),
('2019-07-08 14:09:52', 'La grama', 'saul', 'mora', 'Cédula de Ciudadania', 9876556, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Desplazamiento', '2019-07-08', '6 a 11', '3143182893', 'Acceso a internet', ''),
('2019-07-09 14:29:48', 'Villa Fabiola', 'Ana yerling', 'Suarez moreno', 'Cédula de Ciudadania', 1121943280, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1995-03-13', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:30:59', 'Villa Fabiola', 'Ana yerling', 'Suarez moreno', 'Cédula de Ciudadania', 1121943280, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1995-03-13', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:31:10', 'Villa Fabiola', 'Ana yerling', 'Suarez moreno', 'Cédula de Ciudadania', 1121943280, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1995-03-13', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:34:25', 'La grama', 'felipe', 'cruz', 'Cédula de Ciudadania', 1121943545, 'Hombre', 'Heterosexual', 'En situación de discapacidad', 'Indigena', 'Ninguno', '1997-02-20', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:35:03', 'La grama', 'felipe', 'cruz', 'Cédula de Ciudadania', 1121943545, 'Hombre', 'Heterosexual', 'En situación de discapacidad', 'Indigena', 'Ninguno', '1997-02-20', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:35:37', 'La grama', 'felipe', 'cruz', 'Cédula de Ciudadania', 1121943545, 'Hombre', 'Heterosexual', 'En situación de discapacidad', 'Indigena', 'Ninguno', '1997-02-20', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:35:45', 'La grama', 'felipe', 'cruz', 'Cédula de Ciudadania', 1121943545, 'Hombre', 'Heterosexual', 'En situación de discapacidad', 'Indigena', 'Ninguno', '1997-02-20', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-09 14:53:33', 'La grama', 'camilo', 'cruz', 'Cédula de Ciudadania', 1121949933, 'Hombre', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1998-09-20', '19 a 26', '223341331', 'Capacitación', ''),
('2019-07-09 15:11:50', 'La grama', 'Laura', 'Cedemus', 'Cédula de Ciudadania', 1121949933, 'Hombre', 'Heterosexual', 'Desmovilizado', 'Afrodescendiente', 'Ninguno', '1997-10-26', '19 a 26', '3118247419', 'Capacitación', ''),
('2019-07-14 23:49:59', 'La grama', 'Juliana', 'Ramirez', 'Tarjeta de Identidad', 40217107, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '2005-08-05', '12 a 18', '3103460353', 'Video juegos', ''),
('2019-07-19 14:45:16', 'Villa Fabiola', 'Sol maria', 'Rojas Miranda', 'Cédula de Ciudadania', 1121643753, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Ninguno', '1997-03-19', '19 a 26', '3123142341', 'Capacitación', 'Contabilidad basica'),
('2019-07-19 15:18:29', 'Playa Rica', 'Herminda', 'Rodriguez Gallo', 'Tarjeta de Identidad', 1121949933, 'Mujer', 'Heterosexual', 'Ninguno', 'Ninguno', 'Desplazamiento', '2004-01-13', '12 a 18', '3123424521', 'Capacitación', 'manipulacion de alimentos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
