<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hoja 1</title>
</head>

<body>
    <h1>Lista de Jugadores</h1>

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
        <a href="traspasos.php"><input type="button" name="traspasos" value="Traspasos"></a>
    </form>
    <?php
    if (isset($_POST['ver'])) {
        $connection = ConexionBD::getConnection();
        $equipo_id = $_POST['equipo'];
        $funcion = FuncionesBD::getJugadores($equipo_id);
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Peso</th></tr>";
        foreach ($funcion as $jugador) {
            echo "<tr>";
            echo"<td>" . $jugador->getNombre() . "</td>";
            echo'<td><input type="text" name="peso" value="' . $jugador->getPeso() . '">kg</td>';
            echo"</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>