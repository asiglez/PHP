<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
    <?php
    function interesSimple($capital, $interes, $tiempo) {
    return $capital * $interes * $tiempo;
    }

    function interesCompuesto($capital, $interes, $tiempo) {
    return $capital * pow((1 + $interes), $tiempo) - $capital;
    }

    $capital = 1000;
    $interes = 0.05;
    $tiempo = 2;

    $simple = interesSimple($capital, $interes, $tiempo);
    $compuesto = interesCompuesto($capital, $interes, $tiempo);

    echo "Interés simple: " . $simple . "<br/>";
    echo "Interés compuesto: " . $compuesto . "<br/>";

    if ($compuesto > $simple) {
    echo "El interés compuesto es más beneficioso.";
    } else {
    echo "El interés simple es más beneficioso.";
    }
    ?>
    </body>
    </html>