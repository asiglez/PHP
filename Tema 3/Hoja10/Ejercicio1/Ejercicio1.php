<?php
$coches = [
    "Ford" => ["Focus", "Mustang", "Fiesta"],
    "Toyota" => ["Corolla", "Camry", "Yaris"],
    "BMW" => ["X5", "M3", "i8"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marcaSeleccionada = $_POST['marca'];
    $modelosModificados = [];

    if (isset($_POST['modelos'])) {
        foreach ($_POST['modelos'] as $indice => $modelo) {
            if ($coches[$marcaSeleccionada][$indice] != $modelo) {
                $modelosModificados[] = $modelo;
            }
            $coches[$marcaSeleccionada][$indice] = $modelo;
        }
    }

    if (!empty($modelosModificados)) {
        echo "Modelos modificados: " . implode(", ", $modelosModificados) . "<br>";
    }
}
?>

<form method="POST">
    <label for="marca">Elige una marca:</label>
    <select name="marca">
        <?php foreach ($coches as $marca => $modelos): ?>
            <option value="<?= $marca ?>"><?= $marca ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" name="mostrar">Mostrar</button>
</form>

<?php if (isset($_POST['marca'])): ?>
    <form method="POST">
        <input type="hidden" name="marca" value="<?= $marcaSeleccionada ?>">
        <table border="1">
            <?php foreach ($coches[$marcaSeleccionada] as $indice => $modelo): ?>
                <tr>
                    <td><input type="text" name="modelos[]" value="<?= $modelo ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <button type="submit" name="actualizar">Actualizar</button>
    </form>
<?php endif; ?>