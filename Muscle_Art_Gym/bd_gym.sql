-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2016 a las 03:02:40
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_gym`
--

CREATE TABLE `cliente_gym` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(150) NOT NULL,
  `apellido_cliente` varchar(150) NOT NULL,
  `telefono_cliente` varchar(100) NOT NULL,
  `fecha_pago` date NOT NULL,
  `ruta` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente_gym`
--

INSERT INTO `cliente_gym` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `fecha_pago`, `ruta`) VALUES
(6, 'armando de jesus ', 'saveedra gonzales', '8343070583', '2016-03-31', 'imagenes/Armas_Garra.JPG'),
(9, 'hector hugo ', 'vargas acevedo', '8343070582', '2016-03-24', 'imagenes/12541030_966363133416864_6333348454914737497_n.png'),
(10, 'jose alfredo ', 'Matinez Hernandez', '8343070583', '2016-04-29', 'imagenes/FB_20151224_10_38_54_Saved_Picture.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente_gym`
--
ALTER TABLE `cliente_gym`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente_gym`
--
ALTER TABLE `cliente_gym`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
