<?php

namespace Src\BD;

use Src\Clases\Familia;
use PDO;
use Src\Clases\Urgencia;
use Src\Clases\Medico;
use Src\Clases\Turno;

class FuncionesBD
{
    public static function getMedicos()
    {
        $conexion = ConexionBD::getConnection();
        $medicos = array();

        if ($conexion instanceof PDO) {
            $resultado = $conexion->query('
                SELECT m.codigo, m.nombre, m.edad, m.turno_id, f.num_pacientes, u.unidad FROM medicos m
                LEFT JOIN familia f ON m.codigo = f.codigo
                LEFT JOIN urgencias u ON m.codigo = u.codigo');

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if ($registro['num_pacientes'] !== null) {
                    $medico = new Familia(
                        $registro['codigo'],
                        $registro['nombre'],
                        $registro['edad'],
                        $registro['turno_id'],
                        $registro['num_pacientes']
                    );
                    array_push($medicos, $medico);
                } elseif ($registro['unidad'] !== null) {
                    $medico = new Urgencia(
                        $registro['codigo'],
                        $registro['nombre'],
                        $registro['edad'],
                        $registro['turno_id'],
                        $registro['unidad']
                    );
                    array_push($medicos, $medico);
                }
            }
        }
        return $medicos;
    }

    public static function getMedicosPorNPacientes($numPacientes)
    {
        $conexion = ConexionBD::getConnection();
        $medicos = array();

        if ($conexion instanceof PDO) {
            $resultado = $conexion->prepare('
                SELECT m.codigo, m.nombre, m.edad, m.turno_id, f.num_pacientes FROM medicos m
                LEFT JOIN familia f ON m.codigo = f.codigo
                WHERE f.num_pacientes >= :num_pacientes
            ');
            $resultado->execute([':num_pacientes' => $numPacientes]);

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if ($registro['num_pacientes'] !== null) {
                    $medico = new Familia(
                        $registro['codigo'],
                        $registro['nombre'],
                        $registro['edad'],
                        $registro['turno_id'],
                        $registro['num_pacientes']
                    );
                    array_push($medicos, $medico);
                }
            }
        }
        return $medicos;
    }
    public static function getTurnos()
    {
        $conexion = ConexionBD::getConnection();
        $turnos = array();

        if ($conexion instanceof PDO) {
            $resultado = $conexion->query('SELECT id, tipo FROM turnos');

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $turno = new Turno($registro['id'], $registro['tipo']);
                array_push($turnos, $turno);
            }
        }
        return $turnos;
    }

    public static function getMedicosPorTurnos($turnoId)
    {
        $conexion = ConexionBD::getConnection();
        $medicos = array();

        if ($conexion instanceof PDO) {
            // Filtrar productos por categoría
            $stmt = $conexion->prepare('
                SELECT m.codigo, m.nombre, m.edad, m.turno_id, f.num_pacientes, u.unidad FROM medicos m
                LEFT JOIN familia f ON m.codigo = f.codigo
                LEFT JOIN urgencias u ON m.codigo = u.codigo
                WHERE m.turno_id = :turno_id
            ');
            $stmt->execute([':turno_id' => $turnoId]);

            while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($registro['num_pacientes'] !== null) {
                    $medico = new Familia(
                        $registro['codigo'],
                        $registro['nombre'],
                        $registro['edad'],
                        $registro['turno_id'],
                        $registro['num_pacientes']
                    );
                    array_push($medicos, $medico);
                } elseif ($registro['unidad'] !== null) {
                    $medico = new Urgencia(
                        $registro['codigo'],
                        $registro['nombre'],
                        $registro['edad'],
                        $registro['turno_id'],
                        $registro['unidad']
                    );
                    array_push($medicos, $medico);
                }
            }
        }
        return $medicos;
    }
}
