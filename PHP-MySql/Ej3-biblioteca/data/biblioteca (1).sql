-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2022 a las 04:25:21
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleprestamo`
--

CREATE TABLE `detalleprestamo` (
  `id` int(11) NOT NULL,
  `idPrestamo` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(255) NOT NULL,
  `titulo` text NOT NULL,
  `editorial` text NOT NULL,
  `fedicion` date NOT NULL,
  `idioma` text NOT NULL,
  `cantpaginas` int(255) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `editorial`, `fedicion`, `idioma`, `cantpaginas`, `estado`) VALUES
(2, 'Frusciante', 'CANVA', '2022-06-07', 'sp', 32, 'biblioteca'),
(3, 'Vai', 'CANVA', '2022-06-10', 'español', 300, 'biblioteca'),
(4, '1998', 'mandioca', '2022-06-07', 'aleman', 8050, 'biblioteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL,
  `socioId` int(11) NOT NULL,
  `fechaPrestamo` date NOT NULL,
  `fechaDevolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id` int(255) NOT NULL,
  `fingreso` date NOT NULL,
  `motivo` text NOT NULL,
  `fegreso` date DEFAULT NULL,
  `libro` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`id`, `fingreso`, `motivo`, `fegreso`, `libro`) VALUES
(1, '2020-02-02', 'se rom,pio la tapa', '2020-02-02', 2),
(2, '2022-06-15', 'se mancho con cafe', '2022-06-28', 3),
(3, '2022-06-23', 'asd', '2022-06-29', 3),
(4, '2022-06-23', 'asd', '2022-06-29', 3),
(5, '2022-07-02', 'motivo', '2022-06-08', 2),
(6, '2022-07-02', 'motivo', '2022-06-08', 2),
(7, '2022-06-29', '4', '2022-06-22', 3),
(8, '2022-06-29', '4', '2022-06-22', 3),
(9, '2022-06-26', 'asd', '2022-06-09', 3),
(10, '2022-06-26', 'asd', '2022-06-09', 3),
(11, '2022-06-26', 'asd', '2022-06-09', 3),
(12, '2022-06-26', 'asd', '2022-06-09', 3),
(13, '2022-06-18', 'asd', '2022-06-05', 3),
(14, '2022-06-15', 'ASDAAS', NULL, 4),
(15, '2022-06-24', 'asdf', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `id` int(255) NOT NULL,
  `nomyape` text NOT NULL,
  `fnacimiento` date NOT NULL,
  `direccion` text NOT NULL,
  `telefono` bigint(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id`, `nomyape`, `fnacimiento`, `direccion`, `telefono`, `email`) VALUES
(1, 'santiago', '2022-06-05', 'av rivadavia', 2964536865, 'santiago@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`) VALUES
(1, 'asdasd', '1234'),
(2, 'thomas', '1234'),
(8, 'usuario', '$pass'),
(9, 'santiago', 'santiago');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
