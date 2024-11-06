<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja 1</title>
</head>

<body>
    <h1>Traspasos de jugadores</h1>

    <form method="POST" action="">
        <label for="equipo">Equipo:</label>
        <select name="equipo" id="equipo">
            <?php
            require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

            use App\Clases\BD\conexionBD;
            use App\Clases\BD\FuncionesBD;

            $connection = ConexionBD::getConnection();
            $funciones = FuncionesBD::getEquipos();
            foreach ($funciones as $equipo) {
                echo "<option value='" . $equipo->getNombre() . "'>" . $equipo->getNombre() . "</option>";
            }
            ?>
        </select>
        <button type="submit" name="ver">Mostrar</button>
        <a href="index.php"><input type="button" name="inicio" value="Inicio"></a>
    </form>
    <?php
    if (isset($_POST['ver'])) {
        $connection = ConexionBD::getConnection();
        $equipo=$_POST["equipo"];
        $funcion = FuncionesBD::getJugadores($equipo);
        echo"<h2>Baja y alta de jugadores:</h2><br>";
        echo '<label for="baja">Baja de jugador: </label>';
        echo '<select name="baja" id="baja">';
            foreach ($funcion as $jugador) {
                echo "<option value='" . $jugador->getNombre() . "'>" . $jugador->getNombre() . "</option>";
            }
        echo '</select>';
        echo '<h3>Datos del nuevo jugador:</h3><br>';
        echo 'Nombre: <input type="text" name="nombre"><br>';
        echo 'Procedencia: <input type="text" name="procedencia"><br>';
        echo 'Altura: <input type="text" name="altura"value="0.00"><br>';
        echo 'Peso: <input type="text" name="peso"value="0.00"><br>';
        echo 'Posicion: <option value="posicion"></option><br>';
    }
    ?>
</body>
</html>