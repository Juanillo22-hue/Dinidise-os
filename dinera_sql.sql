-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2023 a las 03:53:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dinera_sql`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ver_proveedores` ()   SELECT * FROM proveedores$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(255) NOT NULL,
  `durabilidad` varchar(1111) NOT NULL,
  `precio` int(255) NOT NULL,
  `observacion` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombre`, `cantidad`, `durabilidad`, `precio`, `observacion`) VALUES
(3, 'olivos laminados', 8, '3 semanas', 2500, 'n/a'),
(4, 'cartulina', 255, '6 meses', 1000, 'es para impresiones de carteles promocinales del cliente'),
(5, 'Madera', 1000, '3 meses', 50000, 'para tarjetas de presentacion'),
(6, 'Papel delgado', 1500, '3 meses', 4000, 'para invitaciones ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(455) NOT NULL,
  `nit` int(255) NOT NULL,
  `correo` varchar(455) NOT NULL,
  `telefono` int(12) NOT NULL,
  `productos` varchar(455) NOT NULL,
  `pedido` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `nit`, `correo`, `telefono`, `productos`, `pedido`) VALUES
(1, 'gaes 3 s.a.s', 12432423, 'gaes3.@gmail.com', 234234234, 'carton', '32 cartones para impresiones'),
(3, 'ledezma s.a', 123123123, 'ledezma@empresa.com', 3123123, 'papeles', '4 mil papeles delgados'),
(4, 'Gomez s.a', 345678912, 'Gomez@gmail.com', 312312312, 'Madera', '1mil unidades de madera '),
(5, 'Calderon s.a', 312312421, 'Calderon@gmail.com', 2147483647, 'carton', '3 mil unidades de carton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `rh` varchar(500) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL,
  `numerodocumento` int(13) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(13) NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `area` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `rh`, `tipodocumento`, `numerodocumento`, `correo`, `telefono`, `observacion`, `area`) VALUES
(1, 'Luis', 'Melgarejo', 'A+', 'Cedula', 1001231232, 'luis@gmail.com', 2147483647, 'Ninguna', 'Armado de pedido'),
(2, 'Diego', 'Santana', 'O+', 'Cedula', 12234758, 'diego@gmail.com', 2147483647, 'Ninguna', 'Recortes'),
(3, 'Daniel', 'Salazar', 'O-', 'Cedula', 1001231234, 'daniel@gmail.com', 313242341, 'Ninguna', 'Ventas'),
(4, 'Laura', 'De Santana', 'O+', 'Cedula', 1002312313, 'Santifewfer@mail.com', 2147483647, 'Ninguna', 'Impresiones'),
(5, 'Andres', 'Ledesma Rodriguez', 'AB-', 'Cedula', 106406531, 'ledesad@gmail.com', 2147483647, 'tiene dificultades de escucha ', 'Bodega'),
(6, 'Jorge ', 'Chiquita', 'O-', 'Cedula', 2147483647, 'Jorge@gmail.com', 312312312, 'Tiene problemas psicologicos', 'Bodega'),
(7, 'Eliecer', 'Rodriguez', 'A+', 'Cedula', 213412311, 'eliecer@gmail.com', 2147483647, 'Ninguna', 'Ventas'),
(8, 'Alfredo', 'Cataño', 'A-', 'Cedula', 123454321, 'Catano@gmail.com', 2147483647, 'Ninguna', 'Armado de pedido'),
(9, 'David', 'Cardenas', 'AB-', 'Cedula', 123456712, 'David@gmail.com', 2147483647, 'Ninguna', 'Recortes'),
(10, 'Sofia', 'Mora', 'O+', 'Cedula', 1231213123, 'Mora@gmail.com', 2147483647, 'Ninguna', 'Impresiones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `cliente` varchar(500) NOT NULL,
  `material` varchar(500) NOT NULL,
  `pedido` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `cliente`, `material`, `pedido`, `imagen`, `precio`) VALUES
(1, 'jose', 'madera', 'tarjetas de cumpleaños', 'images.jpg', 35000),
(2, 'Rodrigo', 'Carton', 'caja de regalo ', 'images.jpg', 20000),
(3, 'Leonardo', 'Cartulina', 'Carteles promocionales ', 'Sin título.png', 3000),
(4, 'Flor', 'Olivos Lamidos', 'tarjetas especiales', 'images (1).jpg', 50000),
(5, 'Wilson', 'Papel Delagado', 'Invitaciones de 15 años', 'images (1).jpg', 36800),
(6, 'Jan', 'Carton', 'Caja para guardar vino', 'images.jpg', 12345),
(7, 'Ian', 'Cartulina', 'Impresiones Publicitarias', 'descarga (3).jpg', 30000),
(8, 'Erika', 'Papel Delagado', 'Mapas ', 'Sin título.png', 10000),
(9, 'Marcela', 'Olivos Lamidos', 'Poster de invitacion a un lugar', 'descarga (2).jpg', 100000),
(10, 'Luz', 'Madera', 'Tarjeta con el nombre', 'BALCO.png', 32300);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
