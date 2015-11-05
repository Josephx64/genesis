$(document).ready(function() {
	// Generar un captcha numerico simple
	function randomNumber(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	};

	// Generar aleatoriamente numeros entre 1 y 100 para el captcha
	$('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

	$('#myForm').bootstrapValidator({

		message: 'Este valor no es valido',
   	 	feedbackIcons: {
		valid: 'glyphicon glyphicon-ok',
		invalid: 'glyphicon glyphicon-remove',
		validating: 'glyphicon glyphicon-refresh'
   	 },
		fields: {

			// Nombre
			txtNombre: {
				message: 'El nombre no es v&aacute;lido',
				validators: {
					notEmpty: {
						message: 'El nombre es requerido y no puede estar vacio'
					},
					stringLength: {
						min: 9,
						max: 35,
						message: 'El usuario debe tener m&aacute;s 9 y menos de 35 caracteres'
					},
					regexp: {
						regexp: /^[a-zA-Z]/,
						message: 'El usuario solo debe etar formado por caracteres alfabeticos'
					},

					// different: {
					// 	field: 'password',
					// 	message: 'El usuario y contraseña no pueden ser iguales'
					// }
				}
			},

			// eMail
			txtMail: {
				validators: {
					notEmpty: {
						message: 'La direcci&oacute;n de correo es requerida y no puede estar vacia'
					},
					emailAddress: {
						message: 'La direcci&oacute;n de correo no es va&acute;lida'
					}
				}
			},

			// Telefono
			txtTelefono: {
				validators: {
					notEmpty: {
						message: 'El tel&eacute;fono es requerido'
					},
					regexp: {
						regexp: /^[0-9 ]+$/,
						message: 'El tel&eacute;fono solo puede contener n&uacute;meros'
					},
					stringLength: {
						min: 10,
						max: 17,
						message: 'El tel&eacute;fono debe tener al menos 7 y un m&aacute;ximo de 12 n&uacute;meros'
					},
				}
			},

			// Mensaje
			txaMensaje: {
				validators: {
					notEmpty: {
						message: 'El mensaje es requerido'
					},
				}
			},

			// Password
			/*
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
			*/

			// Captcha
			captcha: {
				validators: {
					callback: {
						message: 'Respuesta incorrecta',
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
