-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 22:59:27
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
-- Base de datos: `clase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` int(32) NOT NULL,
  `nombreJugador` varchar(32) NOT NULL,
  `partidasJugadas` int(10) NOT NULL,
  `Record` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`idJugador`, `nombreJugador`, `partidasJugadas`, `Record`) VALUES
(0, 'nico', 115, 0),
(1, 'jose99', 62, 0),
(3, 'han85', 15, 0),
(5, '', 0, 0),
(6, 'aaa', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `transportes` varchar(32) NOT NULL,
  `colores` varchar(32) NOT NULL,
  `frutas` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`transportes`, `colores`, `frutas`) VALUES
('coche', 'rojo', 'manzana'),
('moto', 'amarillo', 'pera'),
('autobus', 'azul', 'naranja'),
('bicicleta', 'verde', 'sandia'),
('furgoneta', 'naranja', 'melon'),
('camion', 'rosa', 'coco'),
('tren', 'morado', 'fresa'),
('avion', 'marron', 'mandarina'),
('helicoptero', 'negro', 'platano'),
('barco', 'blanco', 'nuez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nombreUsuario` varchar(32) NOT NULL,
  `claveUsuario` varchar(8) NOT NULL,
  `rolUsuario` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `claveUsuario`, `rolUsuario`) VALUES
(0, 'nico', '209', 0),
(1, 'jose99', '209', 1),
(3, 'han85', '209', 1),
(8, '', '', 1),
(9, 'aaa', '209', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`),
  ADD UNIQUE KEY `nombreJugador` (`nombreJugador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nombre` (`nombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
