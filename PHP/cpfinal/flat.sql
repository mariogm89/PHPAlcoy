-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2017 a las 14:07:56
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flats`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flat`
--

CREATE TABLE `flat` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flat`
--

INSERT INTO `flat` (`id`, `address`, `price`, `description`) VALUES
(1, 'Calle Sant Nicolau, 30, 2º dcha.', 150000, 'Piso amueblado en el centro de Alcoy'),
(2, 'Plaza España, 5, 3º', 230000, 'Piso en plena plaza.'),
(3, 'Avenida País Valencià, 42, 8º izq', 175000, 'Piso cerca de los bancos, ático.'),
(4, 'Avenida Alameda, 71, 1º izq', 130000, 'Casa antigua, primer piso.'),
(8, 'Calle Sant Llorenç, 10, 5º izq.', 100000, 'Ático en pleno centro de Alcoy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flat`
--
ALTER TABLE `flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
