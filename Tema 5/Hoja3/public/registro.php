<?php
session_start();
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario de inicio de sesión
    $nombre = $_POST['nombre'] ?? '';
    $clave = $_POST['clave'] ?? '';

    try {
        if (FuncionesBD::verificarUsuario($nombre, $clave)) {
            // Autenticación exitosa
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $nombre; // Guardar el nombre del usuario en la sesión
            header("Location: index.php");
            exit;
        } else {
            $mensaje = "Credenciales incorrectas.";
        }
    } catch (Exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="registro.php">
        <label for="nombre">Nombre de Usuario:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required><br><br>
        <button type="submit">Iniciar Sesión</button>
    </form>

    <?php if ($mensaje): ?>
        <p style="color: red;"><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>
</body>

</html>