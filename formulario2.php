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

            <!-- FORMULARIO -->
            <form id="defaultForm" method="post" class="form-horizontal">

                <!-- Username -->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Username</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="username" />
                    </div>
                </div>

                <!-- eMail -->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email address</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="email" />
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="password" />
                    </div>
                </div>

                <!-- Retype Password -->
                <div class="form-group">
                    <label class="col-lg-3 control-label">Retype password</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="confirmPassword" />
                    </div>
                </div>

                <!-- Captcha -->
                <div class="form-group">
                    <label class="col-lg-3 control-label" id="captchaOperation"></label>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" name="captcha" />
                    </div>
                </div>

                <!-- Submit -->
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </div>

            </form><!--/Formulario-->


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
                    $(document).ready(function() {
                        // Generate a simple captcha
                        function randomNumber(min, max) {
                            return Math.floor(Math.random() * (max - min + 1) + min);
                        };
                        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

                        $('#defaultForm').bootstrapValidator({
                            message: 'This value is not valid',
                            fields: {
                                username: {
                                    message: 'The username is not valid',
                                    validators: {
                                        notEmpty: {
                                            message: 'The username is required and can\'t be empty'
                                        },
                                        stringLength: {
                                            min: 6,
                                            max: 30,
                                            message: 'The username must be more than 6 and less than 30 characters long'
                                        },
                                        regexp: {
                                            regexp: /^[a-zA-Z0-9_\.]+$/,
                                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                                        },
                                        different: {
                                            field: 'password',
                                            message: 'The username and password can\'t be the same as each other'
                                        }
                                    }
                                },
                                email: {
                                    validators: {
                                        notEmpty: {
                                            message: 'The email address is required and can\'t be empty'
                                        },
                                        emailAddress: {
                                            message: 'The input is not a valid email address'
                                        }
                                    }
                                },
                                password: {
                                    validators: {
                                        notEmpty: {
                                            message: 'The password is required and can\'t be empty'
                                        },
                                        identical: {
                                            field: 'confirmPassword',
                                            message: 'The password and its confirm are not the same'
                                        },
                                        different: {
                                            field: 'username',
                                            message: 'The password can\'t be the same as username'
                                        }
                                    }
                                },
                                confirmPassword: {
                                    validators: {
                                        notEmpty: {
                                            message: 'The confirm password is required and can\'t be empty'
                                        },
                                        identical: {
                                            field: 'password',
                                            message: 'The password and its confirm are not the same'
                                        },
                                        different: {
                                            field: 'username',
                                            message: 'The password can\'t be the same as username'
                                        }
                                    }
                                },
                                captcha: {
                                    validators: {
                                        callback: {
                                            message: 'Wrong answer',
                                            callback: function(value, validator) {
                                                var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                                return value == sum;
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    });
        		</script>


        	</body>
        </html>
