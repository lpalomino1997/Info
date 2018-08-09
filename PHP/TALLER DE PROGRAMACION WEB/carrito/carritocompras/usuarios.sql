-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 15:16:50
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `carritocompras`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` text collate utf8_spanish_ci NOT NULL,
  `Apellido` text collate utf8_spanish_ci NOT NULL,
  `Usuario` text collate utf8_spanish_ci NOT NULL,
  `Password` text collate utf8_spanish_ci NOT NULL,
  `Imagen` text collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'Luis', 'Grijalva', 'Luis', '1234', 'imagen.jpg');
