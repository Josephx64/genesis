//fancyBox_config_Foto.js
/*Script de configuracion del FancyBox de llas fotos
*/
$(document).ready(function() {
	//Funcion para activar el FancyBox Foto
	$(".fancyboxFoto").fancybox({
		openEffect	: 'elastic',
	   closeEffect	: 'elastic',
	   helpers  	: {
	   	title: {
	    		type : 'over' //*Efectos: 'float', 'inside', 'outside' or 'over'*/
	    	}
	   }
	});
});
