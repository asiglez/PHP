<?php
require_once('ElementoVolador.php');
class Avion extends ElementoVolador {
    private $companiaAerea;
    private $fechaAlta;
    private $altitudMaxima;

    public function __construct($nombre, $numAlas, $numMotores, $companiaAerea, $fechaAlta, $altitudMaxima) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function volar($altitud) {
        if ($altitud < 0 || $altitud > $this->altitudMaxima) {
            echo "Altitud no permitida para este avión.<br>";
            return;
        }

        if ($this->getVelocidad() >= 150) {
            $actualAltitud = $this->getAltitud();
            while ($actualAltitud < $altitud) {
                $actualAltitud += 100;
                echo "Subiendo a altitud: $actualAltitud metros.<br>";
            }
        } else {
            echo "El avión no tiene la velocidad suficiente para volar.<br>";
        }
    }
    public function getCompaniaAerea(){
        return $this->companiaAerea;
    }
    public function mostrarInformacion() {
        echo "Avión de la compañía {$this->companiaAerea}, Altitud máxima: {$this->altitudMaxima} metros, Fecha:".$this->fechaAlta->format('d-M-Y').".<br>";
    }
}
?>