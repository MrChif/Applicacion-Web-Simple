-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 06:02:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido_p` varchar(255) NOT NULL,
  `Apellido_m` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id`, `Nombre`, `Apellido_p`, `Apellido_m`) VALUES
(1, 'Fernando', 'Reyna', 'Ramos'),
(2, 'Javier', 'Pérez', 'Reyes'),
(3, 'José', 'Romero ', 'Aguilar'),
(12, 'José', 'García', 'Díaz'),
(13, 'José', 'Fernández', 'Muñoz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Id_prof` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido_p` varchar(255) NOT NULL,
  `Apellido_m` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`Id_prof`, `Nombre`, `Apellido_p`, `Apellido_m`) VALUES
(1, 'Pedro', 'Pérez', 'Pérez'),
(3, 'Pedro', 'Ramos', 'Pérez'),
(5, 'Armando', 'Reyna', 'Ramos'),
(6, 'Pedro', 'Reyes', 'Aguilar'),
(7, 'José', 'López', 'Ruiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_alumnos`
--

CREATE TABLE `prof_alumnos` (
  `id` int(255) NOT NULL,
  `id_profesor` int(255) NOT NULL,
  `id_alumno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prof_alumnos`
--

INSERT INTO `prof_alumnos` (`id`, `id_profesor`, `id_alumno`) VALUES
(1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Id_prof`);

--
-- Indices de la tabla `prof_alumnos`
--
ALTER TABLE `prof_alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_profesor` (`id_profesor`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `Id_prof` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `prof_alumnos`
--
ALTER TABLE `prof_alumnos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prof_alumnos`
--
ALTER TABLE `prof_alumnos`
  ADD CONSTRAINT `prof_alumnos_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prof_alumnos_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`Id_prof`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
