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

CREATE ALGORITHM=UNDEFINED DEFINER=`cetecnet_jl`@`localhost` SQL SECURITY INVOKER VIEW `vwproductos` AS select `productos`.`id_Producto` AS `id_Producto`,`productos`.`id_Categoria` AS `id_Categoria`,`productos`.`producto` AS `producto`,`productos`.`id_Marca` AS `id_Marca`,`productos`.`precio` AS `precio`,`productos`.`existencias` AS `existencias`,`categorias`.`categoria` AS `categoria`,`marcas`.`marca` AS `marca`,`productos`.`foto` AS `foto` from ((`productos` join `categorias` on((`productos`.`id_Categoria` = `categorias`.`id_Categoria`))) join `marcas` on((`productos`.`id_Marca` = `marcas`.`id_Marca`))) order by `productos`.`id_Producto`;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id_Categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`id_Comentario`);

--
-- Indices de la tabla `general`
--
ALTER TABLE `general`
 ADD PRIMARY KEY (`idTexto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
 ADD PRIMARY KEY (`id_Marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id_Comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `general`
--
ALTER TABLE `general`
MODIFY `idTexto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
MODIFY `id_Marca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_Producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
