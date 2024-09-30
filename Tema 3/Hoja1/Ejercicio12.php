<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
    <h1>Ejercicio 12</h1>
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
    for($a=3;$a<999;$a++){
        if(esPrimo($a)==true){
            print "$a, ";
        }
    }
    ?>
    </body>
    </html>