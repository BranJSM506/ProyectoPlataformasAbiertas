-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2024 a las 20:34:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaropa_proyecto_mb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `MarcaID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`MarcaID`, `Nombre`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma'),
(4, 'Bershka'),
(5, 'Zara'),
(6, 'Under Armour'),
(7, 'H&M'),
(8, 'Reebok'),
(9, 'The North Face'),
(10, 'Patagonia');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `marcasconventas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `marcasconventas` (
`MarcaID` int(11)
,`Nombre` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `PrendaID` int(11) NOT NULL,
  `MarcaID` int(11) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`PrendaID`, `MarcaID`, `Nombre`, `Precio`, `Stock`) VALUES
(1, 1, 'Camiseta Nike Pro', 29900.00, 50),
(2, 2, 'Zapatillas Adidas Superstar', 18999.00, 30),
(3, 3, 'Sudadera Puma Classic', 14999.00, 20),
(4, 4, 'Vaqueros Bershka 501', 35190.00, 25),
(5, 5, 'Chaqueta Zara Casual', 69799.00, 15),
(6, 6, 'Camiseta Under Armour Sportstyle', 24099.00, 40),
(7, 7, 'Camiseta H&M Basica', 18099.00, 100),
(8, 8, 'Zapatillas Reebok Classic', 15999.00, 35),
(9, 9, 'Chaqueta The North Face Apex', 19999.00, 10),
(10, 10, 'Chaqueta Patagonia Nano Puff', 24999.00, 12),
(11, 1, 'Pantalones Nike Training', 14599.00, 30),
(12, 2, 'Camiseta Adidas Originals', 19899.00, 60),
(13, 3, 'Mallas Puma Fitness', 13599.00, 20),
(14, 4, 'Chaqueta Bershka Sherpa', 11999.00, 18),
(15, 5, 'Pantalones Zara Cargo', 24999.00, 22),
(16, 6, 'Shorts Under Armour HeatGear', 12999.00, 25),
(17, 7, 'Pantalones H&M Jogger', 12599.00, 75),
(18, 8, 'Zapatillas Reebok Crossfit', 38999.00, 20),
(19, 9, 'Pantalones The North Face Trekking', 19999.00, 15),
(20, 10, 'Sudadera Patagonia Capilene', 18999.00, 10),
(21, 1, 'Camiseta Nike Dry-Fit', 12499.00, 45),
(22, 2, 'Pantalones Adidas Tiro 21', 34999.00, 50),
(23, 3, 'Sudadera Puma Active', 23999.00, 30),
(24, 4, 'Camiseta Bershka Graphic Tee', 19799.00, 30),
(25, 5, 'Blusa Zara Formal', 35099.00, 10),
(26, 6, 'Camiseta Under Armour Threadborne', 13499.00, 35),
(27, 7, 'Pantalones H&M Slim Fit', 12599.00, 50),
(28, 8, 'Zapatillas Reebok Zig Kinetica', 11999.00, 12),
(29, 9, 'Chaqueta The North Face Thermoball', 17999.00, 8),
(30, 10, 'Parka Patagonia Torrentshell', 12999.00, 5);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prendasvendidasconstock`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prendasvendidasconstock` (
`PrendaID` int(11)
,`Nombre` varchar(100)
,`Stock` int(11)
,`TotalVendido` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `top5marcasmasvendidas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `top5marcasmasvendidas` (
`MarcaID` int(11)
,`Nombre` varchar(100)
,`TotalVendido` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VentaID` int(11) NOT NULL,
  `PrendaID` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`VentaID`, `PrendaID`, `Fecha`, `Cantidad`) VALUES
(151, 1, '2024-09-28', 3),
(152, 2, '2024-09-29', 5),
(153, 3, '2024-09-30', 2),
(154, 4, '2024-09-28', 1),
(155, 5, '2024-09-29', 4),
(156, 6, '2024-09-30', 6),
(157, 7, '2024-10-01', 7),
(158, 8, '2024-10-01', 2),
(159, 9, '2024-10-02', 3),
(160, 10, '2024-10-02', 2),
(161, 11, '2024-10-03', 4),
(162, 12, '2024-10-03', 5),
(163, 13, '2024-10-04', 3),
(164, 14, '2024-10-04', 6),
(165, 15, '2024-10-05', 1),
(166, 16, '2024-10-05', 7),
(167, 17, '2024-10-06', 4),
(168, 18, '2024-10-06', 3),
(169, 19, '2024-10-07', 5),
(170, 20, '2024-10-07', 6),
(171, 21, '2024-10-08', 7),
(172, 22, '2024-10-08', 2),
(173, 23, '2024-10-09', 3),
(174, 24, '2024-10-09', 4);

-- --------------------------------------------------------

--
-- Estructura para la vista `marcasconventas`
--
DROP TABLE IF EXISTS `marcasconventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `marcasconventas`  AS SELECT `m`.`MarcaID` AS `MarcaID`, `m`.`Nombre` AS `Nombre` FROM ((`marcas` `m` join `prendas` `p` on(`m`.`MarcaID` = `p`.`MarcaID`)) join `ventas` `v` on(`p`.`PrendaID` = `v`.`PrendaID`)) GROUP BY `m`.`MarcaID`, `m`.`Nombre` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `prendasvendidasconstock`
--
DROP TABLE IF EXISTS `prendasvendidasconstock`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prendasvendidasconstock`  AS SELECT `p`.`PrendaID` AS `PrendaID`, `p`.`Nombre` AS `Nombre`, `p`.`Stock` AS `Stock`, sum(`v`.`Cantidad`) AS `TotalVendido` FROM (`prendas` `p` join `ventas` `v` on(`p`.`PrendaID` = `v`.`PrendaID`)) GROUP BY `p`.`PrendaID`, `p`.`Nombre`, `p`.`Stock` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `top5marcasmasvendidas`
--
DROP TABLE IF EXISTS `top5marcasmasvendidas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top5marcasmasvendidas`  AS SELECT `m`.`MarcaID` AS `MarcaID`, `m`.`Nombre` AS `Nombre`, sum(`v`.`Cantidad`) AS `TotalVendido` FROM ((`marcas` `m` join `prendas` `p` on(`m`.`MarcaID` = `p`.`MarcaID`)) join `ventas` `v` on(`p`.`PrendaID` = `v`.`PrendaID`)) GROUP BY `m`.`MarcaID`, `m`.`Nombre` ORDER BY sum(`v`.`Cantidad`) DESC LIMIT 0, 5 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`MarcaID`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`PrendaID`),
  ADD KEY `MarcaID` (`MarcaID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VentaID`),
  ADD KEY `PrendaID` (`PrendaID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `MarcaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `PrendaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VentaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD CONSTRAINT `prendas_ibfk_1` FOREIGN KEY (`MarcaID`) REFERENCES `marcas` (`MarcaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`PrendaID`) REFERENCES `prendas` (`PrendaID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
