<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
    <?php
    function desglosarDinero($cantidad) {
        $monedas = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01];
        $resultado = [];
    
        foreach ($monedas as $moneda) {
            if ($cantidad >= $moneda) {
                $resultado[$moneda] = floor($cantidad / $moneda);
                $cantidad = fmod($cantidad, $moneda);
            }
        }
    
        return $resultado;
        }
    
        $cantidad = 3532.87;
        $desglose = desglosarDinero($cantidad);
    
        echo "Desglose de $cantidad euros:<br/>";
        foreach ($desglose as $moneda => $cantidad) {
            if($moneda>=5){
        echo "$cantidad billetes de $moneda euros <br/>";
        }
        if($moneda>=1 && $moneda<5){
            echo "$cantidad monedas de $moneda euros <br/>";
        }
        if($moneda<1){
            echo "$cantidad monedas de $moneda centimos <br/>";
        }
    }
    ?>
    </body>
    </html>