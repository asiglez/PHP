<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    require_once('Circulo.php');
     $circulo = new Circulo(5);
     echo $circulo->getRadio(). "<br/>";
     $circulo->setRadio(3);
     echo $circulo->getRadio();
    ?>
    </body>
    </html>