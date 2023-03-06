-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2023 a las 23:20:11
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `BrandId` int(11) NOT NULL,
  `Description` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`BrandId`, `Description`) VALUES
(5, 'BLACKPCS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencyid`
--

CREATE TABLE `currencyid` (
  `CurrencyId` int(11) NOT NULL,
  `Currency` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `currencyid`
--

INSERT INTO `currencyid` (`CurrencyId`, `Currency`) VALUES
(1, 'USD'),
(2, 'MXN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lines`
--

CREATE TABLE `lines` (
  `LineId` int(11) NOT NULL,
  `Description` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lines`
--

INSERT INTO `lines` (`LineId`, `Description`) VALUES
(20, 'USB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `Code` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Description` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `SectionId` int(11) NOT NULL,
  `BrandId` int(11) NOT NULL,
  `LineId` int(11) NOT NULL,
  `SerieId` int(11) NOT NULL,
  `StatusId` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Price` float NOT NULL,
  `CurrencyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`ProductId`, `Code`, `Description`, `SectionId`, `BrandId`, `LineId`, `SerieId`, `StatusId`, `Stock`, `Price`, `CurrencyId`) VALUES
(1, '7500463484094-B', 'MEMORIA FLASH USB BLACKPCS 2108 16GB PLATA METALICA (MU2108S-16)', 1, 5, 20, 5, 1, 6420, 2.13, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `SectionId` int(11) NOT NULL,
  `Description` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`SectionId`, `Description`, `Status`) VALUES
(1, 'Componentes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `SerieId` int(11) NOT NULL,
  `Specifications` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`SerieId`, `Specifications`) VALUES
(5, '16GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `Description` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`StatusId`, `Description`) VALUES
(1, 'Normal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indices de la tabla `currencyid`
--
ALTER TABLE `currencyid`
  ADD PRIMARY KEY (`CurrencyId`);

--
-- Indices de la tabla `lines`
--
ALTER TABLE `lines`
  ADD PRIMARY KEY (`LineId`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `Section` (`SectionId`),
  ADD KEY `SectionId` (`SectionId`),
  ADD KEY `BrandId` (`BrandId`),
  ADD KEY `LineId` (`LineId`),
  ADD KEY `SerieId` (`SerieId`),
  ADD KEY `StatusId` (`StatusId`),
  ADD KEY `Section_2` (`SectionId`),
  ADD KEY `SectionId_2` (`SectionId`),
  ADD KEY `CurrencyId` (`CurrencyId`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`SectionId`),
  ADD KEY `Status` (`Status`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`SerieId`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `currencyid`
--
ALTER TABLE `currencyid`
  MODIFY `CurrencyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lines`
--
ALTER TABLE `lines`
  MODIFY `LineId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `SectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `SerieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`SectionId`) REFERENCES `sections` (`SectionId`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`LineId`) REFERENCES `lines` (`LineId`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`BrandId`) REFERENCES `brands` (`BrandId`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`),
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`SerieId`) REFERENCES `series` (`SerieId`),
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`CurrencyId`) REFERENCES `currencyid` (`CurrencyId`);

--
-- Filtros para la tabla `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`Status`) REFERENCES `status` (`StatusId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
