<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejemplo de clase</title>
    </head>
    <body>

        <?php

        // Incluir la clase 'persona'
        include("inc/class_lib.php");

        // Instanciar los objetos de la clase 'persona'
        $p1 = new persona();
        $p2 = new persona();

        // Establecer la propiedad 'name' a los objetos
        $p1->setName("Jose Resendiz");
        $p2->setName("Luis Zedillo");

        // Recuperar la propiedad 'name' de los objetos
        echo "La persona 1 es: " . $p1->getName() . "<br>";
        echo "La persona 2 es: " . $p2->getName();

        ?>




        <?php
/*
        // Incluir la clase 'persona'
        include("inc/class_lib.php");

        // Instanciar objetos de a clase 'persona'
        $persona1 = new persona();
        $persona2 = new persona();

        // Establecer propiedad 'name' a los objetos
        $persona1->setName("José Resendiz");
        $persona2->setName("Luis Resendiz");

        // Recuperar la propiedad 'name' de los objetos
        echo "La persona 1 es: " . $persona1->getName() . "<br>";
        echo "La persona 2 es: " . $persona2->getName();



*/
        ?>

  </body>
</html>
