-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2023 a las 18:24:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseingesaurios4apm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaintegrantesingesaurios`
--

CREATE TABLE `tablaintegrantesingesaurios` (
  `ID` int(14) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Rol` varchar(40) NOT NULL,
  `RedSocial` varchar(80) NOT NULL,
  `Foto` varchar(10) NOT NULL,
  `Edad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablaintegrantesingesaurios`
--

INSERT INTO `tablaintegrantesingesaurios` (`ID`, `Nombre`, `Rol`, `RedSocial`, `Foto`, `Edad`) VALUES
(1, 'Danna Paola Barbosa Pech', 'Programador principal', 'https://www.instagram.com/dannii_ew/', 'danne.jpg', 18),
(2, 'Enriqueta López Luna', 'Programadora secundaria', 'https://www.instagram.com/marettalole/', 'Ketta.JPG', 16),
(3, 'Julissa Guadalupe Koyoc Azamar', 'Programadora secundaria', 'https://www.instagram.com/juli_javadd/', 'julisa.jpg', 16),
(4, 'Joshua Astudillo Diego', 'Programador colado', 'https://www.instagram.com/joshua.astudilloxc/', 'josh.jpg', 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablaintegrantesingesaurios`
--
ALTER TABLE `tablaintegrantesingesaurios`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
