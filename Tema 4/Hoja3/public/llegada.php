<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Hoja 3</title>
</head>
<body>
    <h1>Llegada</h1>
    <form method="get" action="llegada.php">
        <button type="submit" name="llegada">Llegada</button>
        <?php
        if (isset($_GET['llegada'])) {
        FuncionesBD::llegadaDestino();
        }
        ?>
    </form>
    <div class="link">
        <a href="index.php">Pagina de inicio</a>
    </div>
</body>
</html>