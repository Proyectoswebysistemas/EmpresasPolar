-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2016 a las 20:23:47
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webconempresarial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `cate_id` int(10) unsigned NOT NULL,
  `cate_nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `cate_descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cate_imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cate_id`, `cate_nombre`, `cate_descripcion`, `cate_imagen`) VALUES
(1, 'Amigos', 'Amigos de la vida', ''),
(2, 'Familiares', 'Familiares y Hermanos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `contactos_id` int(10) unsigned NOT NULL,
  `contactos_cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_nombres` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_sexo` int(11) NOT NULL,
  `contactos_estado_civil` int(11) NOT NULL,
  `contactos_fecha_nacimiento` date NOT NULL,
  `contactos_lugar_nacimiento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_provincia` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_region` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_localidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_correo_hotmail` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_correo_gmail` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_correo_opcional` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_celular` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_celular_opcional` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_facebook` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_google_plus` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_twitter` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_skype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_estudios` text COLLATE utf8_spanish_ci NOT NULL,
  `contactos_empleos` text COLLATE utf8_spanish_ci NOT NULL,
  `contactos_categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`contactos_id`), ADD KEY `contactos_categorias` (`contactos_categorias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `contactos_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
