-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2021 a las 11:10:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_users`
--

CREATE TABLE `status_users` (
  `id_status` int(2) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status_users`
--

INSERT INTO `status_users` (`id_status`, `status`) VALUES
(0, 'eliminado temporal'),
(1, 'activo'),
(2, 'baneado'),
(3, 'pendiente'),
(4, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nick` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname_01` varchar(30) NOT NULL,
  `surname_02` varchar(30) DEFAULT NULL,
  `birth_date` datetime NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_connection` datetime NOT NULL DEFAULT current_timestamp(),
  `id_estado` int(2) NOT NULL,
  `clasificacion` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `email`, `name`, `surname_01`, `surname_02`, `birth_date`, `pwd`, `create_date`, `last_connection`, `id_estado`, `clasificacion`) VALUES
(1, 'alvin', 'alvin@alvin.com', 'Juan', 'Marcea', 'Tomas', '1969-04-01 00:00:00', '$2y$10$6ofSjhYiSGon/PZaNmzK/e0MKrPHYuTBNoeewRNCkOm.QouryyWfi', '2021-04-13 09:05:37', '2021-04-15 10:56:50', 1, 0),
(2, 'wicka', 'wicka@wicka.es', 'Ester', 'Kalimantan', 'Derawan', '1971-12-16 00:00:00', '$2y$10$kW6VBgeIVqRLsM7nLP.i8.dha2np5uKkDENG7KzzF0Z/JufwNHB6i', '2021-04-13 09:23:57', '2021-04-15 10:57:47', 4, 0),
(3, 'varum', 'varum@varum.com', 'Elisabeth', 'Luna', 'Potter', '2011-12-27 00:00:00', '$2y$10$Ig2XIXOOl6Mtd7tNbsKrI.LpaiJrf9TM2rIrCotYyP3grEy4t7r8W', '2021-04-13 09:35:24', '2021-04-13 17:21:48', 1, 0),
(4, 'gollum', 'gollum@gollum.com', 'Gollum', 'Frodo', 'Bolson', '2001-02-01 00:00:00', '$2y$10$2pbuBLorC4LQb4L5B9thf.gsMk82doiraIZXOI7WzcflFDi6PXuuW', '2021-04-13 09:37:33', '2021-04-13 19:07:00', 0, 0),
(5, 'doreimon', 'doreimon@doreimon.com', 'Pepe', 'Pepito', 'Palotes', '1979-12-11 00:00:00', '$2y$10$HokQyTnUttTPR.NifRCGwOgpsfeeSXafs7r13/EAl4/U5eYh3wpe6', '2021-04-13 09:39:16', '2021-04-13 09:39:16', 1, 0),
(6, 'fish', 'fish@fish.com', 'Mero', 'Verde', 'Caribe', '2005-01-01 00:00:00', '$2y$10$4eeqGXNi55DgyyWw52Pxo.Bx0Er5lygWMzDbBnsuA8lsi5anGCrAy', '2021-04-13 09:52:31', '2021-04-13 09:52:31', 2, 0),
(7, 'fangoria', 'fango@fango.es', 'Alaska', 'Fanguita', 'Rodriguez', '1982-02-08 00:00:00', '$2y$10$xPV4DcRutNEHW2Fuq3CLNOjH7OBkce7x.x9KFFaAgar9Im.CJy4KK', '2021-04-13 10:11:59', '2021-04-13 10:11:59', 3, 0),
(8, 'dominium', 'dominium@dominium.com', 'Luke', 'Sky', 'Walker', '1962-11-25 00:00:00', '$2y$10$tk0B9fynQMIWHVSXcrBCru7BnwfkVSa2yqxNWVxDvRfHob1fYEfpG', '2021-04-13 10:16:44', '2021-04-13 10:16:44', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `status_users`
--
ALTER TABLE `status_users`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`nick`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `status_users`
--
ALTER TABLE `status_users`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `status_users` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
