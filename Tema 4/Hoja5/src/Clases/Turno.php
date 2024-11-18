<?php
namespace Src\Clases;

class Turno
{
    public $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    public function toString()
    {
        return "Turno: {$this->tipo}";
    }
}
?>