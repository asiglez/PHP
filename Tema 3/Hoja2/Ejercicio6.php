<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 6</h1>
    <?php
    function validarFecha($fecha) {
    $partes = explode("-", $fecha);
    if (count($partes) == 3) {
        return checkdate($partes[1], $partes[2], $partes[0]);
    }
    return false;
    }

    $fecha = "2023-12-31";
    echo validarFecha($fecha) ? "Fecha válida" : "Fecha no válida";
    ?>
    </body>
    </html>