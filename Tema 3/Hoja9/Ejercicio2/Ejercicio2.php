<?php
$peliculas = ["Titanic", "Avatar", "Inception", "Gladiator", "Matrix", "Star Wars", "Avengers", "Iron Man", "Batman", "Superman"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = strtolower($_POST['busqueda']);
    $resultados = array_filter($peliculas, function($pelicula) use ($busqueda) {
        return stripos($pelicula, $busqueda) !== false;
    });
    echo "Películas encontradas: " . implode(", ", $resultados);
}
?>