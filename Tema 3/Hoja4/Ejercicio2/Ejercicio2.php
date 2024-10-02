<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
    <?php
    require_once('Coche.php');
    $coche=new Coche("7039GCZ",55);
    echo $coche->mostrar()."<br/>";
    $coche->acelera(20);
    echo $coche->mostrar(). "<br/>";
    $coche->frena(80);
    $coche->frena(75);
    echo $coche->mostrar();
    ?>
    </body>
    </html>