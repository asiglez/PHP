<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
    <?php
    echo "<table border='1'>";
    echo "<tr><th>Variable</th><th>Valor</th></tr>";
    foreach ($_SERVER as $clave => $valor) {
        echo "<tr><td>$clave</td><td>$valor</td></tr>";
    }
    echo "</table>";
    ?>
    </body>
    </html>