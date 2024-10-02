<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
    <?php
    $articulos = [
    ['codigo' => 'A001', 'descripcion' => 'Artículo 1', 'existencias' => 10],
    ['codigo' => 'A002', 'descripcion' => 'Artículo 2', 'existencias' => 25],
    ['codigo' => 'A003', 'descripcion' => 'Artículo 3', 'existencias' => 5]
    ];
    function mayor($articulos) {
    $maxArticulo = null;
    foreach ($articulos as $articulo) {
        if ($maxArticulo == null || $articulo['existencias'] > $maxArticulo['existencias']) {
            $maxArticulo = $articulo;
        }
    }
    return $maxArticulo['descripcion'];
    }
    function sumar($articulos) {
    $total = 0;
    foreach ($articulos as $articulo) {
        $total += $articulo['existencias'];
    }
    return $total;
    }
    function mostrar($articulos) {
    foreach ($articulos as $articulo) {
        echo "Código: {$articulo['codigo']}, Descripción: {$articulo['descripcion']}, Existencias: {$articulo['existencias']}<br>";
    }
    }
    echo "Artículo con mayor existencias: " . mayor($articulos) . "<br>";
    echo "Total de existencias: " . sumar($articulos) . "<br>";
    mostrar($articulos);
    ?>
    </body>
    </html>