<?php

namespace Src\BD;

use PDO;
use Src\Clases\Pasajero;
use Src\Clases\Plaza;

class FuncionesBD
{
    public static function getPlazas()
    {
        $conexion = conexionBD::getConnection();
        $plazas = array();
        if ($conexion instanceof PDO) {
            $resultado = $conexion->query('SELECT numero,reservada,precio FROM plazas');
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $plaza = new Plaza($registro['numero'], $registro['reservada'] === 0 ? false : true, $registro['precio']);
                array_push($plazas, $plaza);
            }
        }
        return $plazas;
    }
    public static function reservarAsiento(string $dni, string $nombre, string $sexo, Plaza $plaza)
    {
        $ok = true;
        $conexion = conexionBD::getConnection();
        $conexion->beginTransaction();
        $pasajero = new Pasajero($dni, $nombre, $sexo, $plaza);
        if ($conexion instanceof PDO) {
            $stmt2 = $conexion->prepare('INSERT INTO pasajeros (nombre, dni, sexo, numero_plaza) VALUES (:dni,:nombre,:sexo,:numero_plaza)');
            $stmt2->execute([
                ":dni" => $pasajero->getDni(),
                ":nombre" => $pasajero->getNombre(),
                ":sexo" => $pasajero->getSexo(),
                ":numero_plaza" => $pasajero->getPlaza()->getNumero(),
            ]);
            if ($stmt2->rowCount() == 0) {
                $ok = false;
            }
            if ($ok) {
                $conexion->commit();
            } else $conexion->rollback();
        }
    }
    public static function llegadaDestino()
    {
        $ok = true;
        $conexion = conexionBD::getConnection();
        $conexion->beginTransaction();
        if ($conexion instanceof PDO) {
            $stmt1 = $conexion->prepare('DELETE FROM pasajeros ');
            $stmt1->execute();
            $stmt2 = $conexion->prepare('UPDATE plazas SET reservada=0');
            $stmt2->execute();
            if ($stmt2->rowCount() == 0) {
                $ok = false;
            }
            if ($ok) {
                $conexion->commit();
            } else {
                $conexion->rollback();
                echo "<div>No se han podido realizar los cambios</div>";
            }
        }
    }
    public static function gestionPlazas($numero, $precio)
    {
        $ok = true;
        $conexion = conexionBD::getConnection();
        $conexion->beginTransaction();
        if ($conexion instanceof PDO) {
            $stmt1 = $conexion->prepare('UPDATE plazas SET precio=:precio WHERE numero=:numero');
            $stmt1->execute([
                ":precio" => $precio,
                ":numero" => $numero
            ]);
            if ($stmt1->rowCount() == 0) {
                $ok = false;
            }
            if ($ok) {
                $conexion->commit();
            } else $conexion->rollback();
        }
    }
}
