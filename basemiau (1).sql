-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2023 a las 19:06:43
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
-- Base de datos: `basemiau`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `TITULO` varchar(250) NOT NULL,
  `BLOG` mediumtext NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `USER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosmiau`
--

CREATE TABLE `usuariosmiau` (
  `ID` int(8) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Contraseña` varchar(60) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosmiau`
--

INSERT INTO `usuariosmiau` (`ID`, `UserName`, `Nombre`, `Contraseña`, `Email`) VALUES
(14, 'CrimsonRoy', 'Angel', '7735bff2b7d5fb171d2d8ff5ad7c198c', 'CrimsonRoy@gmail.com'),
(16, 'danna', 'danna', '77963b7a931377ad4ab5ad6a9cd718aa', 'danna@gmail.com'),
(17, 'juli', 'juli', '4c37dbfae76a9a48544d7248127d2d29', 'juli@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariosmiau`
--
ALTER TABLE `usuariosmiau`
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariosmiau`
--
ALTER TABLE `usuariosmiau`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
