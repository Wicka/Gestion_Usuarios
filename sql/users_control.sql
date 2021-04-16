-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2021 a las 13:55:41
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
(1, 'alvin', 'alvin@alvin.es', 'Ardilla', 'Roja', 'Borneo', '2000-01-01 00:00:00', '$2y$10$sCQoZKbU8DICovRb/5dDOOekBKOLc93lWo2LRFx7LT97DIznJiSSa', '2021-04-16 13:45:25', '2021-04-16 13:51:56', 0, 0),
(2, 'gollum', 'gollum@gollum.es', 'Gollum', 'Malote', 'Joyero', '2000-11-01 00:00:00', '$2y$10$v1BWD9U5JuHQFTe46BFWr.406KsyQc6Ny/pMIwO/yP9UkB.i0G0g.', '2021-04-16 13:47:15', '2021-04-16 13:47:15', 1, 0),
(3, 'titania', 'oberon@oberon.es', 'Oberon', 'Titania', 'Verano', '2000-11-01 00:00:00', '$2y$10$osAj.hC2wipXtMKRo7rrHe3SV6TSJNlMT5W4T.2DnaVQeVPMOZ32G', '2021-04-16 13:48:12', '2021-04-16 13:48:12', 1, 0),
(4, 'otelo', 'otelo@otelo.com', 'Shakespeare ', 'Desdemona', 'celos', '2000-01-01 00:00:00', '$2y$10$kV29Uy8aVQX2rudoSJL/uOwHLY.eW2tu1HwI5zsiUXyFl/fiKRJMS', '2021-04-16 13:50:45', '2021-04-16 13:51:16', 4, 0),
(5, 'yugi', 'muto@muto.es', 'Kazuki ', 'Takahashi', 'muto', '2000-11-11 00:00:00', '$2y$10$PfP9LmIQWxFmwGVMlEFqJ.Oza9Yt8HJHVLa/reL5toiNJL0NmgTn2', '2021-04-16 13:54:51', '2021-04-16 13:54:51', 1, 0);

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
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
