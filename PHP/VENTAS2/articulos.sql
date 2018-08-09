-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-09-2016 a las 22:29:17
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `losinmortales`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `articulos`
-- 

CREATE TABLE `articulos` (
  `id_art` varchar(6) NOT NULL,
  `marca` varchar(40) default NULL,
  `modelo` varchar(40) default NULL,
  PRIMARY KEY  (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `articulos`
-- 

INSERT INTO `articulos` VALUES ('ART01', 'LG', 'LG_01');
INSERT INTO `articulos` VALUES ('ART02', 'SONY', 'PLAY 4');
INSERT INTO `articulos` VALUES ('ART03', 'KINGTOSM', 'SAN DISK 02');
