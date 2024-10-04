<?php
class Empleado {
    private $nombre;
    private $sueldoBase;

    public function __construct($nombre, $sueldoBase) {
        $this->nombre = $nombre;
        $this->sueldoBase = $sueldoBase;
    }

    public function getSueldo() {
        return $this->sueldoBase;
    }
}
?>