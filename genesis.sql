-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 03:24 AM
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
-- Table structure for table `alumnos`
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
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Semestre_In`) VALUES
(1, 'Cristian', 'Cruz Herrera', 'cristian@uniminuto', 2, 2),
(2, 'Nicolas', 'Castiblanco Infante', 'nicolas@uniminuto', 2, 3),
(3, 'Diego', 'Rivera Cardenas', 'diego@uniminuto', 2, 1);

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
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
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
-- Dumping data for table `materias`
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
(1, 26, 'BASES DE DATOS', 4, 3, 2),
(2, 1, 'GESTION BASICA DE LA INFORMACIÓN', 1, 3, 1),
(2, 2, 'ISFCOL', 1, 3, 1),
(2, 3, 'PRECALCULO', 1, 3, 1),
(2, 4, 'LOGICA MATEMATICA', 1, 2, 3),
(2, 5, 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 1, 1, 1),
(2, 6, 'PROGRAMACION BÁSICA', 1, 2, 1),
(2, 7, 'PRUEBA CLASIFICACIÓN DE INGLES', 1, 0, 1),
(2, 8, 'CEPLEC I', 2, 2, 1),
(2, 9, 'INGENIERIA Y DESARROLLO REGIONAL', 2, 3, 1),
(2, 10, 'PROYECTO DE VIDA', 2, 2, 1),
(2, 11, 'CALCULO DIFERENCIAL', 2, 3, 3),
(2, 12, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 3, 1),
(2, 13, 'ARQUITECTURA DE COMPUTADORES', 2, 3, 1),
(2, 14, 'CEPLEC II', 3, 2, 2),
(2, 15, 'INGLÉS I', 3, 3, 2),
(2, 16, 'CATEDRA MINUTO DE DIOS', 3, 2, 2),
(2, 17, 'CÁLCULO INTEGRAL', 3, 3, 2),
(2, 18, 'ALGEBRA LINEAL', 3, 2, 2),
(2, 19, 'METODOLOGÍA DE LA INVESTIGACIÓN', 3, 2, 2),
(2, 20, 'ESTRUCTURA DE DATOS', 3, 3, 4),
(2, 21, 'EMPRENDIMIENTO', 4, 3, 4),
(2, 22, 'FÍSICA MECÁNICA', 4, 3, 4),
(2, 23, 'MATEMÁTICAS DISCRETAS', 4, 2, 4),
(2, 24, 'INGLÉS II', 4, 3, 4),
(2, 25, 'PROGRAMACIÓN WEB', 4, 3, 4),
(2, 26, 'BASES DE DATOS', 4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `materiasp`
--

CREATE TABLE `materiasp` (
  `NRC` int(11) NOT NULL,
  `Nombre_m` varchar(45) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materiasp`
--

INSERT INTO `materiasp` (`NRC`, `Nombre_m`, `Semestre`, `Creditos`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` int(11) NOT NULL,
  `semestre_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `apellido`, `correo`, `contraseña`, `semestre_in`) VALUES
(1, 'Cristian', 'Cruz Herrera', 'cristian@uniminuto', 123, 2),
(2, 'Nicolas ', 'Castiblanco infante', 'nicolas@uniminuto', 2, 3),
(3, 'Diego', 'Rivera Cardenas', 'diego@uniminuto', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `Id_al` (`Id_al`);

--
-- Indexes for table `materiasp`
--
ALTER TABLE `materiasp`
  ADD PRIMARY KEY (`NRC`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `inscribe_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `inscribe_ibfk_2` FOREIGN KEY (`NRCM`) REFERENCES `materiasp` (`NRC`);

--
-- Constraints for table `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`Id_al`) REFERENCES `alumnos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
