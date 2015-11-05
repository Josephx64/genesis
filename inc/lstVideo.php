<?php
//Este módulo recupera muetra el listado de porducto de la categoria VIDEO

	//Consulta Recuperar productos de la categoria Informatica
	$query_rsVwProductos = "SELECT * FROM vwProductos WHERE categoria = 'Video' ";
	//RecordSet de la consulta
	$rsVwProductos = mysql_query($query_rsVwProductos, $cxnServidor) or die(mysql_error());
	//Matriz que devulve las filas recuperadas
	$row_rsVwProductos = mysql_fetch_assoc($rsVwProductos);

 ?>



<div id="Video" class="spacer10em"></div>
<h2><?php echo $row_rsVwProductos['categoria'] ?></h2>

<div class="bs-example page-header" data-example-id="bordered-table1">
<table class="table table-bordered table-hover">
  <thead>
    <tr class="active">
      <th>ID</th>
      <th>Producto</th>
      <th>Marca</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>


    <!-- Repetición de filas recuperadas -->
	<?php do { ?>
		<tr>
			<th scope="row"> <?php echo $row_rsVwProductos['id_Producto']; ?> </th>
			<td>
				<a href="detalleProducto.php?idProducto=<?php echo $row_rsVwProductos['id_Producto'];?> ">
					<?php echo $row_rsVwProductos['producto']; ?>
				</a>
			</td>
			<td> <?php echo $row_rsVwProductos['marca']; ?> </td>
			<td> <?php echo '$'. $row_rsVwProductos['precio']; ?> </td>
		</tr>
		<tr>
			<!-- Concluye la repetición -->
			<?php } while ($row_rsVwProductos = mysql_fetch_assoc($rsVwProductos)); ?>

  </tbody>
</table>

<!-- Espaciador de 10 em -->
<div class="spacer10em "></div>

</div>
