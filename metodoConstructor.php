<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Constructor</title>
    </head>
    <body>

        <?php

            // Incluir la clase 'persona2'
            include("inc/class_lib2.php");

            // Instanciar Ojetos de la clase 'persona2'
            $p1 = new persona2("José Resendiz");
            $p2 = new persona2("Luis Zedillo");

            // Recuperar propiedad 'name' de los objetos
            echo "La persona 1 es: " . $p1->name . "<br>";
            echo "La persona 2 es: " . $p2->name;

         ?>

    </body>
</html>
