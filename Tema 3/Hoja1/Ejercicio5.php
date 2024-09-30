<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
    <h1>Ejercicio 5</h1>
    <?php
    for($a=100;$a<999;$a++){
    $d1=$a/100;
    settype($d1,"integer");
    $d2=($a%100)/10;
    settype($d2,"integer");
    $d3=($a%100)%10;
    $suma=$d1+$d2+$d3;
    $multiplicacion=$d1*$d2*$d3;
    if($suma==$multiplicacion)
    print "$a ";
    }
    ?>
    </body>
    </html>