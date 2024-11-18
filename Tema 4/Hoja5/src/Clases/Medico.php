<?php

namespace Src\Clases;

abstract class Medico
{
    public $codigo;
    public $nombre;
    public $edad;
    public $turno;
    public function __construct($codigo, $nombre, $edad, $turno)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getTurno()
    {
        return $this->turno;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }
    public function toString()
    {
        return "Codigo {$this->codigo}, Nombre: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}.<br>";
    }
}
?>
