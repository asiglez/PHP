<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
    <?php
    function esCapicua($numero) {
    return strval($numero) == strrev($numero);
    }

    function redondear($numero) {
    return round($numero);
    }

    function contarDigitos($numero) {
    return strlen(strval(abs($numero)));
    }

    $numero = 12321;

    echo "El número $numero " . (esCapicua($numero) ? "es capicúa" : "no es capicúa") . ".<br/>";
    echo "Número redondeado: " . redondear($numero) . ".<br/>";
    echo "El número tiene " . contarDigitos($numero) . " dígitos.<br/>";
    ?>
    </body>
    </html>