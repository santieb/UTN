-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2022 a las 01:58:27
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hc`
--

CREATE TABLE `hc` (
  `id_hc` int(11) NOT NULL,
  `fregistro` date NOT NULL,
  `tipo_sangre` text NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `id_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hc`
--

INSERT INTO `hc` (`id_hc`, `fregistro`, `tipo_sangre`, `peso`, `altura`, `id_mascota`) VALUES
(1, '2012-12-12', 'A+', 25, 0.6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `fnacimiento` date NOT NULL,
  `especie` text NOT NULL,
  `raza` text NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre`, `fnacimiento`, `especie`, `raza`, `id_responsable`) VALUES
(1, 'roco', '2012-12-12', 'perro', 'ovejero', 1),
(2, 'roco', '2012-12-12', 'perro', 'ovejero', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_res` int(11) NOT NULL,
  `nomyape` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`id_res`, `nomyape`, `direccion`, `telefono`, `email`) VALUES
(1, 'Dylan Erdini', 'Perito Moreno', 2964282923, 'dylan@gmail.com'),
(3, 'Miguel Leiva', 'wilson', 2964000000, 'miguel@gmail.com'),
(4, 'felipe', 'pioneros fueguinos', 2964000345, 'felipe@gmail.com'),
(5, 'juan', 'vapor amadeo', 2964252525, 'juan@gmail.com'),
(6, 'victor', 'perito moreno', 2964225253, 'victor@gmail.com'),
(7, 'carlos', 'catamarca 123', 2964987654, 'carlos@gmail.com'),
(8, 'angel', 'viedma', 29642252525, 'angel@gmail.com'),
(9, '', 'dsadsa', 5656, 'dsaa@gdsad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hc`
--
ALTER TABLE `hc`
  ADD PRIMARY KEY (`id_hc`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_res`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hc`
--
ALTER TABLE `hc`
  MODIFY `id_hc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
