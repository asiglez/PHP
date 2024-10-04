<?php
class Familia extends Medico {
    private $num_pacientes;

    public function __construct($nombre, $edad, $turno, $num_pacientes) {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes;
    }

    public function mostrar() {
        echo "Médico de Familia: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Pacientes: {$this->num_pacientes}<br>";
    }
}
?>