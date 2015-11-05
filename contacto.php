<?php

// Variable que indica la seccion
$Seccion = 'Contacto';

//Requerir el archivo de conexion al servidor
require_once('inc/cxnServidor.php');

//Consulta Recuperar Categorias
$qryCategorias = "SELECT * FROM categorias ORDER BY id_Categoria ASC";
//RecordSet de la consulta
$rsCategorias = mysql_query($qryCategorias, $cxnServidor) or die(mysql_error());
//Matriz que devulve las filas recuperadas
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);

?>

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

		<!-- Estilos Generales -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Estilos para componentes del formulario de informes -->
		<link rel="stylesheet" href="css/formularioContacto.css" type="text/css" media="all">

		<!-- Estilos del Widget Combobox-->
		<link rel="stylesheet" href="jquery/plugins/Combobox_square1_0/square-ui-combobox.css">

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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>

	<body>

		<!-- Incluir la Barra de Navegacion Ajustada -->
		<?php include("inc/navbar.php"); ?>

		<!-- Contenido de Página -->
		<div class="container">

			<div class="page-header">
				<h1>CONTACTO</h1>
			</div>

			<div class="row">

				<!-- Formulario de Contacto -->
				<form name="frmInformes" id="myForm" data-toggle="validator" method="post" action="inc/enviaContacto.php" class="col-md-12 col-sm-12 col-xs-12">
				<!-- <form name="frmInformes" id="myForm" data-toggle="validator" method="post" class="col-md-12 col-sm-12 col-xs-12"> -->

					<!--Nombre-->
					<div class="row">
						<div class="form-group col-md-4">
							<label for="txtNombre" class="txtLblFrmInformes control-label">Nombre:</label><br>
							<input type="text" class="span5 form-control" name="txtNombre" id="txtNombre" placeholder="Escriba su nombre aqu&iacute;">
							<div class="spacer2em"></div>
						</div>
					</div>

					<!--eMail-->
					<div class="row">
						<div class="form-group col-md-4">
							<label for="txtMail" class="txtLblFrmInformes control-label">Mail:</label><br>
							<input type="email" class="span5 form-control" name="txtMail" id="txtMail" placeholder="Escriba su eMail">
							<div id="resultado"></div>
							<div class="spacer2em"></div>
						</div>
					</div>


					<!--Telefono-->
					<div class="row">
						<div class="form-group col-md-4">
							<label for="txtTelefono" class="txtLblFrmInformes control-label">Tel&eacute;fono:</label><br>
							<input type="text" class="span5 form-control" name="txtTelefono" id="txtTelefono" placeholder="Escriba el telefono aqu&iacute;">
							<div class="spacer2em"></div>
						</div>
					</div>


					<!--Categoria-->
					<div class="form-group">
						<label for="sltCategorias" class="txtLblFrmInformes control-label">Categorias: <span> (seleccione una o escr&iacute;bala)</span></label>
						<select class="options form-control" id="sltCategorias" name="sltCategorias">
							<!-- Inicia repeticion de filas recuperadas de categorias -->
							<?php do { ?>
							<option value="<?php echo $row_rsCategorias['categoria'] ?>"><?php echo $row_rsCategorias['categoria'] ?></option>
							<!-- Concluye la repetición -->
						    <?php } while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias)); ?>
						</select>
						<div class="spacer2em"></div>
					</div>


					<!--Mensaje-->
					<div class="form-group">
						<label for="txaMensaje" class="txtLblFrmInformes control-label">Mensaje:</label><br>
						<textarea class="span8" name="txaMensaje" id="txaMensaje" placeholder="Escriba su mensaje aqu&iacute;..." rows="10"></textarea>
						<div class="spacer2em"></div>
					</div>

					<!-- Captcha -->
					<label class="txtLblFrmInformes">Captcha:</label>
					<div class="form-group">
						<label class="col-lg-3 control-label" id="captchaOperation" style="width:auto; color:#7f8c8d;"></label>
						<div class="col-lg-2">
							<input type="text" class="form-control" name="captcha" />
						</div>
					</div>



					<!--Enviar-->
					<div class="row" align="center">
						<div class="spacer10em"></div>
						<div class="form-group col-md-12">
							<input type="submit" class="myBtn myBtn-primary" onclick="this.disabled=true; this.value='Enviando...'; this.form.submit()" value="Enviar"></input>
						</div>
					</div>
					<div class="spacer15em"></div>

					<!--Captcha-->

				</form>

			</div>


		</div><!--/Contenido de Página-->


		<!-- Incluir El Pie de pagina ajustado a la parte inferior -->
		<?php include("inc/footer.php"); ?>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>

		<!-- Script del plugin Bootstrap Validator -->
		<script src="jquery/plugins/bootstrapValidator/bootstrapValidator.min.js"></script>
 		<!-- Script de configuraciones del plugin Bootstrap Validator -->
		<script type="text/javascript" src="js/validator.js"></script>
		<!-- Script del validador de cooreo electrónico -->
		<script type="text/javascript" src="js/validadorCorreo.js"></script>

		<!-- Script de configuracion del Widget Combobox -->
		<script src="jquery/plugins/Combobox_square1_0/square-ui.combobox.js"></script>
		<!-- Script de presets del Widget Combobox -->
		<script src="js/ini.js"></script>

		<!-- Script para dar el foco a la caja de texto de Nombre -->
		<script>
			document.getElementById('txtNombre').focus();
		</script>

	</body>
</html>
