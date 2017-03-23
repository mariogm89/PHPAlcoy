-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2017 a las 14:00:32
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc`
--

CREATE TABLE `cc` (
  `entidad` decimal(4,0) NOT NULL,
  `sucursal` decimal(4,0) NOT NULL,
  `dc` decimal(2,0) NOT NULL,
  `cuenta` decimal(10,0) NOT NULL,
  `clientes_idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cc`
--

INSERT INTO `cc` (`entidad`, `sucursal`, `dc`, `cuenta`, `clientes_idclientes`) VALUES
('1134', '1114', '57', '1214567890', 4),
('1231', '1233', '11', '1234567899', 2),
('1234', '1234', '12', '1234567890', 1),
('1234', '1234', '12', '1234567890', 3),
('1284', '1284', '2', '987654321', 6),
('1534', '1274', '58', '1233467890', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `dni` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idclientes`, `nombre`, `direccion`, `telefono`, `dni`) VALUES
(1, 'Mario', 'Calle falsa 123', '123456780', '32104343A'),
(2, 'Lorena', 'Calle La Virgen 5', '123456789', '32104341C'),
(3, 'David', 'Calle San Nicolás 25', '123457780', '32104643B'),
(4, 'Bea', 'Avenida Pais Valencia 103', '112356780', '32176840A'),
(5, 'Fran', 'Calle Los Patos 3', '145456780', '32104123Q'),
(6, 'Juan', 'Plaza de España 2', '133456780', '32104003Z');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `producto_idproducto` int(11) NOT NULL,
  `pedido_idpedido` int(11) NOT NULL,
  `cantidad` decimal(45,0) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`producto_idproducto`, `pedido_idpedido`, `cantidad`, `precio`) VALUES
(1, 3, '1', '40'),
(2, 1, '1', '35'),
(2, 6, '1', '35'),
(3, 5, '1', '78'),
(4, 2, '8', '135'),
(5, 4, '6', '210'),
(5, 7, '5', '250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_aceptacion` date DEFAULT NULL,
  `comentarios` varchar(200) DEFAULT NULL,
  `clientes_idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `codigo`, `fecha_creacion`, `fecha_aceptacion`, `comentarios`, `clientes_idclientes`) VALUES
(1, 'BC12', '2017-02-07', '2017-02-01', 'Pedido a Mario', 1),
(2, 'AC15', '2017-01-09', '2017-01-18', 'Pedido grande', 2),
(3, 'FA11', '2017-01-16', '2017-02-01', 'Pedido pequeño', 3),
(4, 'FA12', '2017-02-01', '2017-02-02', 'Pedido mediano', 4),
(5, 'BC05', '2017-01-22', '2017-01-30', 'Pedido a Francia', 5),
(6, 'AE20', '2017-02-01', '2017-02-07', 'Pedido a Alicante', 6),
(7, 'HA50', '2017-01-17', '2017-01-20', 'Pedido a Mario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `fabricante` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `fabricante`, `nombre`, `descripcion`) VALUES
(1, 'Ikea', 'Mesa', 'Mesa para comedor'),
(2, 'Ikea', 'Mesa', 'Mesa para cocina'),
(3, 'Ikea', 'Armario', 'Armario grande'),
(4, 'Ikea', 'Silla', 'Silla metálica'),
(5, 'Ikea', 'Silla', 'Silla de madera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`entidad`,`sucursal`,`dc`,`cuenta`,`clientes_idclientes`),
  ADD KEY `fk_cc_clientes_idx` (`clientes_idclientes`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idclientes`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`producto_idproducto`,`pedido_idpedido`),
  ADD KEY `fk_producto_has_pedido_pedido1_idx` (`pedido_idpedido`),
  ADD KEY `fk_producto_has_pedido_producto1_idx` (`producto_idproducto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`,`clientes_idclientes`),
  ADD KEY `fk_pedido_clientes1_idx` (`clientes_idclientes`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idclientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cc`
--
ALTER TABLE `cc`
  ADD CONSTRAINT `fk_cc_clientes` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `fk_producto_has_pedido_pedido1` FOREIGN KEY (`pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_has_pedido_producto1` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_clientes1` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`idclientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
