(function ( $ ) {

	$('.options').combobox();

	$('#destroy').on('click', function() {
		$('#options').combobox('destroy');
	});

	$('#val-text').on('click', function() {
		console.log($('#options').combobox('val'), $('#options').combobox('text'));
	});
})( jQuery );


//Desabilita el textbox al terminar de cargar la pagina
$( document ).ready(function() {
	//Combobox Ciudades
	$comboBoxCiudades = $('#sltCiudades').next();
	
	//Textbox Ciudades
	tbxCiudades = $comboBoxCiudades.children('.txtbox');

	//Desabilitar el texbox de ciudades
	tbxCiudades.prop( "disabled", false );

	//Desabilitar el boton .txtbox-btn que despliega la lista de ciudades
	//botonCiudades = $('.txtbox-btn')[1];
	//botonCiudades.prop("disabled", true);

});
