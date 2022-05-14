-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 02:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `IdAdmin` int(11) NOT NULL,
  `NombreAdmin` varchar(45) NOT NULL DEFAULT '',
  `ApellidoAdmin` varchar(45) NOT NULL,
  `CorreoAdmin` varchar(45) NOT NULL DEFAULT '',
  `ContraseñaAdmin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`IdAdmin`, `NombreAdmin`, `ApellidoAdmin`, `CorreoAdmin`, `ContraseñaAdmin`) VALUES
(1, 'Johan Daniel', 'Chavez Celeita', 'Daniel@uniminuto', '7');

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
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
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`Id`, `nombre`, `apellido`, `correo`, `contraseña`, `semestre_in`) VALUES
(1, 'Cristian Giovani', 'Cruz Herrera', 'cristian@uniminuto', 123, 0),
(2, 'Nicolas ', 'Castiblanco infante', 'nicolas@uniminuto', 2, 0),
(3, 'Diego', 'Rivera Cardenas', 'diego@uniminuto', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE `docentes` (
  `id_Doc` int(11) NOT NULL,
  `NombreDoc` varchar(30) NOT NULL,
  `ApellidoDoc` varchar(45) NOT NULL,
  `CorreoDoc` varchar(45) NOT NULL,
  `ContraseñaDoc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id_Doc`, `NombreDoc`, `ApellidoDoc`, `CorreoDoc`, `ContraseñaDoc`) VALUES
(2, 'Jaime Andres', 'Tovar Muñetones', 'Jaime@uniminuto', '9'),
(1, 'Guillermo Enrique ', 'Becerra Pirajan', 'Guillermo@uniminuto', '9');

-- --------------------------------------------------------

--
-- Table structure for table `inscribe`
--

CREATE TABLE `inscribe` (
  `Id` int(11) NOT NULL,
  `NRCM` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inscribe`
--

INSERT INTO `inscribe` (`Id`, `NRCM`, `Estado`) VALUES
(1, 1, 4),
(1, 2, 4),
(1, 3, 4),
(1, 4, 4),
(1, 5, 4),
(1, 6, 4),
(1, 7, 4),
(1, 8, 4),
(1, 9, 4),
(1, 10, 4),
(1, 11, 4),
(1, 12, 4),
(1, 13, 4),
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
(2, 3, 4),
(2, 4, 4),
(2, 5, 4),
(2, 6, 4),
(2, 7, 4),
(2, 8, 4),
(2, 9, 4),
(2, 10, 4),
(2, 11, 4),
(2, 12, 4),
(2, 13, 4),
(2, 14, 4),
(2, 15, 4),
(2, 16, 4),
(2, 17, 4),
(2, 18, 4),
(2, 19, 4),
(2, 20, 4),
(2, 21, 4),
(2, 22, 4),
(2, 23, 4),
(2, 24, 4),
(2, 25, 4),
(2, 26, 4),
(2, 1, 4),
(2, 2, 4),
(3, 18, 4),
(3, 16, 4),
(1, 27, 4),
(1, 28, 4),
(1, 29, 4),
(1, 30, 4),
(1, 31, 4),
(1, 32, 4),
(1, 33, 4),
(1, 34, 4),
(1, 35, 4),
(1, 36, 4),
(1, 37, 4),
(1, 38, 4),
(1, 39, 4),
(1, 40, 4),
(1, 41, 4),
(1, 42, 4),
(1, 43, 4),
(1, 44, 4),
(1, 45, 4),
(1, 46, 4),
(1, 47, 4),
(1, 48, 4),
(1, 49, 4),
(1, 50, 4),
(1, 51, 4),
(1, 52, 4),
(1, 53, 4),
(1, 54, 4),
(1, 55, 4),
(1, 56, 4),
(1, 57, 4),
(1, 58, 4),
(1, 59, 4),
(1, 60, 4),
(1, 61, 4),
(1, 62, 4),
(1, 63, 4),
(1, 64, 4),
(2, 27, 4),
(2, 28, 4),
(2, 29, 4),
(2, 30, 4),
(2, 31, 4),
(2, 32, 4),
(2, 33, 4),
(2, 34, 4),
(2, 35, 4),
(2, 36, 4),
(2, 37, 4),
(2, 38, 4),
(2, 39, 4),
(2, 40, 4),
(2, 41, 4),
(2, 42, 4),
(2, 43, 4),
(2, 44, 4),
(2, 45, 4),
(2, 46, 4),
(2, 47, 4),
(2, 48, 4),
(2, 49, 4),
(2, 50, 4),
(2, 51, 4),
(2, 52, 4),
(2, 53, 4),
(2, 54, 4),
(2, 55, 4),
(2, 56, 4),
(2, 57, 4),
(2, 58, 4),
(2, 59, 4),
(2, 60, 4),
(2, 61, 4),
(2, 62, 4),
(2, 63, 4),
(2, 64, 4),
(3, 1, 4),
(3, 2, 4),
(3, 3, 4),
(3, 4, 4),
(3, 5, 4),
(3, 6, 4),
(3, 7, 4),
(3, 8, 4),
(3, 9, 4),
(3, 10, 4),
(3, 11, 4),
(3, 12, 4),
(3, 13, 4),
(3, 14, 4),
(3, 15, 4),
(3, 41, 4),
(3, 17, 4),
(3, 42, 4),
(3, 19, 4),
(3, 20, 4),
(3, 21, 4),
(3, 22, 4),
(3, 23, 4),
(3, 24, 4),
(3, 25, 4),
(3, 26, 4),
(3, 27, 4),
(3, 28, 4),
(3, 29, 4),
(3, 30, 4),
(3, 31, 4),
(3, 32, 4),
(3, 33, 4),
(3, 34, 4),
(3, 35, 4),
(3, 36, 4),
(3, 37, 4),
(3, 38, 4),
(3, 39, 4),
(3, 40, 4),
(3, 43, 4),
(3, 44, 4),
(3, 45, 4),
(3, 46, 4),
(3, 47, 4),
(3, 48, 4),
(3, 49, 4),
(3, 50, 4),
(3, 51, 4),
(3, 52, 4),
(3, 53, 4),
(3, 54, 4),
(3, 55, 4),
(3, 56, 4),
(3, 57, 4),
(3, 58, 4),
(3, 59, 4),
(3, 60, 4),
(3, 61, 4),
(3, 62, 4),
(3, 63, 4),
(3, 64, 4);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `NRC` int(11) NOT NULL,
  `Nombre_m` varchar(45) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materias`
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
(26, 'BASES DE DATOS', 4, 3),
(27, 'DESARROLLO SOCIAL CONTEMPORANEO', 5, 2),
(28, 'FÍSICA ELECTRICA', 5, 3),
(29, 'MÉTODOS NUMERICOS', 5, 3),
(30, 'INGLÉS III', 5, 3),
(31, 'INGENIERÍA DE SOFTWARE', 5, 3),
(32, 'SISTEMAS TRANSACCIONALES', 5, 3),
(33, 'PRACTÍCA EN RESPONSABILIDAD SOCIAL', 6, 3),
(34, 'INVESTIGACIÓN DE OPERACIONES', 6, 2),
(35, 'PROBABILIDAD ESTADÍSTICA', 6, 2),
(36, 'TEORÍA DE LA COMPUTACION', 6, 2),
(37, 'BASES DE DATOS MASIVAS', 6, 3),
(38, 'REDES DE COMPUTADORES', 6, 3),
(39, 'ELECTIVA CPC I', 6, 2),
(40, 'ÉLECTIVA PROFECIONAL', 7, 2),
(41, 'ARQUITECTURA DE SOFTWARE', 7, 3),
(42, 'DESARROLLO DE PLATAFORMAS', 7, 2),
(43, 'SISTEMAS OPERATIVOS', 7, 3),
(44, 'SISTEMAS DE INFORMACIÓN GEOGRAFICOS', 7, 3),
(45, 'ELECTIVA CPC II', 7, 3),
(46, 'ELECTIVA CMD I', 8, 3),
(47, 'SEMINARIO DE INVESTIGACÍON ', 8, 1),
(48, 'MINERIA DE DATOS', 8, 3),
(49, 'INTERCONECTIVIDAD ', 8, 3),
(50, 'ANÁLISIS DE DECISIONES DE INVERSÍON', 8, 2),
(51, 'ELECTIVA CP I - PROGRAMACION INTEGRADA', 8, 2),
(52, 'PRÁCTICA PROFECIONAL', 8, 3),
(53, 'ELECTIVA CMD II', 9, 2),
(54, 'ARQUITECTURA DE DATOS', 9, 3),
(55, 'PLAN DE NEGOCIOS', 9, 2),
(56, 'ELECTIVA CP III - SEGURIDAD', 9, 2),
(57, 'ELECTIVA CPC III', 9, 3),
(58, 'PRACTICA PROFECIONAL II', 9, 3),
(59, 'CALIDAD DE SOFTWARE', 10, 2),
(60, 'SISTEMAS DISTRIBUIDOS', 10, 3),
(61, 'GESTIÓN DE PROYECTOS', 10, 2),
(62, 'ELECTIVA CPC IV', 10, 3),
(63, 'OPCIÓN DE GRADO', 10, 3),
(64, 'ELECTIVA CPC III', 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD KEY `Id` (`Id`,`NRCM`),
  ADD KEY `NRC` (`NRCM`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`NRC`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `inscribe_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `alumnos` (`Id`),
  ADD CONSTRAINT `inscribe_ibfk_2` FOREIGN KEY (`NRCM`) REFERENCES `materias` (`NRC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
