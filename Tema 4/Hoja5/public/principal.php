<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$medicos = FuncionesBD::getMedicos(); 
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
    <h1>Todos los Medicos</h1>

    <div>
        <?php foreach ($medicos as $medico){ ?>
            <div>
                <p><strong>Nombre:</strong> <?php echo $medico->getNombre(); ?></p>
                <p><strong>Código:</strong> <?php echo $medico->getCodigo(); ?></p>
                <p><strong>Edad:</strong> <?php echo $medico->getEdad(); ?></p>
                <p><strong>Turno:</strong> <?php echo $medico->getTurno(); ?></p>
                <?php if ($medico instanceof \Src\Clases\Familia){ ?>
                    <p><strong>Numero de Pacientes:</strong> <?php echo $medico->getNumPacientes(); ?></p>
                <?php }elseif ($medico instanceof \Src\Clases\Urgencia){ ?>
                    <p><strong>Unidad:</strong> <?php echo $medico->getUnidad(); ?></p>
                <?php }
                } ?>
                <hr>
            </div>
    </div>
    <div class="links">
        <a href="turnos.php">Ver Turnos</a>
        <a href="medicosFamilia.php">Ver Médicos de Familia</a>
    </div>
</body>
</html>