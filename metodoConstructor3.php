<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Constructor 3</title>
    </head>
    <body>

        <?php

            // Incluir la clase 'Usuario'
            include("inc/class_lib3.php");
            
            // Instanciar objetos
            $uNombre1 = new Usuario("Jose");
            $uApellidos1 = new Usuario("Resendiz");
            $uEdad1 = new Usuario(27);


            // Recuperar propiedades de los objetos
            echo "El usuario 1 es: " . $uNombre1->nombre . "<br>";

        ?>

    </body>
</html>
