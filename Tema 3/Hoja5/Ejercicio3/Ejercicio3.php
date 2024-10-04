<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 5</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
    <?php
    require_once('Familia.php');
    require_once('Medico.php');
    require_once('Urgencia.php');
    $arrayMedicos = [
        new Familia("Dr. García", 55, "mañana", 120),
        new Urgencia("Dr. López", 63, "tarde", "Cardiología"),
        new Urgencia("Dr. Pérez", 45, "mañana", "Traumatología")
    ];
    
    foreach ($arrayMedicos as $medico) {
        $medico->mostrar();
    }
    ?>
    </body>
    </html>