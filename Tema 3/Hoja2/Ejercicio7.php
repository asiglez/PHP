<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 7</h1>
    <?php
    function mostrarDatosCuenta($cc) {
    $partes = explode("-", $cc);

    if (count($partes) == 4) {
        echo "Código de la entidad: " . $partes[0] . "<br/>";
        echo "Código de la oficina: " . $partes[1] . "<br/>";
        echo "Dígitos de control: " . $partes[2] . "<br/>";
        echo "Número de cuenta: " . $partes[3] . "<br/>";
    } else {
        echo "Formato de cuenta incorrecto.";
    }
    }

    $cuenta = "1234-5678-90-1234567890";
    mostrarDatosCuenta($cuenta);
    ?>
    </body>
    </html>