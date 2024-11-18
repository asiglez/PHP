<?php

namespace Src\Clases;

use Src\Clases\Medico;

class Familia extends Medico
{
    public $numPacientes;
    public function __construct($codigo, $nombre, $edad, $turno, $numPacientes)
    {
        parent::__construct($codigo, $nombre, $edad, $turno);
        $this->numPacientes = $numPacientes;
    }
    public function getNumPacientes()
    {
        return $this->numPacientes;
    }
    public function setNumPacientes($numPacientes)
    {
        $this->numPacientes = $numPacientes;
    }
    public function toString()
    {
        return "Codigo {$this->codigo}, Nombre: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Numero de Pacientes: {$this->numPacientes}.<br>";
    }
}
?>