<?php

namespace App\Clases\Clases;

class Jugador
{
    public int $codigo;
    public string $nombre;
    public $procedencia;
    public float $altura;
    public float $peso;
    public string $posicion;
    public $nombre_equipo;
    public function __construct(int $codigo, string $nombre, $procedencia, float $altura, float $peso, string $posicion, $nombre_equipo)
    {
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->procedencia = $procedencia;
            $this->altura = $altura;
            $this->peso = $peso;
            $this->posicion = $posicion;
            $this->nombre_equipo = $nombre_equipo;
    }
    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getProcedencia()
    {
        return $this->procedencia;
    }
    public function getAltura(): float
    {
        return $this->altura;
    }
    public function getPeso(): float
    {
        return $this->peso;
    }
    public function getPosicion(): string
    {
        return $this->posicion;
    }
    public function getNombre_equipo()
    {
        return $this->nombre_equipo;
    }
}
