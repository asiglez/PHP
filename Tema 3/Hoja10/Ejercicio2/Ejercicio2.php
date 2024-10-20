<?php
$equipos = [
    "Real Madrid" => [
        "entrenador" => ["nombre" => "Zidane", "imagen" => "zidane.jpg"],
        "jugadores" => [
            ["nombre" => "Courtois", "imagen" => "courtois.jpg"],
            ["nombre" => "Ramos", "imagen" => "ramos.jpg"],
            ["nombre" => "Hazard", "imagen" => "hazard.jpg"]
        ]
    ],
    "Barcelona" => [
        "entrenador" => ["nombre" => "Koeman", "imagen" => "koeman.jpg"],
        "jugadores" => [
            ["nombre" => "Ter Stegen", "imagen" => "terstegen.jpg"],
            ["nombre" => "Piqué", "imagen" => "pique.jpg"],
            ["nombre" => "Griezmann", "imagen" => "griezmann.jpg"]
        ]
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $equipoSeleccionado = $_POST['equipo'];
    $tipo = $_POST['tipo'];
}
?>

<form method="POST">
    <label for="equipo">Elige un equipo:</label>
    <select name="equipo">
        <option value="todos">Todos</option>
        <option value="Real Madrid">Real Madrid</option>
        <option value="Barcelona">Barcelona</option>
    </select>

    <label for="tipo">Elige el tipo de componente:</label>
    <input type="radio" name="tipo" value="entrenador" required> Entrenador
    <input type="radio" name="tipo" value="jugadores"> Jugadores
    <button type="submit">Mostrar</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <table border="1">
        <?php
        if ($equipoSeleccionado == "todos") {
            foreach ($equipos as $equipo => $componentes) {
                echo "<tr><th colspan='2'>$equipo</th></tr>";
                mostrarComponentes($componentes, $tipo);
            }
        } else {
            mostrarComponentes($equipos[$equipoSeleccionado], $tipo);
        }

        function mostrarComponentes($componentes, $tipo) {
            if ($tipo == "entrenador") {
                echo "<tr><td>{$componentes['entrenador']['nombre']}</td><td><img src='{$componentes['entrenador']['imagen']}' alt='imagen' style='width:100px;'></td></tr>";
            } else {
                foreach ($componentes['jugadores'] as $jugador) {
                    echo "<tr><td>{$jugador['nombre']}</td><td><img src='{$jugador['imagen']}' alt='imagen' style='width:100px;'></td></tr>";
                }
            }
        }
        ?>
    </table>
<?php endif; ?>