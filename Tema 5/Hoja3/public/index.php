<?php
session_start();
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
if (!isset($_SESSION['autenticado'])) {
    header("Location: registro.php");
    exit;
}

// Gestión de visitas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['limpiar'])) {
    // Limpiar el historial de visitas
    unset($_SESSION['visitas']);
    $mensaje = "Registro limpiado. ¡Bienvenido de nuevo!";
} else {
    $mensaje = '';
}

// Registrar la nueva visita si no se ha limpiado el registro
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = [];
    $mensaje = "¡Bienvenido por primera vez!";
} else {
    $_SESSION['visitas'][] = date("d-m-Y H:i:s");
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
    <h1>Bienvenido</h1>

    <?php if ($mensaje): ?>
        <p><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>

    <?php if (!empty($_SESSION['visitas'])): ?>
        <h2>Historial de Visitas:</h2>
        <ul>
            <?php foreach ($_SESSION['visitas'] as $visita): ?>
                <li><?= htmlspecialchars($visita) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="POST">
        <button type="submit" name="limpiar">Limpiar Registro</button>
    </form>
</body>

</html>