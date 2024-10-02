<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $format="D-M-Y";
    echo date($format);
    ?>    
    <h1>Ejercicio 2</h1>
    <?php
    $fechaActual = date("Y-m-d");
    $dias_restar = 5;
    $nueva_fecha = date("Y-m-d", strtotime($fecha_actual . " - $dias_restar days"));

    echo "Fecha actual: " . $fecha_actual . "<br>";
    echo "Nueva fecha: " . $nueva_fecha;
    ?>
    <h1>Ejercicio 3</h1>
    <?php
    $dia = 29;
    $mes = 2;
    $anio = 2023;

    if (checkdate($mes, $dia, $anio)) {
    echo "La fecha $dia/$mes/$anio es válida.";
    } else {
    echo "La fecha $dia/$mes/$anio no es válida.";
    }
    ?>
    <h1>Ejercicio 4</h1>  
    <?php
    $fecha1 = "2023-10-01";
    $fecha2 = "2024-01-01";

    $inicio = strtotime($fecha1);
    $fin = strtotime($fecha2);

    $dias = ($fin - $inicio) / (60 * 60 * 24);
    echo "Han transcurrido $dias días entre $fecha1 y $fecha2.";
    ?>
    <h1>Ejercicio 5</h1>
    <?php
    $fecha_actual = "2023-10-01 12:00:00";
    $horas_sumar = 5;

    $nueva_fecha = date("Y-m-d H:i:s", strtotime($fecha_actual . " + $horas_sumar hours"));

    echo "Fecha actual: $fecha_actual <br>";
    echo "Nueva fecha tras sumar $horas_sumar horas: $nueva_fecha";
    ?>  
    <h1>Ejercicio 6</h1>
    <?php
    $a = 8;
    $b = 3;
    $c = 5;

    echo ($a == $b) ? '$a es igual a $b<br>' : '$a no es igual a $b<br>';
    echo ($a != $b) ? '$a es diferente de $b<br>' : '$a es igual a $b<br>';
    echo ($a < $b) ? '$a es menor que $b<br>' : '$a no es menor que $b<br>';
    echo ($a > $b) ? '$a es mayor que $b<br>' : '$a no es mayor que $b<br>';
    echo ($a >= $c) ? '$a es mayor o igual que $c<br>' : '$a no es mayor o igual que $c<br>';
    echo ($a <= $c) ? '$a es menor o igual que $c<br>' : '$a no es menor o igual que $c<br>';
    ?>
    <h1>Ejercicio 7</h1>
    <?php
    $a = 8;
    $b = 3;
    $c = 5;

    echo (($a == $b) && ($c > $b)) ? 'La condición es verdadera<br>' : 'La condición es falsa<br>';
    echo (($a == $b) || ($b == $c)) ? 'La condición es verdadera<br>' : 'La condición es falsa<br>';
    echo ($b <= $c) ? 'La condición es verdadera<br>' : 'La condición es falsa<br>';
    ?>
</body>
</html>