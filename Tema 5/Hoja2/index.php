<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja 2</title>
</head>
<body>
<?php
    if (isset($_COOKIE['ultimaVisita'])) {
        echo "<p>Tu última visita fue el: " . $_COOKIE['ultimaVisita'] . "</p>";
    } else {
        echo "<p>¡Bienvenido! Esta es tu primera visita a esta página.</p>";
    }
    $fechaHoraActual = date('Y-m-d H:i:s');
    setcookie('ultimaVisita', $fechaHoraActual, time() + 3600 * 24 * 365);

    ?>
</body>
</html>