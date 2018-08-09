-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 15:16:40
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `carritocompras`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text collate utf8_spanish_ci NOT NULL,
  `descripcion` text collate utf8_spanish_ci NOT NULL,
  `imagen` text collate utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, 'cebolla', 'esta es una cebolla', 'cebolla.jpg', 10.5);
INSERT INTO `productos` VALUES (2, 'camara', 'esto es una camara', 'camara.jpg', 2200);
INSERT INTO `productos` VALUES (3, 'computadora', 'esto es una computadora', 'computadora.jpg', 95.3);
