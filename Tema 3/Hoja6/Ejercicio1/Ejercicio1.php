<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $aeropuerto = new Aeropuerto();

    // Creación de aviones y helicópteros
    $avion1 = new Avion("Avión1", 2, 2, "Iberia", "2020-01-01", 12000);
    $avion2 = new Avion("Avión2", 2, 4, "Vueling", "2021-01-01", 10000);
    $avion3 = new Avion("Avión3", 2, 4, "Iberia", "2022-01-01", 11000);
    
    $helicoptero1 = new Helicoptero("Helicóptero1", 0, 1, "Juan", 2);
    $helicoptero2 = new Helicoptero("Helicóptero2", 0, 1, "Pedro", 3);
    $helicoptero3 = new Helicoptero("Helicóptero3", 0, 1, "María", 2);
    
    // Insertar en el aeropuerto
    $aeropuerto->insertar($avion1);
    $aeropuerto->insertar($avion2);
    $aeropuerto->insertar($avion3);
    $aeropuerto->insertar($helicoptero1);
    $aeropuerto->insertar($helicoptero2);
    $aeropuerto->insertar($helicoptero3);
    
    // Pruebas
    $aeropuerto->buscar("Avión1");
    $aeropuerto->buscar("Avión4");
    
    $aeropuerto->listarCompania("Iberia");
    $aeropuerto->listarCompania("Air Europa");
    
    $aeropuerto->rotores(2);
    $aeropuerto->rotores(4);
    
    $aeropuerto->despegar("Avión1", 12000, 200);
    $aeropuerto->despegar("Helicóptero1", 150, 100);
    ?>
    </body>
    </html>