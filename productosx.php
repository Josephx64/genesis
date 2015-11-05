<?php require_once('Connections/cxnServidor.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_cxnServidor, $cxnServidor);

$query_rsProductosInformatica = "SELECT * FROM vwproductos WHERE categoria = 'Informatica'";
$rsProductosInformatica = mysql_query($query_rsProductosInformatica, $cxnServidor) or die(mysql_error());
$row_rsProductosInformatica = mysql_fetch_assoc($rsProductosInformatica);
$totalRows_rsProductosInformatica = mysql_num_rows($rsProductosInformatica);


	// Variable que indica la seccion
	$Seccion = 'Productos';

 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8_general_ci">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Stio de prueba">
		<meta name="author" content="JLRZ">
		<link rel="shortcut icon" href="favicon.ico">

		<title>miTienda.com</title>

		<!-- * * * * *  C S S  * * * * * -->

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/sticky-footer-navbar.css" rel="stylesheet">

		<!-- Estilos Generales -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Estilos del plugin goUp Button -->
		<link href="jquery/plugins/goUp/css/default.css" type="text/css" rel="stylesheet">
		<link href="jquery/plugins/goUp/css/estilos.css" type="text/css" rel="stylesheet">

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
				<h1>CATEGORIAS DE PRODUCTOS</h1>
			</div>


			<!-- Fila Menu de Categorias -->
			<div class="row centered page-header" style="text-align: center;">

				<!-- Categoria Informatica -->
				<div class="col-sm-4">
		      <a href="#Informatica"> <img class="homepage-grid-icon" src="img/icon_informatica.png">
		      	<h5><strong>INFORMATICA</strong></h5>
					</a>
		      <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
	    	</div>

				<!-- Categoria Audio -->
				<div class="col-sm-4">
		      <a href="#Audio"> <img class="homepage-grid-icon" src="img/icon_audio.png">
		      	<h5><strong>AUDIO</strong></h5>
					</a>
		      <p class="text-muted">Donec nec justo eget felis facilisis fermentum Aliquam porttitor.</p>
	    	</div>

				<!-- Categoria Video -->
				<div class="col-sm-4">
		      <a href="#Video"> <img class="homepage-grid-icon" src="img/icon_video.png">
		      	<h5><strong>VIDEO</strong></h5>
					</a>
		      <p class="text-muted">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in.</p>
	    	</div>

				<!-- Categoria Deportes -->
				<div class="col-sm-4 col-md-offset-2 col-sm-offset-2">
		      <a href="#Deportes"> <img class="homepage-grid-icon" src="img/icon_deportes.png">
		      	<h5><strong>DEPORTES</strong></h5>
					</a>
		      <p class="text-muted">praesent dapibus, neque id cursus faucibus, tortor neque egestas augu.</p>
	    	</div>

				<!-- Categoria Hogar -->
				<div class="col-sm-4">
					<a href="#Hogar">
						<img class="homepage-grid-icon" src="img/icon_hogar.png">
						<h5><strong>HOGAR</strong></h5>
					</a>
					<p class="text-muted">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>
				</div>


			</div><!--/Fila Menu de Categorias-->


			<!-- Espaciador de 10 em -->
			<div class="spacer10em "></div>

					<!-- ************************** LISTADO DE PRODUCTOS ************************** -->

					<!-- Listado de productos de INFORMATICA -->
                    <!-- Listado de productos de AUDIO -->
				<div id="Audio" class="spacer10em"></div>
				<h2>INFORMATICA</h2>

				<div class="bs-example page-header" data-example-id="bordered-table">

			      <table class="table table-bordered">
				      <thead>
				        <tr class="active">
				          <th>ID</th>
				          <th>Producto</th>
				          <th>Marca</th>
				          <th>Precio</th>
				          </tr>
			          </thead>
				      <tbody>

				         <?php do { ?>
                            <tr>
                              <th scope="row"><?php echo $row_rsProductosInformatica['id_Producto']; ?></th>
                              <td><?php echo $row_rsProductosInformatica['producto']; ?></td>
                              <td><?php echo $row_rsProductosInformatica['marca']; ?></td>
                              <td><?php echo $row_rsProductosInformatica['precio']; ?></td>
                              </tr>
                            <tr>
						<?php } while ($row_rsProductosInformatica = mysql_fetch_assoc($rsProductosInformatica)); ?>

		              </tbody>
		          </table>

<!-- Espaciador de 10 em -->
				<div class="spacer10em "></div>

		  </div>




		  <!-- Listado de productos de AUDIO -->
				<div id="Audio" class="spacer10em"></div>
				<h2>AUDIO</h2>

				<div class="bs-example page-header" data-example-id="bordered-table">
				<table class="table table-bordered">
					<thead>
						<tr class="active">
							<th>ID</th>
							<th>Producto</th>
							<th>Marca</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Monitor</td>
							<td>Asus</td>
							<td>$1500</td>
						</tr>
						<tr>
							<tr>
								<th scope="row">2</th>
								<td>Monitor</td>
								<td>Asus</td>
								<td>$1500</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Monitor</td>
								<td>Asus</td>
								<td>$1500</td>
							</tr>
					</tbody>
				</table>

				<!-- Espaciador de 10 em -->
				<div class="spacer10em "></div>

			</div>



			<!-- Listado de productos de VIDEO -->
			<div id="Video" class="spacer10em"></div>
			<h2>VIDEO</h2>

			<div class="bs-example page-header" data-example-id="bordered-table">
			<table class="table table-bordered">
				<thead>
					<tr class="active">
						<th>ID</th>
						<th>Producto</th>
						<th>Marca</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Monitor</td>
						<td>Asus</td>
						<td>$1500</td>
					</tr>
					<tr>
						<tr>
							<th scope="row">2</th>
							<td>Monitor</td>
							<td>Asus</td>
							<td>$1500</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Monitor</td>
							<td>Asus</td>
							<td>$1500</td>
						</tr>
				</tbody>
			</table>

			<!-- Espaciador de 10 em -->
			<div class="spacer10em"></div>

		</div>




		<!-- Listado de productos de DEPORTES -->
		<div id="Deportes" class="spacer10em"></div>
		<h2>DEPORTES</h2>

		<div class="bs-example page-header" data-example-id="bordered-table">
		<table class="table table-bordered">
			<thead>
				<tr class="active">
					<th>ID</th>
					<th>Producto</th>
					<th>Marca</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Monitor</td>
					<td>Asus</td>
					<td>$1500</td>
				</tr>
				<tr>
					<tr>
						<th scope="row">2</th>
						<td>Monitor</td>
						<td>Asus</td>
						<td>$1500</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Monitor</td>
						<td>Asus</td>
						<td>$1500</td>
					</tr>
			</tbody>
		</table>

		<!-- Espaciador de 10 em -->
		<div class="spacer10em"></div>

	</div>


		</div><!--/Contenido de Página-->

		<!-- Espaciador de 10 em -->
		<div class="spacer10em"></div>


		<!-- Incluir El Pie de pagina ajustado a la parte inferior -->
		<?php include("inc/footer.php"); ?>


		<!-- * * * * Boton ir arriba * * * * -->
		<a href="#" class="scroll-top">Ir Arriba</a>
		<script src="jquery/plugins/goUp/js/jquery.js"></script>
		<script src="jquery/plugins/goUp/js/funciones.js"></script>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
<?php
mysql_free_result($rsProductosInformatica);
?>
