-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2015 a las 20:59:13
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cetecnet_mitienda`
--

-- --------------------------------------------------------


--
-- Estructura Stand-in para la vista `vwproductos`
--
CREATE TABLE IF NOT EXISTS `vwproductos` (
`id_Producto` int(11)
,`id_Categoria` int(11)
,`producto` varchar(255)
,`id_Marca` int(11)
,`precio` double(9,2)
,`existencias` int(10)
,`categoria` varchar(255)
,`marca` varchar(255)
,`foto` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vwproductos`
--
DROP TABLE IF EXISTS `vwproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY INVOKER VIEW `vwproductos` AS select `productos`.`id_Producto` AS `id_Producto`,`productos`.`id_Categoria` AS `id_Categoria`,`productos`.`producto` AS `producto`,`productos`.`id_Marca` AS `id_Marca`,`productos`.`precio` AS `precio`,`productos`.`existencias` AS `existencias`,`categorias`.`categoria` AS `categoria`,`marcas`.`marca` AS `marca`,`productos`.`foto` AS `foto` from ((`productos` join `categorias` on((`productos`.`id_Categoria` = `categorias`.`id_Categoria`))) join `marcas` on((`productos`.`id_Marca` = `marcas`.`id_Marca`))) order by `productos`.`id_Producto`;

--
--