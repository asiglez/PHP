<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $cuentaCorriente = new CuentaCorriente(12345, "Pedro", 1000, 10);
    $cuentaAhorro = new CuentaAhorro(67890, "Lucía", 2000, 50, 2);
    $cuentaCorriente->mostrar();
    $cuentaAhorro->mostrar();
    ?>
    </body>
    </html>