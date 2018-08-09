-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 15:16:19
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `carritocompras`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `compras`
-- 

CREATE TABLE `compras` (
  `id` int(11) NOT NULL auto_increment,
  `numeroventa` int(11) NOT NULL,
  `nombre` text collate utf8_spanish_ci NOT NULL,
  `imagen` text collate utf8_spanish_ci NOT NULL,
  `precio` text collate utf8_spanish_ci NOT NULL,
  `cantidad` text collate utf8_spanish_ci NOT NULL,
  `subtotal` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `compras`
-- 

