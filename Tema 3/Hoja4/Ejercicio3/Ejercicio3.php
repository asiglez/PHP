<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
    <?php
    require_once('Monedero.php');
    $monedero1= new Monedero(3500.65);
    $monedero2= new Monedero(1000);
    echo "Hay ".$monedero1->consulta()."<br/>";
    echo "Hay ".$monedero2->consulta()."<br/>";
    $monedero2->__destruct();
    echo "Hay ".$monedero2->consulta()."<br/>";
    echo "Hay ".$monedero1->consulta()."<br/>";
    $monedero1->meter(1000);
    echo "Hay ".$monedero1->consulta()."<br/>";
    $monedero1->sacar(7000);
    $monedero1->sacar(2000.65);
    echo "Hay ".$monedero1->consulta()."<br/>";
    ?>
    </body>
    </html>