<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
    <h1>Ejercicio 2</h1>
    <?php
    $suma=0;
    for($a=10;$a<100;$a++){
        if($a%2==0)
            $suma+=$a; 
    }
    echo "La suma de los números pares es: ";echo$suma;
    ?>
    </body>
    </html>