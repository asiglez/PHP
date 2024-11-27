<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$plazas = funcionesBD::getPlazas();

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
    <h1>Registro de usuarios</h1>
    <form method="POST" action="registro.php">
        Nombre: <input type="text" name="nombre" value="Su nombre" required><br>
        Contraseña: <input type="password" name="clave" value="Su clave" required><br>
        Repetir : <input type="password" name="clave2" value="Su clave" required><br>
        <button type="submit" name="registrar">Registrar</button>
    </form>
    <?php
    if (isset($_POST['registrar'])) {
        if ($_POST['clave'] === $_POST['clave2']) {
            funcionesBD::crearUsuario($_POST['nombre'], $_POST['clave']);
        } else {
            echo '<div>claves incorrectas</div>';
        }
    }
    ?>
</body>

</html>