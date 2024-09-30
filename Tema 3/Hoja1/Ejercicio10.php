<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
    <h1>Ejercicio 10</h1>
    <?php
    function esPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        for ($i = 2; $i <$numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
    
        return true;
    }
    $numero = 15;
    if (esPrimo($numero)) {
        print "$numero es un número primo";
    } else {
        print "$numero no es un número primo";
    }
    ?>
    </body>
    </html>