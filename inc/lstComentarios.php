<?php
//Este módulo recupera muetra el listado de comentarios enviados por medio del formulario de contacto

	//Consulta Recuperar productos de la categoria Informatica
	$query_rsComentarios = "SELECT * FROM comentarios";
	//RecordSet de la consulta
	$rsComentarios = mysql_query($query_rsComentarios, $cxnServidor) or die(mysql_error());
	//Matriz que devulve las filas recuperadas
	$row_rsComentarios = mysql_fetch_assoc($rsComentarios);
 ?>


<table class="table table-bordered table-hover">
  <thead>
    <tr class="active">
      <th>ID</th>
      <th>Nombre</th>
      <th>eMail</th>
      <th>Teléfono</th>
	  <th>Categoría</th>
	  <th>Comentario</th>
    </tr>
  </thead>
  <tbody>
	  <!-- Repetición de filas recuperadas -->
	  <?php do { ?>
		  <tr>
			  <th> <?php echo $row_rsComentarios['id_Comentario']; ?> </th>
			  <td> <?php echo $row_rsComentarios['nombre']; ?> </td>
			  <td> <?php echo $row_rsComentarios['email']; ?> </td>
			  <td> <?php echo $row_rsComentarios['telefono']; ?> </td>
			  <td> <?php echo $row_rsComentarios['categoria']; ?> </td>
			  <td> <?php echo $row_rsComentarios['comentario']; ?> </td>
		  </tr>
		  <!-- Concluye la repetición -->
		  <?php } while ($row_rsComentarios = mysql_fetch_assoc($rsComentarios)); ?>
	  </tbody>
</table>

<!-- Espaciador de 10 em -->
<div class="spacer10em "></div>
