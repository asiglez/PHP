<?php
namespace Src\Clases;

class Turno
{
    public $id;
    public $tipo;

    public function __construct($id, $tipo)
    {
        $this->id=$id;
        $this->tipo = $tipo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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