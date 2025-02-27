-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
<<<<<<< HEAD
-- Tiempo de generación: 11-02-2025 a las 12:52:53
=======
-- Tiempo de generación: 27-02-2025 a las 00:07:23
>>>>>>> main
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idAutor` int NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `biografia` text,
  `paisorigen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idAutor`, `codigo`, `nombre`, `biografia`, `paisorigen`) VALUES
(7, '22332', 'gabriel garcia marquez', 'Nació Aracataca en Magdalena', 'Colombia');

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `caja_id` int NOT NULL,
  `caja_numero` int NOT NULL,
  `caja_nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `caja_efectivo` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`caja_id`, `caja_numero`, `caja_nombre`, `caja_efectivo`) VALUES
<<<<<<< HEAD
(1, 1, 'Caja Principal', 0.00);
=======
(1, 1, 'Caja #1', 260000.00),
(2, 2, 'Caja #2', 580000.00);
>>>>>>> main

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int NOT NULL,
  `categoria_nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_ubicacion` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_ubicacion`) VALUES
(5, 'Realismo Mágico', 'Pasillo 3');

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int NOT NULL,
  `cliente_tipo_documento` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_numero_documento` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_apellido` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_provincia` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_ciudad` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_direccion` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_telefono` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cliente_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_tipo_documento`, `cliente_numero_documento`, `cliente_nombre`, `cliente_apellido`, `cliente_provincia`, `cliente_ciudad`, `cliente_direccion`, `cliente_telefono`, `cliente_email`) VALUES
(1, 'Otro', 'N/A', 'Publico', 'General', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(2, 'Cedula', '2312321132', 'santiago', 'barbosa', 'HUILA', 'neiva', 'calle 38 # 7 A 51 las granjas', '3217696864', 'sbarrivas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` int NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `informacioncontacto` text,
  `pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `codigo`, `nombre`, `informacioncontacto`, `pais`) VALUES
(6, '223232', 'planeta', 'Bogota 21123123121', 'colombia');

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int NOT NULL,
  `empresa_nombre` varchar(90) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `empresa_telefono` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `empresa_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `empresa_direccion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `empresa_foto` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

<<<<<<< HEAD
INSERT INTO `empresa` (`empresa_id`, `empresa_nombre`, `empresa_telefono`, `empresa_email`, `empresa_direccion`) VALUES
(1, 'Allbooks', '3217696864', 'allboooks12@gmail.com', 'carrera 6 # 32-12');
=======
INSERT INTO `empresa` (`empresa_id`, `empresa_nombre`, `empresa_telefono`, `empresa_email`, `empresa_direccion`, `empresa_foto`) VALUES
(1, 'Allbooks', '3217696864', 'allboooks12@gmail.com', 'carrera 6 # 32-12', 'R7M1B9Q7Q9-83.png');
>>>>>>> main

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int NOT NULL,
  `producto_codigo` varchar(77) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_stock_total` int NOT NULL,
  `producto_tipo_unidad` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_precio_compra` decimal(30,2) NOT NULL,
  `producto_precio_venta` decimal(30,2) NOT NULL,
  `producto_marca` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_modelo` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_estado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_foto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_id` int NOT NULL,
  `id_subcategoria` int DEFAULT NULL,
  `idAutor` int DEFAULT NULL,
  `idEditorial` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_codigo`, `producto_nombre`, `producto_stock_total`, `producto_tipo_unidad`, `producto_precio_compra`, `producto_precio_venta`, `producto_marca`, `producto_modelo`, `producto_estado`, `producto_foto`, `categoria_id`, `id_subcategoria`, `idAutor`, `idEditorial`) VALUES
(15, '82923', 'Cien años de seriedad', 43, 'Caja', 32000.00, 40000.00, 'planeta', '21321351', 'Habilitado', '82923_83.jpg', 5, 9, 7, 6),
(16, '37271', 'el coronel', 86, 'Unidad', 32000.00, 40000.00, 'PLANETA', '3828712', 'Habilitado', '', 5, 9, 7, 6);

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `nombre`, `categoria_id`) VALUES
(9, 'Realismo Ficcion', 5);

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `usuario_nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_clave` varchar(535) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_cargo` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `usuario_foto` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `caja_id` int NOT NULL,
  `usuario_creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

<<<<<<< HEAD
INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_foto`, `caja_id`, `usuario_creado`, `usuario_actualizado`) VALUES
(1, 'Administrador', 'Principal', 'admin@gmail.com', 'admin', '$2y$10$NeehrobdPdFUxG4T0sweo.S7vbbyVcEwzU8/fmeyhhO23I/FCOvCy', '', 1, '2025-02-11 12:49:19', '2025-02-11 12:49:19');
=======
INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_cargo`, `usuario_foto`, `caja_id`, `usuario_creado`, `usuario_actualizado`) VALUES
(1, 'Administrador', 'Principal', 'admin@admin.com', 'Administrador', '$2y$10$od1ZIIaCTLIYjxcTY6zHYugid/SDtxxf5Ev2goOkhxQ1HBQhUzYnW', 'Administrador', '', 1, '2025-02-26 00:23:06', '2025-02-26 00:23:06'),
(2, 'santiago', 'barbosa', 'santiago12@gmail.com', 'santi12', '$2y$10$lwnoIw/65DfRTr13PukeT.zPj9DeWOFCnrbUEWcdstS01/Z79rTMq', 'Administrador', 'santiago_94.jpg', 2, '2025-02-26 00:23:06', '2025-02-26 00:23:06'),
(3, 'julian', 'pinto', 'admin123@gmail.com', 'admin123', '$2y$10$TmUaqFABQ6s8jXIE61zIZe1RM4M6Pr4NErwwwB1zHNb0nCQ0GyMta', 'Cajero', '', 1, '2025-02-26 00:23:06', '2025-02-26 00:23:06'),
(5, 'Usuario administrador', 'usuarioadministrador', 'user12@gmail.com', 'user12', '$2y$10$CIlB0xBsoHzoGrWpE0Ub1OGX6.4MOEPYpDSf3yAAVYhZoaMAX4.Lu', 'Administrador', 'Usuario_administrador_16.png', 1, '2025-02-26 23:59:26', '2025-02-26 23:59:26'),
(7, 'user cajero', 'user cajero', 'userca1@gmail.com', 'userca1', '$2y$10$u2UG6ZGSEhNDVrm3qoCPj.UEkuCsKHOIX/D4/BHsqlWe3IgPLRiRm', 'Cajero', 'user_cajero_73.png', 2, '2025-02-27 00:05:52', '2025-02-27 00:05:52');
>>>>>>> main

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `venta_id` int NOT NULL,
  `venta_codigo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `venta_fecha` date NOT NULL,
  `venta_hora` varchar(17) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `venta_total` decimal(30,2) NOT NULL,
  `venta_pagado` decimal(30,2) NOT NULL,
  `venta_cambio` decimal(30,2) NOT NULL,
  `usuario_id` int NOT NULL,
  `cliente_id` int NOT NULL,
  `caja_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

<<<<<<< HEAD
=======
--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`venta_id`, `venta_codigo`, `venta_fecha`, `venta_hora`, `venta_total`, `venta_pagado`, `venta_cambio`, `usuario_id`, `cliente_id`, `caja_id`) VALUES
(1, 'P4S0X9N2O3-1', '2025-02-26', '11:51 am', 80000.00, 100000.00, 20000.00, 2, 2, 1),
(2, 'X1T8P8I8E2-2', '2025-02-26', '11:52 am', 80000.00, 100000.00, 20000.00, 3, 2, 1),
(3, 'G5Z3W7K6E9-3', '2025-02-26', '11:53 am', 120000.00, 130000.00, 10000.00, 3, 2, 2),
(4, 'S5X2Q1F0Q2-4', '2025-02-26', '06:00 pm', 40000.00, 50000.00, 10000.00, 2, 1, 2),
(5, 'R9I6S1V6R3-5', '2025-02-26', '06:26 pm', 120000.00, 130000.00, 10000.00, 2, 1, 2);

>>>>>>> main
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `venta_detalle_id` int NOT NULL,
  `venta_detalle_cantidad` int NOT NULL,
  `venta_detalle_precio_compra` decimal(30,2) NOT NULL,
  `venta_detalle_precio_venta` decimal(30,2) NOT NULL,
  `venta_detalle_total` decimal(30,2) NOT NULL,
  `venta_detalle_descripcion` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `venta_codigo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_id` int NOT NULL,
<<<<<<< HEAD
  `autor` varchar(255) COLLATE utf8mb3_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
=======
  `autor` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `venta_detalle`
--

INSERT INTO `venta_detalle` (`venta_detalle_id`, `venta_detalle_cantidad`, `venta_detalle_precio_compra`, `venta_detalle_precio_venta`, `venta_detalle_total`, `venta_detalle_descripcion`, `venta_codigo`, `producto_id`, `autor`) VALUES
(4, 2, 32000.00, 40000.00, 80000.00, 'Cien años de seriedad', 'P4S0X9N2O3-1', 15, 'gabriel garcia marquez'),
(5, 2, 32000.00, 40000.00, 80000.00, 'Cien años de seriedad', 'X1T8P8I8E2-2', 15, 'gabriel garcia marquez'),
(6, 3, 32000.00, 40000.00, 120000.00, 'Cien años de seriedad', 'G5Z3W7K6E9-3', 15, 'gabriel garcia marquez'),
(7, 1, 32000.00, 40000.00, 40000.00, 'el coronel', 'S5X2Q1F0Q2-4', 16, 'gabriel garcia marquez'),
(8, 3, 32000.00, 40000.00, 120000.00, 'el coronel', 'R9I6S1V6R3-5', 16, 'gabriel garcia marquez');

--
>>>>>>> main
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`caja_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `producto_ibfk_3` (`id_subcategoria`),
  ADD KEY `fk_producto_autor` (`idAutor`),
  ADD KEY `fk_producto_editorial` (`idEditorial`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `caja_id` (`caja_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`venta_id`),
  ADD UNIQUE KEY `venta_codigo` (`venta_codigo`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `caja_id` (`caja_id`);

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD PRIMARY KEY (`venta_detalle_id`),
  ADD KEY `venta_id` (`venta_codigo`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
<<<<<<< HEAD
  MODIFY `idAutor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `idAutor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `caja_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
<<<<<<< HEAD
  MODIFY `idEditorial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `idEditorial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
<<<<<<< HEAD
  MODIFY `producto_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
=======
  MODIFY `producto_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
<<<<<<< HEAD
  MODIFY `id_subcategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
=======
  MODIFY `id_subcategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
<<<<<<< HEAD
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
=======
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
<<<<<<< HEAD
  MODIFY `venta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3240;
=======
  MODIFY `venta_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> main

--
-- AUTO_INCREMENT de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
<<<<<<< HEAD
  MODIFY `venta_detalle_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `venta_detalle_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> main

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_autor` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`),
  ADD CONSTRAINT `fk_producto_editorial` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subcategoria`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
