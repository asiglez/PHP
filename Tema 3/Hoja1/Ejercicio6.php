<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>     
    <h1>Ejercicio 6</h1>
    <?php
    $d1=0;
    $d2=1;
    print "$d1,$d2";
    for($a=0;$a<10;$a++){
    $d1+=$d2;
    $d2+=$d1;
    print ",$d1,$d2";
    }
    ?>
    </body>
    </html>