-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 01-09-2016 a las 16:25:27
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `usuarios`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `id` bigint(7) unsigned zerofill NOT NULL auto_increment,
  `IDUSUARIO` bigint(5) NOT NULL,
  `NOMBRES` varchar(25) collate utf8_unicode_ci default NULL,
  `APELLIDOS` varchar(25) collate utf8_unicode_ci default NULL,
  `GRUPO` char(1) collate utf8_unicode_ci NOT NULL,
  `CLAVE` varchar(8) collate utf8_unicode_ci default NULL,
  `NIVEL` int(1) default NULL,
  `email` varchar(30) collate utf8_unicode_ci NOT NULL,
  `FECHA_REG` date NOT NULL,
  `HORA_SIST` time NOT NULL,
  `HORA_REG` time NOT NULL,
  `D_TIENDA` varchar(35) collate utf8_unicode_ci NOT NULL,
  `COD_T` varchar(5) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `IDX_IDUSU` (`IDUSUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES (0000001, 111, 'marco', 'palomino', '1', '7171', 1, 'marco@hotmail.com', '2013-05-21', '00:00:00', '00:00:00', 'GENERAL', '');
INSERT INTO `usuario` VALUES (0000002, 222, 'carlos', 'huara', '1', '8181', 1, 'carlos@hotmail.com', '2013-05-21', '00:00:00', '00:00:00', 'GENERAL', '');
INSERT INTO `usuario` VALUES (0000003, 333, 'monica', 'sanchez', '', '9999', 0, 'monica@hotmail.com', '0000-00-00', '00:00:00', '00:00:00', '', '');
INSERT INTO `usuario` VALUES (0000004, 444, 'kimberly', 'pura', '', '8888', 0, 'kimberly@hotmail.com', '0000-00-00', '00:00:00', '00:00:00', '', '');
INSERT INTO `usuario` VALUES (0000005, 123, 'juan', 'local', '', '1234', 1, 'juan@hotmail.com', '0000-00-00', '00:00:00', '00:00:00', 'GENERAL', '');
