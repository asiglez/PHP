<?php
$peliculas = [
    "Titanic" => "titanic.jpg",
    "Avatar" => "avatar.jpg",
    "Inception" => "inception.jpg",
    "Gladiator" => "gladiator.jpg",
    "Matrix" => "matrix.jpg"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = strtolower($_POST['busqueda']);
    $resultados = array_filter(array_keys($peliculas), function($pelicula) use ($busqueda) {
        return stripos($pelicula, $busqueda) !== false;
    });
    
    echo "Películas encontradas: " . count($resultados) . "<br>";
    
    foreach ($resultados as $pelicula) {
        echo $pelicula . "<br><img src='" . $peliculas[$pelicula] . "' alt='$pelicula' style='width:100px;'><br>";
    }
}
?>