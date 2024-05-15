-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2024 a las 06:20:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `empresa` varchar(60) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `correo`, `empresa`, `fecha`) VALUES
(1, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(2, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(3, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(4, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(5, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(6, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(7, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(8, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(9, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(10, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(11, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(12, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(13, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(14, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(15, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(16, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(17, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(18, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(19, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(20, 'Aldo', 'tole@gmail.com', 'Coparmex', '2024-05-14'),
(21, 'Aldo', 'tole@gmail.com', 'Pepsi', '2024-05-14'),
(22, 'Isaac', 'isaac@coparmex.com', 'Coparmex', '2024-05-14'),
(23, 'Diego', 'toledom@gmail.com', 'Mundo de Tool de México, S.A de C.V ', '2024-05-14'),
(24, 'Isaac', 'jus@gmail.com', 'Oxxo', '2024-05-14'),
(25, 'Aldo', 'toledom@gmail.com', 'Coparmex', '2024-05-15'),
(26, 'Aldo', 'toledom@gmail.com', 'Coparmex', '2024-05-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
