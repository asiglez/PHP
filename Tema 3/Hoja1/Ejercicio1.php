<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $dia_semana = $dias_semana[date("w")-1];
    $dia = date("d");
    $mes = $meses[date("n")-1];
    $año = date("Y");
    echo "$dia_semana, $dia de $mes de $año";
    ?>
    </body>
    </html>