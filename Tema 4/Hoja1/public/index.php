<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja 1</title>
</head>

<body>
    <?php
    require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

    use App\Clases\BD\conexionBD;
    use App\Clases\BD\FuncionesBD;

    $connection = ConexionBD::getConnection();
    if ($connection instanceof PDO) {
        echo 'Conexión establecida correctamente<br>';
    }
    $funciones = FuncionesBD::getEquipos();
    foreach($funciones as $equipo){
        echo $equipo->getNombre().'<br>';
    }
    ?>
</body>

</html>