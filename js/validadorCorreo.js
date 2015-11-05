$(document).ready(function(){

      var consulta;

      //hacemos focus
      //$("#txtMail").focus();

      //comprobamos si se pulsa una tecla
      //$("#txtMail").keyup(function(e){
      $("#txtMail").on("change", function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#txtMail").val();

             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {

                  $("#resultado").html('<img src="img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "inc/validadorCorreo.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultado").html(data);
                                    n();
                              }
                  });

             });

      });

});
