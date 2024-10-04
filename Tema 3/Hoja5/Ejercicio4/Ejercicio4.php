<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $productos = [
        new Alimentacion("001", "Manzana", 1.50, 10, 2024),
        new Alimentacion("002", "Pan", 0.80, 11, 2023),
        new Electronica("003", "Teléfono", 300, 24),
        new Electronica("004", "TV", 500, 36)
    ];
    
    $total = 0;
    $gastoAlimentacion = 0;
    $gastoElectronica = 0;
    
    foreach ($productos as $producto) {
        $producto->mostrar();
        $total += $producto->getPrecio();
        if ($producto instanceof Alimentacion) {
            $gastoAlimentacion += $producto->getPrecio();
        } else {
            $gastoElectronica += $producto->getPrecio();
        }
    }
    
    echo "Total gastado: {$total}€<br>";
    if ($gastoAlimentacion > $gastoElectronica) {
        echo "Has gastado más en Alimentación.<br>";
    } else {
        echo "Has gastado más en Electrónica.<br>";
    }
    ?>
    </body>
    </html>