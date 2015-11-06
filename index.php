<?php

	// Variable que indica la seccion
	$Seccion = 'Inicio';

	// Requerir el archivo de conexion al servidor
	require_once('inc/cxnServidor.php');

	// Consulta Recuperar textos
	$query_rsVwTextos = "SELECT * FROM general ORDER BY idTexto DESC";
	// RecordSet de la consulta
	$rsVwTextos = mysql_query($query_rsVwTextos, $cxnServidor) or die(mysql_error());
	// Matriz que devulve las filas recuperadas
	$row_rsVwTextos = mysql_fetch_assoc($rsVwTextos);

 ?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8_general_ci">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="miTienda.com">
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

		<!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron" id="jbnPrincipal">
	      <div class="container">
	        <span class="txtPortadaHeader">Bienvenido!</span>
	        <p><span class="txtPortadaSubtitulo">Aqui encuentras porque encuentras lo que buscas</span></p>
	      </div>
	    </div>

		<!-- Contenido de Página -->
		<div class="container" id="cntPrincipal">

			<div class="page-header">
				<h1> <?php echo $row_rsVwTextos['textoEspanol']; ?> </h1>
			</div>
			<p class="lead"> <?php echo $row_rsVwTextos['textoIngles']; ?> </p>

			<div class="spacer10em"></div>

		</div><!--/Contenido de Página-->


		<!-- Incluir El Pie de pagina ajustado a la parte inferior -->
		<?php include("inc/footer.php"); ?>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
