<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$plazas=funcionesBD::getPlazas();

?>
</select>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Hoja 1</title>
</head>

<body>
    <h1>Reserva de asiento</h1>
        <form method="POST" action="reserva.php">
        <h3>Datos del nuevo jugador:</h3><br>
        Nombre: <input type="text" name="nombre" value="Su nombre"required><br>
        DNI: <input type="text" name="dni" value="Su DNI" required>El formato deberá ser 01234567A<br>
        Asiento: <input type="text" name="asiento" value="0.00" required><br>
        <button type="submit" name="reserva">Reservar</button>
    </form>
    <?php
    if (isset($_POST['traspaso'])) {
        $equipo = $_POST['equipo'];
        $jugadorbaja = $_POST['baja'];
        $nombre = $_POST['nombre'];
        $procedencia = $_POST['procedencia'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $posicion = $_POST['posicion'];

        FuncionesBD::reservarAsiento($equipo, $jugadorbaja, $nombre, $procedencia, $altura, $peso, $posicion);
        echo "<h2>Traspaso realizado para el equipo: $equipo</h2>";
    }
    ?>
</body>

</html>