<?php
	//Requerir el archivo de conexion al servidor
	require_once('inc/cxnServidor.php');

	// Variable que indica la seccion
	$Seccion = 'Productos';

  // Variable URL ID del producto para ver su detalle
  $idProducto	= trim($_GET['idProducto']);

 ?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8_general_ci">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Detalle del producto">
		<meta name="author" content="JLRZ">
		<link rel="shortcut icon" href="favicon.ico">

		<title>miTienda.com</title>

		<!-- * * * * *  C S S  * * * * * -->

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/sticky-footer-navbar.css" rel="stylesheet">

		<!-- Fontawesome styles -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!-- Estilos Generales -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Estilos del plugin goUp Button -->
		<link href="jquery/plugins/goUp/css/default.css" type="text/css" rel="stylesheet">
		<link href="jquery/plugins/goUp/css/estilos.css" type="text/css" rel="stylesheet">

		<!--**Estilos del plugin fancyBox**-->
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="jquery/plugins/fancyBox2_1_4/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
		<!-- helpers opcionales - button, thumbnail y/o media -->
		<link rel="stylesheet" href="jquery/plugins/fancyBox2_1_4/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />


		<!-- * * * * *  J S  * * * * * -->

		<!-- Compatibilidad con IE8 y 9-->
    	<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Incluir la Barra de Navegacion Ajustada -->
		<?php include("inc/navbar.php"); ?>

		<!-- Contenido de Página -->
		<div class="container">

			<div class="page-header">
				<h1>DETALLES DEL PRODUCTO</h1>
			</div>


      <?php
      //Este módulo recupera muetra el listado de porducto de la categoria Informatica

      	//Consulta Recuperar productos de la categoria Informatica
      	$query_rsVwProductos = "SELECT * FROM vwProductos WHERE id_Producto = $idProducto ";
      	//RecordSet de la consulta
      	$rsVwProductos = mysql_query($query_rsVwProductos, $cxnServidor) or die(mysql_error());
      	//Matriz que devulve las filas recuperadas
      	$row_rsVwProductos = mysql_fetch_assoc($rsVwProductos);

        $totalRows_rsVwProductos = mysql_num_rows($rsVwProductos);

       ?>



      <div class="bs-example page-header" data-example-id="bordered-table1">
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="active">
            <th>ID</th>
			<th>Foto</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Existencias</th>
          </tr>
        </thead>
        <tbody>


          <!-- Repetición de filas recuperadas -->
            <?php do { ?>
            <tr>
              <th scope="row"> <?php echo $row_rsVwProductos['id_Producto']; ?> </th>
			  <td> <a class="fancyboxFoto" href="img/productos/<?php echo $row_rsVwProductos['foto']; ?>"> <img src="img/miniaturas/<?php echo $row_rsVwProductos['foto']; ?>" alt=""> </td>
			  <td> <?php echo $row_rsVwProductos['producto']; ?> </td>
              <td> <?php echo $row_rsVwProductos['marca']; ?> </td>
              <td> <?php echo '$'. $row_rsVwProductos['precio']; ?> </td>
              <td> <?php echo $row_rsVwProductos['existencias']; ?> </td>
            </tr>
            <tr>
          <!-- Concluye la repetición -->
          <?php } while ($row_rsVwProductos = mysql_fetch_assoc($rsVwProductos)); ?>

        </tbody>
      </table>

      <!-- Boton para regresar a la pagina de producros -->
      <!-- <a href="productos.php"> <button id="btnRegresar" type="button" class="btn btn-warning">Regresar</button> </a> -->
	  <a href="javascript:history.back();"> <button type="button" class="btn btn-warning">Regresar</button> </a>

      <!-- Espaciador de 10 em -->
      <div class="spacer10em "></div>

      </div>



		<!-- * * * * Boton ir arriba * * * * -->
		<a href="#" class="scroll-top">Ir Arriba</a>
		<script src="jquery/plugins/goUp/js/jquery.js"></script>
		<script src="jquery/plugins/goUp/js/funciones.js"></script>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<!-- ** F A N C Y B O X - Scripts de configuracion ** -->
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="jquery/plugins/fancyBox2_1_4/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="jquery/plugins/fancyBox2_1_4/source/jquery.fancybox.pack.js?v=2.1.4"></script>
		<!-- Script de configuracion del FancyBox del Pod Testimonios-->
		<script src="js/fancyBox_config_Foto.js"></script>

	</body>
</html>

<!-- Cerrar la conexion al servidor -->
<?php mysql_close($cxnServidor); ?>
