<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$medicos=[];
if (isset($_GET['pacientes'])) {
    $npacientes = $_GET['pacientes'];
    $medicos = FuncionesBD::getMedicosPorNPacientes($npacientes);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Hospital</title>
</head>
<body>
    <h1>Medicos de Familia</h1>
    <form method="get" action="medicosFamilia.php">
        Numero de Pacientes <input type="number" name="pacientes" required>
        <button type="submit">Ver Medicos</button>
    </form>
    <div>
        <?php foreach ($medicos as $medico){ ?>
            <div>
                <p><strong>Nombre:</strong> <?php echo $medico->getNombre(); ?></p>
                <p><strong>Código:</strong> <?php echo $medico->getCodigo(); ?></p>
                <p><strong>Edad:</strong> <?php echo $medico->getEdad(); ?></p>
                <p><strong>Turno:</strong> <?php echo $medico->getTurno(); ?></p>
                <p><strong>Numero de Pacientes:</strong> <?php echo $medico->getNumPacientes(); ?></p>
                <?php } ?>
                <hr>
            </div>
    </div>
    <div class="links">
        <a href="principal.php">Inicio</a>
        <a href="turnos.php">Ver Turnos</a>
    </div>
</body>
</html>