<?php
require_once('Producto.php');
class Electronica extends Producto {
    private $plazo_garantia;

    public function __construct($codigo, $nombre, $precio, $plazo_garantia) {
        parent::__construct($codigo, $nombre, $precio);
        $this->plazo_garantia = $plazo_garantia;
    }

    public function mostrar() {
        parent::mostrar();
        echo "Garantía: {$this->plazo_garantia} meses<br>";
    }
}
?>