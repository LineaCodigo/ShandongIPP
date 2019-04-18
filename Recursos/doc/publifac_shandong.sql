-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-04-2019 a las 19:38:32
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `publifac_shandong`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `idCategorias` int(11) NOT NULL,
  `NomCategoria` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idCategorias`, `NomCategoria`) VALUES
(1, 'COUNTER'),
(2, 'RULETAS'),
(3, 'LUCES LED'),
(4, 'CAT4'),
(5, 'CAT5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GrupoProducto`
--

CREATE TABLE `GrupoProducto` (
  `idGrupoProducto` int(11) NOT NULL,
  `idProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `idProductos` int(11) NOT NULL,
  `idCategorias` int(11) NOT NULL,
  `NomProducto` varchar(60) DEFAULT NULL,
  `PrecioTienda` decimal(10,2) DEFAULT NULL,
  `PrecioXMayor` decimal(10,2) DEFAULT NULL,
  `PrecioOnline` decimal(10,2) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `UnidadMedida` varchar(6) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `CodigoSIGOP` varchar(45) DEFAULT NULL,
  `nomurl` varchar(120) DEFAULT NULL,
  `CarpetaPrincipal` varchar(60) DEFAULT NULL,
  `NombreArchivo` varchar(60) DEFAULT NULL,
  `ArchivosSecun` varchar(120) DEFAULT NULL,
  `Destacado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`idProductos`, `idCategorias`, `NomProducto`, `PrecioTienda`, `PrecioXMayor`, `PrecioOnline`, `Descuento`, `UnidadMedida`, `Color`, `Descripcion`, `CodigoSIGOP`, `nomurl`, `CarpetaPrincipal`, `NombreArchivo`, `ArchivosSecun`, `Destacado`) VALUES
(1, 1, 'COUNTER PREMIUM', '240.00', '0.00', '0.00', 0, 'UNIDAD', 'BLANCO', 'ERERWE', NULL, 'counter-premium', 'COUNTER', '1_1.jpg', '1_2.jpg,1_3.jpg,1_4.jpg', NULL),
(2, 2, 'RULETA PEQUEÑA', '100.00', '0.00', '0.00', 0, 'UNIDAD', 'BLANCO', 'CFSDFSD DSFDSFSD SDFSFSD', NULL, 'ruleta-pequena', 'RULETA', 'Ruletagrande_1.jpg', 'Ruletagrande_2.jpg,Ruletagrande_3.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProductosRelacionados`
--

CREATE TABLE `ProductosRelacionados` (
  `idProductosRelacionados` int(11) NOT NULL,
  `idGrupoProducto` int(11) NOT NULL,
  `idProductosVincu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Indices de la tabla `GrupoProducto`
--
ALTER TABLE `GrupoProducto`
  ADD PRIMARY KEY (`idGrupoProducto`),
  ADD KEY `fk_GrupoProducto_Productos_idx` (`idProductos`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`idProductos`),
  ADD KEY `fk_Productos_Categorias1_idx` (`idCategorias`);

--
-- Indices de la tabla `ProductosRelacionados`
--
ALTER TABLE `ProductosRelacionados`
  ADD PRIMARY KEY (`idProductosRelacionados`,`idGrupoProducto`),
  ADD KEY `fk_ProductosRelacionados_GrupoProducto1_idx` (`idGrupoProducto`),
  ADD KEY `fk_ProductosRelacionados_Productos1_idx` (`idProductosVincu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `idCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `GrupoProducto`
--
ALTER TABLE `GrupoProducto`
  MODIFY `idGrupoProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ProductosRelacionados`
--
ALTER TABLE `ProductosRelacionados`
  MODIFY `idProductosRelacionados` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `GrupoProducto`
--
ALTER TABLE `GrupoProducto`
  ADD CONSTRAINT `fk_GrupoProducto_Productos` FOREIGN KEY (`idProductos`) REFERENCES `Productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD CONSTRAINT `fk_Productos_Categorias1` FOREIGN KEY (`idCategorias`) REFERENCES `Categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ProductosRelacionados`
--
ALTER TABLE `ProductosRelacionados`
  ADD CONSTRAINT `fk_ProductosRelacionados_GrupoProducto1` FOREIGN KEY (`idGrupoProducto`) REFERENCES `GrupoProducto` (`idGrupoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ProductosRelacionados_Productos1` FOREIGN KEY (`idProductosVincu`) REFERENCES `Productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
