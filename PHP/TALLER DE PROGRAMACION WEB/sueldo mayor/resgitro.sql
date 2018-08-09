-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-08-2016 a las 11:26:57
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `practica1`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `resgitro`
-- 

CREATE TABLE `resgitro` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `edad` int(50) NOT NULL,
  `sueldo` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `resgitro`
-- 

INSERT INTO `resgitro` VALUES ('leonardo', 'palomino', 'rimac', 'programador', 15, 1500);
INSERT INTO `resgitro` VALUES ('andres', 'palomino', 'villa', 'psicologo', 45, 2000);
INSERT INTO `resgitro` VALUES ('otoya', 'garriazo', 'mexico', 'estafador', 12, 600);
INSERT INTO `resgitro` VALUES ('carmona', 'bravo', 'jefe', 'ingeniero', 136, 1245);
INSERT INTO `resgitro` VALUES ('loco', 'lara', 'sjl', 'planchador', 45, 4552215);
