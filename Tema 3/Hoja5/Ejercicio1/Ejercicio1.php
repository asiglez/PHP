<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 5</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    require_once('Empleado.php');
    require_once('Encargado.php');
    $empleado = new Empleado("Juan", 1000);
    $encargado = new Encargado("Ana", 1000);
    echo $empleado->getSueldo();
    echo $encargado->getSueldo();
    ?>
    </body>
    </html>