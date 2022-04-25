-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2022 a las 13:12:50
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
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Contraseña` int(20) NOT NULL,
  `Semestre_In` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Semestre_In`) VALUES
(1, 'Cristian', 'Cruz Herrera', 'cristian@uniminuto', 2, 2),
(2, 'Nicolas', 'Castiblanco Infante', 'nicolas@uniminuto', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Id_al` int(11) NOT NULL,
  `NRC` int(11) NOT NULL,
  `Nombre_m` varchar(45) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Creditos` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Id_al`, `NRC`, `Nombre_m`, `Semestre`, `Creditos`, `Estado`) VALUES
(1, 1, 'GESTION BASICA DE LA INFORMACIÓN', 1, 3, 1),
(1, 2, 'ISFCOL', 1, 3, 1),
(1, 3, 'PRECALCULO', 1, 3, 1),
(1, 4, 'LOGICA MATEMATICA', 1, 2, 1),
(1, 5, 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 1, 1, 1),
(1, 6, 'PROGRAMACION BÁSICA', 1, 2, 1),
(1, 7, 'PRUEBA CLASIFICACIÓN DE INGLES', 1, 0, 1),
(1, 8, 'CEPLEC I', 2, 2, 3),
(1, 9, 'INGENIERIA Y DESARROLLO REGIONAL', 2, 3, 3),
(1, 10, 'PROYECTO DE VIDA', 2, 2, 3),
(1, 11, 'CALCULO DIFERENCIAL', 2, 3, 3),
(1, 12, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 3, 3),
(1, 13, 'ARQUITECTURA DE COMPUTADORES', 2, 3, 3),
(1, 14, 'CEPLEC II', 3, 2, 2),
(1, 15, 'INGLÉS I', 3, 3, 2),
(1, 16, 'CATEDRA MINUTO DE DIOS', 3, 2, 2),
(1, 17, 'CÁLCULO INTEGRAL', 3, 3, 2),
(1, 18, 'ALGEBRA LINEAL', 3, 2, 2),
(1, 19, 'METODOLOGÍA DE LA INVESTIGACIÓN', 3, 2, 2),
(1, 20, 'ESTRUCTURA DE DATOS', 3, 3, 2),
(1, 21, 'EMPRENDIMIENTO', 4, 3, 2),
(1, 22, 'FÍSICA MECÁNICA', 4, 3, 2),
(1, 23, 'MATEMÁTICAS DISCRETAS', 4, 2, 2),
(1, 24, 'INGLÉS II', 4, 3, 2),
(1, 25, 'PROGRAMACIÓN WEB', 4, 3, 2),
(1, 26, 'BASES DE DATOS', 4, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD KEY `Id_al` (`Id_al`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`Id_al`) REFERENCES `alumnos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
