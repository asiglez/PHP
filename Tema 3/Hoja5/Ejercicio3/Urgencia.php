<?php
class Urgencia extends Medico {
    private $unidad;

    public function __construct($nombre, $edad, $turno, $unidad) {
        parent::__construct($nombre, $edad, $turno);
        $this->unidad = $unidad;
    }

    public function mostrar() {
        echo "Médico de Urgencia: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Unidad: {$this->unidad}<br>";
    }
}

?>