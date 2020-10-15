-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 11:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aceitera_aguilar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Accesorios', '2020-10-07 02:07:42'),
(2, 'Electrico', '2020-08-25 07:22:05'),
(3, 'frenos', '2020-08-25 07:22:19'),
(4, 'motor', '2020-08-25 07:22:33'),
(5, 'cojinetes', '2020-08-25 07:22:47'),
(6, 'clutch', '2020-08-25 07:23:00'),
(7, 'direccion y trasmision', '2020-08-25 07:23:15'),
(8, 'herramientas manual', '2020-10-07 02:17:58'),
(14, 'herramientas motor', '2020-10-07 04:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `telefono`, `direccion`, `compras`, `ultima_compra`, `fecha`) VALUES
(6, 'rene', '(502) 5555-5555', 'sanarate', 2, '2020-10-05 21:57:30', '2020-10-06 03:57:30'),
(7, 'victor trujillo', '(502) 3333-3333', 'sanarate', 11, '2020-10-06 22:14:24', '2020-10-07 04:14:24'),
(8, 'pedro', '(222) 2222-5551', 'capital', 7, '2020-10-05 22:03:12', '2020-10-06 04:03:12'),
(9, 'pedro zuleta', '(502) 2525-6411', 'cerrito la virgen', 6, '2020-10-06 20:32:14', '2020-10-07 02:32:14'),
(10, 'juan', '(444) 4444-4444', 'sanarate', 1, '2020-10-05 22:05:45', '2020-10-06 04:05:45'),
(12, 'nuevo1', '(502) 2222-2222', 'gustatoya1', 1, '2020-10-06 11:31:51', '2020-10-06 17:31:51'),
(13, 'nuevo2', '(502) 5555-5555', 'sanarate3', 0, '0000-00-00 00:00:00', '2020-10-02 21:10:08'),
(14, 'nuevo desde venta', '(502) 3333-3333', 'sanarate desde venta', 0, '0000-00-00 00:00:00', '2020-10-02 21:24:23'),
(16, 'prueba', '(502) 5536-5555', 'zona 2 sanarate', 0, '0000-00-00 00:00:00', '2020-10-07 04:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(65, 1, '104', 'liquido de frenos', 'vistas/img/productos/default/default.png', 1, 35, 43.75, 9, '2020-10-07 02:32:14'),
(66, 4, '401', 'coginete', 'vistas/img/productos/default/default.png', 8, 10, 50, 2, '2020-10-07 04:14:24'),
(67, 3, '301', 'bobina', 'vistas/img/productos/default/default.png', 7, 35, 43.75, 8, '2020-10-06 17:31:51'),
(69, 1, '105', 'luces', 'vistas/img/productos/default/default.png', 7, 100, 125, 5, '2020-10-07 02:35:33'),
(73, 8, '801', 'llave 20', 'vistas/img/productos/default/default.png', 20, 15, 18.75, 0, '2020-10-07 02:19:29'),
(74, 14, '1401', 'llave 30', 'vistas/img/productos/default/default.png', 20, 55, 68.75, 0, '2020-10-07 04:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Morlón Aguilar', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 1, '2020-10-09 17:59:32', '2020-10-09 23:59:32'),
(74, 'Yaseli Ceron', 'yaseli', '$2a$07$asxx54ahjppf45sd87a5auZknzDsWGzbBqc4ZrTlL0HEspos58aAq', 'Bodega', 1, '2020-10-08 09:30:36', '2020-10-08 15:30:36'),
(75, 'Yaseli Ceron', 'ceron', '$2a$07$asxx54ahjppf45sd87a5aupfTdL.zoZs0bhZzxO0ikqAPqmxM0sre', 'Vendedor', 1, '0000-00-00 00:00:00', '2020-10-06 18:42:26'),
(76, 'Marlon Aguilar', 'bodega', '$2a$07$asxx54ahjppf45sd87a5aunR8VIF9qUaIDmcIETBQid0F0QHtgFra', 'Bodega', 0, '0000-00-00 00:00:00', '2020-10-08 14:14:47'),
(77, 'Marlon Aguilar', 'venta', '$2a$07$asxx54ahjppf45sd87a5auYkF87gT5BhQsasX/.VNgRyIKV/OK4U.', 'Vendedor', 1, '0000-00-00 00:00:00', '2020-10-06 18:42:28'),
(78, 'Julieta Sandoval', 'julieta', '$2a$07$asxx54ahjppf45sd87a5au8bhWz0nBvsrxWipn6ofwAcyWM/a.19e', 'Vendedor', 1, '2020-10-08 11:03:46', '2020-10-08 17:03:46'),
(79, 'Julio Aguilar', 'julio', '$2a$07$asxx54ahjppf45sd87a5auQhldmFjGsrgUipGlmQgDAcqevQZSAAC', 'Vendedor', 1, '0000-00-00 00:00:00', '2020-10-06 18:42:34'),
(80, 'VICTOR MIGUEL ', 'victor', '$2a$07$asxx54ahjppf45sd87a5auig5Mw2E4iujs8rIbWS4ypVuwsVbH3eO', 'Bodega', 0, '0000-00-00 00:00:00', '2020-10-07 04:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(44, 1, 6, 1, '[{\"id\":\"66\",\"descripcion\":\"coginete\",\"cantidad\":\"1\",\"stock\":\"9\",\"precio\":\"50\",\"total\":\"50\"}]', 0, 50, 50, 'Efectivo', '2020-06-06 03:57:30'),
(45, 2, 8, 1, '[{\"id\":\"67\",\"descripcion\":\"bobina\",\"cantidad\":\"5\",\"stock\":\"8\",\"precio\":\"43.75\",\"total\":\"218.75\"}]', 0, 218.75, 218.75, 'Efectivo', '2020-07-06 04:03:12'),
(46, 3, 7, 1, '[{\"id\":\"69\",\"descripcion\":\"luces\",\"cantidad\":\"5\",\"stock\":\"7\",\"precio\":\"125\",\"total\":\"625\"}]', 0, 625, 625, 'Efectivo', '2020-08-06 04:04:46'),
(47, 4, 10, 1, '[{\"id\":\"71\",\"descripcion\":\"bombilla\",\"cantidad\":\"1\",\"stock\":\"22\",\"precio\":\"31.25\",\"total\":\"31.25\"}]', 0, 31.25, 31.25, 'Efectivo', '2020-09-06 04:05:45'),
(48, 5, 12, 1, '[{\"id\":\"67\",\"descripcion\":\"bobina\",\"cantidad\":\"1\",\"stock\":\"7\",\"precio\":\"43.75\",\"total\":\"43.75\"}]', 5.25, 43.75, 49, 'Efectivo', '2020-10-06 17:31:51'),
(50, 7, 9, 78, '[{\"id\":\"71\",\"descripcion\":\"bombilla\",\"cantidad\":\"1\",\"stock\":\"21\",\"precio\":\"31.25\",\"total\":\"31.25\"}]', 0, 31.25, 31.25, 'TD-1155422256', '2020-10-06 17:33:24'),
(51, 8, 9, 1, '[{\"id\":\"65\",\"descripcion\":\"liquido de frenos\",\"cantidad\":\"2\",\"stock\":\"1\",\"precio\":\"43.75\",\"total\":\"87.5\"}]', 10.5, 87.5, 98, 'TC-1254638', '2020-10-07 02:34:05'),
(52, 9, 7, 78, '[{\"id\":\"66\",\"descripcion\":\"coginete\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"50\",\"total\":\"50\"}]', 0, 50, 50, 'Efectivo', '2020-10-07 04:14:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
