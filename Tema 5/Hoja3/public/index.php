<?php
session_start();
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
if (!isset($_SESSION['autenticado'])) {
    header("Location: registro.php");
    exit;
}

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = [];
    echo "<h1>¡Bienvenido por primera vez!</h1>";
} else {
    echo "<h1>Historial de Visitas:</h1>";
    echo "<ul>";
    foreach ($_SESSION['visitas'] as $visita) {
        echo "<li>$visita</li>";
    }
    echo "</ul>";
}

// Registrar la nueva visita
$_SESSION['visitas'][] = date("Y-m-d H:i:s");

// Botón para borrar el registro
if (isset($_POST['limpiar'])) {
    $_SESSION['visitas'] = [];
    echo "<h1>Registro limpiado. ¡Bienvenido de nuevo!</h1>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>

<body>
    <form method="POST">
        <button type="submit" name="limpiar">Limpiar Registro</button>
    </form>
</body>

</html>