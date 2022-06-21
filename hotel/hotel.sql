-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 23:07:56
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `llegada` date NOT NULL,
  `salida` date NOT NULL,
  `persona` int(1) NOT NULL,
  `habitacion` varchar(20) NOT NULL,
  `spa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`nombre`, `correo`, `telefono`, `llegada`, `salida`, `persona`, `habitacion`, `spa`) VALUES
('Joel Canté', 'joel@gmail.com', '9999990101', '2021-06-14', '2021-06-16', 2, 'AkbalSuite', 'Terapias'),
('Socorro', 'socorro@outlook.com', '9999997890', '2021-06-18', '2021-06-20', 4, 'DoubleSuite', 'Tratamientos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_us` varchar(10) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_us`, `contrasena`) VALUES
('joel', '12345'),
('admin', '4dm1n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
