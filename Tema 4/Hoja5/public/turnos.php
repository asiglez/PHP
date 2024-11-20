<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$turnos = FuncionesBD::getTurnos();
$medicos = [];
if (isset($_GET['turno_id'])) {
    $turnoId = $_GET['turno_id'];
    $medicos = FuncionesBD::getMedicosPorTurnos($turnoId);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Turnos</title>
</head>
<body>
    <h1>Selecciona el turno</h1>

    <form method="get" action="turnos.php">
        <select name="turno_id">
            <?php foreach ($turnos as $turno){ ?>
                <option value="<?php echo $turno->getId()?>">
                    <?php echo $turno->getTipo(); ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit">Ver Medicos</button>
    </form>
    <div>
        <?php foreach ($medicos as $medico){ ?>
            <div>
                <p><strong>Nombre:</strong> <?php echo $medico->getNombre(); ?></p>
                <p><strong>Código:</strong> <?php echo $medico->getCodigo(); ?></p>
                <p><strong>Edad:</strong> <?php echo $medico->getEdad(); ?></p>
                <?php if($medico->getTurno()==1) { ?>
                <p><strong>Turno:</strong> Mañana</p>
                <?php } if($medico->getTurno()==2) { ?>
                <p><strong>Turno:</strong> Tarde</p>
                <?php } if($medico->getTurno()==3) { ?>
                <p><strong>Turno:</strong> Noche</p>
                <?php } if($medico->getTurno()==4) { ?>
                <p><strong>Turno:</strong> 24H</p>
                <?php }?>
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
        <a href="principal.php">Inicio</a>
        <a href="medicosFamilia.php">Ver Médicos de Familia</a>
    </div>
</body>
</html>