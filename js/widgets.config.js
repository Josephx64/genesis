$(document).ready(function(e) {
	
	/********************* #Dialog1 *********************/
	
   //Agregar botones al #Dialog1
	$("#Dialog1").dialog({
		autoOpen:false,
		buttons: [ 
			{ text: "Aceptar",  click: function() { $( this ).dialog( "close" );} }, 
			{ text: "Cancelar", click: function() { $( this ).dialog( "close" );} } 
		]
	});
	
	
	/********************* #Accordion1 *********************/
	//Funcion del dialog #acrdnAreas
	$(function(){
		$('#Accordion1').accordion();	
	});
	
	//Funcion de configuración de #Accordion1
	$('#Accordion1').accordion({
		collapsible:true,
		animate:{duration: 200},
		icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" },
	});
	
	
	/********************* #acrdnAreas *********************/
	//Funcion del acordeon #acrdnAreas
	$(function(){
		$('#acrdnAreas').accordion({
			//Configuraciones de #acrdnAreas
			collapsible:true,
			animate:{duration: 200},
			disabled: false,
			heightStyle: "fill" //fill, auto, content
		});
	});
	
	/** Boton Toggle  **/
	$(function(){
	
		/*$('.btnOcultarBarra').click(function() {
			$('#barConfiguraciones').toggle("slide", {
				direction:"left",
			}, "slow");
		});*/
		
		$('.btnOcultarBarra').click(function() {
			$('#barConfiguraciones').animate({ "left": "+=50px" }, "slow" );
			
		
		/*$('.btnOcultarBarra').click(function() {
			$('#barConfiguraciones').animate({ "left": "-=50px" }, "slow" );*/
			
		//Cambiar clase (que contiene la imagen de flecha)
		$('this').toggleClass("blueColorSchemeClass",1000);
		});
	});
			
	
});