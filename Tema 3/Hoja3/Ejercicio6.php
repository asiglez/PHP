<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 6</h1>
    <?php
    $verbos = ["hablar", "comer", "vivir"];
    $verbo = $verbos[array_rand($verbos)];
    function conjugarVerbo($verbo) {
    $raiz = substr($verbo, 0, -2);
    $terminacion = substr($verbo, -2);
    switch ($terminacion) {
        case "ar":
            $conjugacion = ["o", "as", "a", "amos", "áis", "an"];
            break;
        case "er":
            $conjugacion = ["o", "es", "e", "emos", "éis", "en"];
            break;
        case "ir":
            $conjugacion = ["o", "es", "e", "imos", "ís", "en"];
            break;
    }
    echo "Conjugación del verbo '$verbo' en presente de indicativo:<br>";
    $personas = ["yo", "tú", "él/ella", "nosotros", "vosotros", "ellos/ellas"];
    foreach ($conjugacion as $index => $termino) {
        echo "{$personas[$index]} {$raiz}{$termino}<br>";
    }
    }
    conjugarVerbo($verbo);
    ?>
    </body>
    </html>