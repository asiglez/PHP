<?php

namespace Src\Clases;

use Src\Clases\Medico;

class Urgencia extends Medico
{
    public $unidad;
    public function __construct($codigo, $nombre, $edad, $turno, $unidad)
    {
        parent::__construct($codigo, $nombre, $edad, $turno);
        $this->unidad = $unidad;
    }
    public function getUnidad()
    {
        return $this->unidad;
    }
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
    }
    public function toString()
    {
        return "Codigo {$this->codigo}, Nombre: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Unidad: {$this->unidad}.<br>";
    }
}
?>