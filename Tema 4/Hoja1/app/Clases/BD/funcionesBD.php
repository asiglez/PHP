<?php

namespace App\Clases\BD;

use PDO;
use PDOException;
use App\Clases\BD\conexionBD;
use App\Clases\Clases\Equipo;
use App\Clases\Clases\Jugador;

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
    public static function getJugadores($equipo)
    {
        $conexion = conexionBD::getConnection();
        $jugadores = array();
        if ($conexion instanceof PDO) {
            $resultado = $conexion->query('SELECT codigo,nombre,procedencia,altura,peso,posicion,nombre_equipo FROM jugadores');
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $jugador = new Jugador($registro['codigo'], $registro['nombre'], $registro['procedencia'], $registro['altura'],$registro['peso'],$registro['posicion'],$registro['nombre_equipo']);
                if($equipo===$jugador->getNombre_equipo()){
                array_push($jugadores, $jugador);
                }
            }
        }
        return $jugadores;
    }
}