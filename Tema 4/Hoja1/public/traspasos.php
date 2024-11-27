<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hoja 1</title>
</head>

<body>
    <h1>Traspasos de jugadores</h1>

    <form method="POST" action="">
        <label for="equipo">Equipo:</label>
        <select name="equipo" id="equipo" required>
            <option value="">Seleccione un equipo</option>
            <?php
            require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

            use App\Clases\BD\FuncionesBD;

            $funciones = FuncionesBD::getEquipos();
            foreach ($funciones as $equipo) {
                // Añadimos la propiedad `selected` si se envió previamente un equipo seleccionado
                $selected = isset($_POST['equipo']) && $_POST['equipo'] === $equipo->getNombre() ? 'selected' : '';
                echo "<option value='" . $equipo->getNombre() . "' $selected>" . $equipo->getNombre() . "</option>";
            }
            ?>
        </select>
        <button type="submit" name="ver">Mostrar</button>
        <a href="index.php"><input type="button" name="inicio" value="Inicio"></a>
    </form>

    <?php
    if (isset($_POST['ver']) && !empty($_POST['equipo'])) {
        $equipo = $_POST["equipo"];
        echo "<h2>Equipo seleccionado: $equipo</h2>";
        
        $funcion = FuncionesBD::getJugadores($equipo);
        echo '<form method="POST" action="">';
        echo "<h2>Baja y alta de jugadores:</h2><br>";
        echo '<label for="baja">Baja de jugador: </label>';
        echo '<select name="baja" id="baja">';
        foreach ($funcion as $jugador) {
            echo "<option value='" . $jugador->getNombre() . "'>" . $jugador->getNombre() . "</option>";
        }
        echo '</select>';
        echo '<h3>Datos del nuevo jugador:</h3><br>';
        echo 'Nombre: <input type="text" name="nombre" required><br>';
        echo 'Procedencia: <input type="text" name="procedencia" required><br>';
        echo 'Altura: <input type="text" name="altura" value="0.00" required><br>';
        echo 'Peso: <input type="text" name="peso" value="0.00" required><br>';
        echo 'Posicion: <select name="posicion" id="posicion">';
        echo '<option value="g">G</option>';
        echo '<option value="g-f">G-F</option>';
        echo '<option value="f">F</option>';
        echo '<option value="f-c">F-C</option>';
        echo '<option value="c">C</option>';
        echo '</select><br>';
    
        echo '<input type="hidden" name="equipo" value="' . htmlspecialchars($equipo) . '">';
        echo '<button type="submit" name="traspaso">Realizar traspaso</button>';
        echo '</form>';
    }

    if (isset($_POST['traspaso'])) {
        $equipo = $_POST['equipo'];
        $jugadorbaja = $_POST['baja'];
        $nombre = $_POST['nombre'];
        $procedencia = $_POST['procedencia'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $posicion = $_POST['posicion'];

        FuncionesBD::realizarTraspaso($equipo, $jugadorbaja, $nombre, $procedencia, $altura, $peso, $posicion);
        echo "<h2>Traspaso realizado para el equipo: $equipo</h2>";
    }
    ?>
</body>
</html>