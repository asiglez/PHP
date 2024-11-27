<?php

namespace App\Clases\BD;

use PDO;
use PDOException;
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
                $jugador = new Jugador($registro['codigo'], $registro['nombre'], $registro['procedencia'], $registro['altura'], $registro['peso'], $registro['posicion'], $registro['nombre_equipo']);
                if ($equipo === $jugador->getNombre_equipo()) {
                    array_push($jugadores, $jugador);
                }
            }
        }
        return $jugadores;
    }
    public static function realizarTraspaso(string $equipo, string $jugadorbaja, string $nombre, string $procedencia, string $altura, string $peso, string $posicion)
    {
        $conexion = conexionBD::getConnection();
        if ($conexion instanceof PDO) {
            $ok = true;
            $conexion->beginTransaction();
            $altura = floatval($altura);
            $peso = floatval($peso);
            $stmt1 = $conexion->prepare('UPDATE jugadores set nombre_equipo=null where nombre= :jugador_baja');
            $stmt1->execute([
                ":jugador_baja" => $jugadorbaja
            ]);

            if ($stmt1->rowCount() == 0) {
                $ok = false;
            }
            $stmt2 = $conexion->prepare('INSERT INTO jugadores (nombre, procedencia, altura, peso, posicion, nombre_equipo) VALUES (:nombre,:procedencia,:altura,:peso,:posicion,:equipo)');
            $stmt2->execute([
                ":nombre" => $nombre,
                ":procedencia" => $procedencia,
                ":altura" => $altura,
                ":peso" => $peso,
                ":posicion" => $posicion,
                ":equipo" => $equipo
            ]);

            if ($stmt2->rowCount() == 0) {
                $ok = false;
            }
            if ($ok){
                $conexion->commit();
            }
            else $conexion->rollback();
        }
    }
}
