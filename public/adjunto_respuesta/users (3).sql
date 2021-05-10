-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2021 a las 21:39:43
-- Versión del servidor: 10.4.14-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u101685278_paramillos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'minero',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pachi', 'pachi@minner.app', NULL, '$2y$10$4Q.6BjFMaX.hcrjTtikyjuOHYxy4BHvcLFX0Wp00QRsPErzQ9BTni', 'minero', NULL, NULL, NULL, '2020-12-30 14:11:02', '2020-12-30 14:11:02'),
(2, 'ratondeorilla', 'raton@gmail.com', NULL, '$2y$10$ouU0k1JVmYG6hl34noYlO.zNXMlo0oj0M7trEeip0okGIoTaJCgbm', 'minero', NULL, NULL, 'aalKieIoH5eAI8coNpzjaf2txzUXCes6Yh5uhViYSZeFV2sXWtfAN5KMRo7s', '2020-12-30 15:09:22', '2020-12-30 15:09:22'),
(3, 'Nicolás irañeta', 'niraneta@servergroupsa.com', NULL, '$2y$10$g5kEILpaYdCVdCAthbR7t.f2if89AuiDdPxVi6JJYwXNnK3uFVMRO', 'minero', NULL, NULL, 'PVePYnxJGtrlz3s6SFjACWMBmQJMDqKMhim1cFvafBvG5foy5Z4brKDe19mv', '2020-12-30 15:40:19', '2020-12-30 15:40:19'),
(4, 'Nicolas Garcia Danza', 'ngarcia@servergroupsa.com', NULL, '$2y$10$BaQMulzgBV56o/VvAIX4Z.3DVRXyXsbPmvVl/UCb3n8TyTqqK8SLO', 'minero', NULL, NULL, NULL, '2020-12-30 19:19:35', '2020-12-30 19:19:35'),
(5, 'Celular', 'pachi@man.com', NULL, '$2y$10$nekqERHKmQQv34QydMwcpuXX9fvIxYuTfqIQKIkCSpsC/8ME09fx.', 'admin', NULL, NULL, 'WQx2sVlb12AsU9vaylOfeRTerRWdbcxUgK4OOxjaj6kJl5GBknHFKv6hWD02', '2021-01-04 15:11:21', '2021-01-04 15:11:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
