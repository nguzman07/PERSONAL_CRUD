-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2022 a las 07:49:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion_Producto` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  `Fecha_Eliminacion` datetime DEFAULT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`Id_Producto`, `Nombre_Producto`, `Descripcion_Producto`, `Fecha_Creacion`, `Fecha_Modificacion`, `Fecha_Eliminacion`, `Estado`) VALUES
(1, 'aaaagjn', 'Ninguna', '2022-01-01 11:29:10', '2022-01-02 22:17:22', '2022-01-02 22:17:25', 0),
(2, 'Mouse Logitech', 'NingunaX', '2022-01-01 11:30:43', '2022-01-02 22:46:55', NULL, 1),
(3, 'PC GAMER HP', 'Ninguna', '2022-01-01 11:31:29', NULL, '2022-01-02 19:19:30', 0),
(4, 'Consola PS5 Digital', 'Ninguna', '2022-01-01 11:32:04', '2022-01-02 22:16:16', NULL, 1),
(5, 'Tablero Arcade', 'Ninguna', '2022-01-02 13:53:04', NULL, '2022-01-02 21:24:04', 0),
(6, 'Celular Moto E5', 'Ninguna', '2022-01-02 19:57:47', NULL, '2022-01-02 19:58:47', 0),
(7, 'Red Dead Redeption 2', 'Ninguna', '2022-01-02 20:28:53', NULL, NULL, 1),
(8, 'Red Dead', 'Ninguna', '2022-01-02 20:29:06', NULL, '2022-01-02 21:14:23', 0),
(9, 'xxx', 'Ninguna', '2022-01-02 20:29:18', NULL, '2022-01-02 21:14:20', 0),
(10, 'yyy', 'Ninguna', '2022-01-02 20:50:31', NULL, '2022-01-02 21:14:14', 0),
(11, 'xxx', 'Ninguna', '2022-01-02 21:59:05', NULL, '2022-01-02 22:11:45', 0),
(12, '222', 'Ninguna', '2022-01-02 22:21:31', '2022-01-02 22:21:45', '2022-01-02 22:22:41', 0),
(13, 'bbb', 'Ninguna', '2022-01-02 22:22:00', NULL, '2022-01-02 22:22:44', 0),
(14, 'test', 'wqeqwerwer', '2022-01-02 22:46:13', '2022-01-02 22:46:40', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
