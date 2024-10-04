<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
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