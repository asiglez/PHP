<?php
class Producto {
    protected $codigo;
    protected $nombre;
    protected $precio;

    public function __construct($codigo, $nombre, $precio) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrar() {
        echo "Código: {$this->codigo}, Nombre: {$this->nombre}, Precio: {$this->precio}€<br>";
    }

    public function getPrecio() {
        return $this->precio;
    }
}
?>