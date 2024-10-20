<?php
require_once('Aeropuerto.php');
require_once('Avion.php');
require_once('Helicoptero.php');
require_once('ElementoVolador.php');
require_once('Volador.php');
class Aeropuerto {
    private $elementosVoladores;

    public function __construct() {
        $this->elementosVoladores = [];
    }

    public function insertar(ElementoVolador $elemento) {
        $this->elementosVoladores[] = $elemento;
    }

    public function buscar($nombre) {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() === $nombre) {
                $elemento->mostrarInformacion();
                return $elemento;
            }
        }
        echo "Elemento no encontrado.<br>";
        return null;
    }

    public function listarCompania($compania) {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Avion && $elemento->getCompaniaAerea() === $compania) {
                $elemento->mostrarInformacion();
            }
        }
    }

    public function rotores($nRotor) {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero && $elemento->getNRotor() === $nRotor) {
                $elemento->mostrarInformacion();
            }
        }
    }

    public function despegar($nombre, $altitud, $velocidad) {
        $elemento = $this->buscar($nombre);
        if ($elemento !== null) {
            $elemento->acelerar($velocidad);
            $elemento->volar($altitud);
        }
    }
}
?>