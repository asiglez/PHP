<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>   
    <h1>Ejercicio 4</h1>
    <?php
    for($a=100;$a<999;$a++){
    $d1=$a/100;
    settype($d1,"integer");
    $prueba1=$a%100;
    $prueba2=$prueba1%10;
    $d3=$prueba2/1;
    if($d1==$d3)
    print "$a ";
    }
    ?>
    </body>
    </html>