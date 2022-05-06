-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2022 a las 03:09:19
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `genesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `NombreAdmin` varchar(45) NOT NULL DEFAULT '',
  `ApellidoAdmin` varchar(45) NOT NULL,
  `CorreoAdmin` varchar(45) NOT NULL DEFAULT '',
  `ContraseñaAdmin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`NombreAdmin`, `ApellidoAdmin`, `CorreoAdmin`, `ContraseñaAdmin`) VALUES
('Johana', 'Cruz Herrera', 'Johana@uniminuto', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` int(11) NOT NULL,
  `semestre_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id`, `nombre`, `apellido`, `correo`, `contraseña`, `semestre_in`) VALUES
(1, 'Cristian', 'Cruz Herrera', 'cristian@uniminuto', 123, 2),
(2, 'Nicolas ', 'Castiblanco infante', 'nicolas@uniminuto', 2, 3),
(3, 'Diego', 'Rivera Cardenas', 'diego@uniminuto', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscribe`
--

CREATE TABLE `inscribe` (
  `Id` int(11) NOT NULL,
  `NRCM` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscribe`
--

INSERT INTO `inscribe` (`Id`, `NRCM`, `Estado`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 3),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 2),
(1, 9, 2),
(1, 10, 2),
(1, 11, 3),
(1, 12, 2),
(1, 13, 2),
(1, 14, 4),
(1, 15, 4),
(1, 16, 4),
(1, 17, 4),
(1, 18, 4),
(1, 19, 4),
(1, 20, 4),
(1, 21, 4),
(1, 22, 4),
(1, 23, 4),
(1, 24, 4),
(1, 25, 4),
(1, 26, 4),
(2, 3, 1),
(2, 4, 3),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 3),
(2, 12, 1),
(2, 13, 1),
(2, 14, 2),
(2, 15, 2),
(2, 16, 2),
(2, 17, 2),
(2, 18, 2),
(2, 19, 2),
(2, 20, 2),
(2, 21, 4),
(2, 22, 4),
(2, 23, 4),
(2, 24, 4),
(2, 25, 4),
(2, 26, 4),
(2, 1, 1),
(2, 2, 1),
(3, 18, 1),
(3, 16, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `NRC` int(11) NOT NULL,
  `Nombre_m` varchar(45) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`NRC`, `Nombre_m`, `Semestre`, `Creditos`) VALUES
(1, 'GESTION BASICA DE LA INFORMACIÓN', 1, 3),
(2, 'ISFCOL', 1, 3),
(3, 'PRECALCULO', 1, 3),
(4, 'LOGICA MATEMATICA', 1, 2),
(5, 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 1, 1),
(6, 'PROGRAMACION BÁSICA', 1, 2),
(7, 'PRUEBA CLASIFICACIÓN DE INGLES', 1, 0),
(8, 'CEPLEC I', 2, 2),
(9, 'INGENIERIA Y DESARROLLO REGIONAL', 2, 3),
(10, 'PROYECTO DE VIDA', 2, 2),
(11, 'CALCULO DIFERENCIAL', 2, 3),
(12, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 3),
(13, 'ARQUITECTURA DE COMPUTADORES', 2, 3),
(14, 'CEPLEC II', 3, 2),
(15, 'INGLÉS I', 3, 3),
(16, 'CATEDRA MINUTO DE DIOS', 3, 2),
(17, 'CÁLCULO INTEGRAL', 3, 3),
(18, 'ALGEBRA LINEAL', 3, 2),
(19, 'METODOLOGÍA DE LA INVESTIGACIÓN', 3, 2),
(20, 'ESTRUCTURA DE DATOS', 3, 3),
(21, 'EMPRENDIMIENTO', 4, 3),
(22, 'FÍSICA MECÁNICA', 4, 3),
(23, 'MATEMÁTICAS DISCRETAS', 4, 2),
(24, 'INGLÉS II', 4, 3),
(25, 'PROGRAMACIÓN WEB', 4, 3),
(26, 'BASES DE DATOS', 4, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `inscribe`
--
ALTER TABLE `inscribe`
  ADD KEY `Id` (`Id`,`NRCM`),
  ADD KEY `NRC` (`NRCM`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`NRC`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `inscribe_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `alumnos` (`Id`),
  ADD CONSTRAINT `inscribe_ibfk_2` FOREIGN KEY (`NRCM`) REFERENCES `materias` (`NRC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
