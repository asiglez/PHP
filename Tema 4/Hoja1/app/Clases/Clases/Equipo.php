<?php
namespace App\Clases\Clases;
class Equipo
{
    public string $nombre;
    public string $ciudad;
    public string $conferencia;
    public string $division;
    public function __construct(string $nombre, string $ciudad, string $conferencia, string $division)
    {
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->conferencia = $conferencia;
        $this->division = $division;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getCiudad(): string
    {
        return $this->ciudad;
    }
    public function getConferencia(): string
    {
        return $this->conferencia;
    }
    public function getDivision(): string
    {
        return $this->division;
    }
}
?>