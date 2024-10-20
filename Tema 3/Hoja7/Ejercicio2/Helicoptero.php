<?php
require_once('ElementoVolador.php');
class Helicoptero extends ElementoVolador {
    private $propietario;
    private $nRotor;

    public function __construct($nombre, $numAlas, $numMotores, $propietario, $nRotor) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->propietario = $propietario;
        $this->nRotor = $nRotor;
    }

    public function volar($altitud) {
        $altitudMaxima = $this->nRotor * 100;
        if ($altitud > $altitudMaxima) {
            echo "Altitud no permitida para este helicóptero.<br>";
            return;
        }

        $actualAltitud = $this->getAltitud();
        while ($actualAltitud < $altitud) {
            $actualAltitud += 20;
            echo "Helicóptero subiendo a altitud: $actualAltitud metros.<br>";
        }
    }
    public function getNRotor(){
        return $this->nRotor;
    }
    public function mostrarInformacion() {
        echo "Helicóptero de {$this->propietario}, Número de rotores: {$this->nRotor}.<br>";
    }
}
?>