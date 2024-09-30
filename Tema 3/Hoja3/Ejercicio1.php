<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $array1=array();
    $array2=array();
    function cargar($array) {
        $array = [];
        for ($i = 0; $i < 20; $i++) {
            $array[] = rand(0, 100);
        }
        return $array;
    }
    function ordenar($array) {
        sort($array);
        return $array;
    }
function mezclar($array1, $array2) {
    $i = 0; $j = 0;
    $mergedArray = [];
    while ($i < count($array1) && $j < count($array2)) {
        if ($array1[$i] <= $array2[$j]) {
            $mergedArray[] = $array1[$i];
            $i++;
        } else {
            $mergedArray[] = $array2[$j];
            $j++;
        }
    }
}
    ?>
    </body>
    </html>