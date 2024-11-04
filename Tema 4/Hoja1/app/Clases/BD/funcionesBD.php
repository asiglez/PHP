<?php

namespace App\Clases\BD;

use PDO;
use PDOException;
use App\Clases\BD\conexionBD;
use App\Clases\Clases\Equipo;

class FuncionesBD
{
    public static function getEquipos()
    {
        $conexion = conexionBD::getConnection();
        $equipos = array();
        if ($conexion instanceof PDO) {
            $resultado = $conexion->query('SELECT nombre,ciudad,conferencia,division FROM equipos');
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $equipo = new Equipo($registro['nombre'], $registro['ciudad'], $registro['conferencia'], $registro['division']);
                array_push($equipos, $equipo);
            }
        }
        return $equipos;
    }
}
