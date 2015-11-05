<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8_general_ci">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Contacto">
		<meta name="author" content="JLRZ">
		<link rel="shortcut icon" href="favicon.ico">

		<title>miTienda.com</title>

		<!-- * * * * *  C S S  * * * * * -->

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Estilos del plugin Bootstrap Validator -->
		<link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>

		<!-- Custom styles for this template -->
		<link href="css/sticky-footer-navbar.css" rel="stylesheet">

		<!-- Fontawesome styles -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!-- Estilos Generales -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Estilos para componentes del formulario de informes -->
		<!-- <link rel="stylesheet" href="css/formularioContacto.css" type="text/css" media="all"> -->

		<!-- Estilos del Widget Combobox-->
		<!-- <link rel="stylesheet" href="jquery/plugins/Combobox_square1_0/square-ui-combobox.css"> -->

		<!--**Fuente Arvo**-->
		<link href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,700' rel='stylesheet' type='text/css'>

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
		<?php //include("inc/navbar.php"); ?>

		<!-- Contenido de Página -->
		<div class="container">
			<div class="row">
				<div class="page-header"> <h1 class="encabezadoGris"> Contacto </h1> </div>
			</div><!--/Fila -->


			<!-- Login Button -->
			<div class="loginbtn" align="center" style="margin:100px;">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal">
				<span class="glyphicon glyphicon-log-in"></span> Formulario de Login</button>
			</div>

			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				 <div class="modal-content">
					 <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						 <h4 class="modal-title">Inicio de Sesión</h4>
					 </div>

					 <div class="modal-body">

						 <!-- FORMULARIO -->
						 <form id="loginForm" method="post" class="form-horizontal" action="none">
							 <!-- Usuario -->
							 <div class="form-group">
								 <label class="col-md-3 control-label">Nombre de Usuario</label>
								 <div class="col-md-7">
									 <input type="text" class="form-control" name="usuario" />
								 </div>
							 </div>
							 <!-- password -->
							 <div class="form-group">
					 			<label class="col-md-3 control-label">Password</label>
								 <div class="col-md-7">
									 <input type="password" class="form-control" name="password" />
								 </div>
							 </div>
							 <!-- Submit -->
							 <div class="form-group">
								 <div class="col-md-5 col-md-offset-3">
									 <button type="submit" class="btn btn-default">Login</button>
								 </div>
							 </div>
						 </form>
					 </div>
				 </div>
			</div>
			</div>


        </div><!--/Contenido de Página-->


        		<!-- Incluir El Pie de pagina ajustado a la parte inferior -->
        		<?php //include("inc/footer.php"); ?>


        		<!-- Bootstrap core JavaScript
        		================================================== -->
        		<!-- Placed at the end of the document so the pages load faster -->
        		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        		<script src="bootstrap/js/bootstrap.min.js"></script>
        		<script src="js/jquery-ui.js"></script>

        		<!-- Script del plugin Bootstrap Validator -->
        		<script src="jquery/plugins/bootstrapValidator/bootstrapValidator.min.js"></script>
         		<!-- Script de configuraciones  del plugin Bootstrap Validator -->
        		<script type="text/javascript">
					$('#loginForm').bootstrapValidator({
						 message: 'Este valor no es valido',
						 feedbackIcons: {
							 valid: 'glyphicon glyphicon-ok',
							 invalid: 'glyphicon glyphicon-remove',
							 validating: 'glyphicon glyphicon-refresh'
						 },
						 fields: {

							 usuario: {
								 validators: {
									 notEmpty: {
										 message: 'El nombre de usuario es requerido'
									 }
								 }
							 },
							 
							 password: {
								 validators: {
									 notEmpty: {
										 message: 'La contraseña es requerida'
									 }
								 }
							 }
						 }
					});
        		</script>


        	</body>
        </html>
