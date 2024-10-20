<?php
$conversiones = [
    'USD_EUR' => 0.85,
    'USD_GBP' => 0.75,
    'EUR_USD' => 1.18,
    'EUR_GBP' => 0.88,
    'GBP_USD' => 1.33,
    'GBP_EUR' => 1.14,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monedaOrigen = $_POST['origen'];
    $monedaDestino = $_POST['destino'];
    $cantidad = $_POST['cantidad'];
    $conversion = $monedaOrigen . '_' . $monedaDestino;
    
    if (isset($conversiones[$conversion])) {
        $resultado = $cantidad * $conversiones[$conversion];
        echo "Resultado: $cantidad $monedaOrigen = $resultado $monedaDestino";
    } else {
        echo "Conversión no disponible";
    }
}
?>