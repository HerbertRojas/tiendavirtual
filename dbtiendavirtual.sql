-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 17:01:07
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtiendavirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(10) NOT NULL,
  `vendedorid` int(10) NOT NULL,
  `dirreccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `productoid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idmodulo` bigint(20) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(20) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(30) NOT NULL,
  `talla` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `botapie` varchar(30) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `categoria`, `articulo`, `marca`, `modelo`, `color`, `talla`, `genero`, `botapie`, `precio`, `imagen`, `stock`) VALUES
(1, 'RO1MA', 'ACCESORIO', 'MASCARIA', 'GZUCK', 'TOOP', 'AZUL', 'S/0', 'VARON', 'ALGODON', '39.00', 'productos/1.jpg', 5),
(2, 'SFS', 'FAFA', 'AFAFS', 'HDFHD', 'DGDG', 'DGSDF', 'SFSF', 'Otros', 'SSS', '10.00', 'productos/2.jpg', 10),
(3, 'A0014B', 'ACCESORIOS', 'MASCARILLA', 'PIONNER', 'TBG', 'NEGRO', 'STD', 'Femenino', 'ALGODON', '29.00', 'productos/3.jpg', 10),
(4, 'RO4MA', 'ROPA SPORT', 'ZAPATILLA', 'GZUCK', 'TOTENTINO', 'NEGRO', '40', 'Masculino', 'GAMUSA', '120.00', 'productos/4.jpg', 3),
(5, 'RO6MA', 'ROPA SPORT', 'ZAPATILLA', 'GZUCK', 'TTHDD', 'BEIGE', '42', 'Masculino', 'TELA', '130.00', 'productos/5.jpg', 6),
(6, 'RO6MA', 'ACCESORIOS', 'MASCARIA', 'GZUCK', 'TRIP', 'CELESTE', 'STD', 'Femenino', 'ALGODON', '39.00', 'productos/6.jpg', 15),
(7, 'RO7ZA', 'ROPA SPORT', 'ZAPATILLA', 'GZUCK', 'TRIPURBAN', 'CELESTE', '45', 'Femenino', 'ALGODON', '170.00', 'productos/7.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `nombrerol` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Admin', 1),
(3, 'Cajero', 'Control Caja', 2),
(4, 'Encargado', 'Encargado', 1),
(5, 'Vendedor', 'Vendedor', 1),
(8, 'Cliente', 'Cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` bigint(20) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `dni`, `nombres`, `apellidos`, `telefono`, `email`, `password`, `rolid`, `status`) VALUES
(1, '71908838', 'HERBERT MARCUSSE', 'ROJAS CHAVEZ', 999385710, 'rojitas0018@gmail.com', '123456789', 1, 1),
(2, '71908834', 'LUIS ANTONIO', 'ROJAS CHAVEZ', 967960941, 'rojitas0019@gmail.com', '123456', 3, 1),
(3, '48420653', 'ADY', 'ATACHAGUA JAVIER', 999385708, 'adyatachaguajavier231194@gmail.com', '123456', 1, 1),
(24, '42823513', 'fredy', 'rojas', 1234524353, 'farbe@me.com', '123', 8, 1),
(25, '3523453425', 'rgewrrtrewrt', 'wertewrt', 54643342, 'ddd@dd.dd', '123', 3, 2),
(26, '54653261', 'FELIPE', 'PEREZ', 987654213, 'ff@ff.com', '321', 1, 2),
(27, '765653252345', 'sdfasrtdher', 'hjdfsfgsdfg', 563634, 'aa@qq.com', '123', 5, 1),
(28, '12345678', 'LUIS', 'ROJAS', 963852741, 'luis@rojas.com', '123', 8, 1),
(29, '74620381', 'BRAYAN', 'RIVERA SOLIS', 12345678, 'chango@gmail.com', '123456789', 1, 1),
(30, '45612398', 'CARLOS', 'CHAVEZ', 123456789, 'carlos@gamil.com', '123', 8, 1),
(31, '65789674', 'FREDY', 'TUCTO', 369854356, 'fredy@gmail.com', '123', 8, 1),
(32, '12345665', 'CARLOS', 'ENRIQUE', 963859641, 'enrique@gmail.com', '123', 8, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `persona_rolid_foreign` (`rolid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `persona_rolid_foreign` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
