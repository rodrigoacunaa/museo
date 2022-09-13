-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2022 a las 13:10:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposiciones`
--

CREATE TABLE `exposiciones` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` varchar(450) NOT NULL,
  `url_img` varchar(900) NOT NULL,
  `mapeo` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `exposiciones`
--

INSERT INTO `exposiciones` (`id`, `nombre`, `descripcion`, `url_img`, `mapeo`) VALUES
(1, 'Museo de Bellas Artes Santa Teresita', 'lorem ipsum', 'https://www.buenosaires.gob.ar/sites/gcaba/files/mascarpone.jpg', 'http://2.bp.blogspot.com/-fHv-gkDUDfE/U-YR4LhP4uI/AAAAAAAACBo/lgMrcrNWKWk/s1600/Capturam.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `exposiciones`
--
ALTER TABLE `exposiciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `exposiciones`
--
ALTER TABLE `exposiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
