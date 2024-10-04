<?php
class Alimentacion extends Producto {
    private $mes_caducidad;
    private $anio_caducidad;

    public function __construct($codigo, $nombre, $precio, $mes_caducidad, $anio_caducidad) {
        parent::__construct($codigo, $nombre, $precio);
        $this->mes_caducidad = $mes_caducidad;
        $this->anio_caducidad = $anio_caducidad;
    }

    public function mostrar() {
        parent::mostrar();
        echo "Caducidad: {$this->mes_caducidad}/{$this->anio_caducidad}<br>";
    }
}
?>