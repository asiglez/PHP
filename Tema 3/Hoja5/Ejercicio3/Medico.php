<?php
abstract class Medico {
    protected $nombre;
    protected $edad;
    protected $turno;

    public function __construct($nombre, $edad, $turno) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }

    abstract public function mostrar();
}
?>