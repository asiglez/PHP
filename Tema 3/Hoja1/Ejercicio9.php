<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
    <h1>Ejercicio 9</h1>
    <?php
    $distancia=1000;
    $dias=7;
    $precio=$distancia*2.5;
    if($distancia>=800 && $dias>=7){
    $precio*=0.7;
    }
    print $precio;
    ?>
    </body>
    </html>