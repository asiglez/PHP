<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 8</h1>
    <?php
    $cadena = "Comer algas es realmente sano";

    echo "Posición de 'algas': " . strpos($cadena, "algas") . "<br/>";

    $cadenaModificada = str_replace("realmente", "muy", $cadena);
    echo "Cadena modificada: " . $cadenaModificada . "<br/>";

    echo (strpos($cadena, "anacardo") !== false) ? "Contiene 'anacardo'" : "No contiene 'anacardo'" . "<br/>";

    echo "Texto invertido: " . strrev($cadena) . "<br/>";

    echo "Cantidad de vocales 'e': " . substr_count($cadena, 'e') . "<br/>";
    ?>
    </body>
    </html>