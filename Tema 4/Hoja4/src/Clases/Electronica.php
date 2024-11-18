<?php

namespace Src\Clases;

use Src\Clases\Producto;

class Electronica extends Producto
{
    public $plazoGarantia;
    public function __construct($codigo, $precio, $nombre, $plazoGarantia, $categoria)
    {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->plazoGarantia = $plazoGarantia;
    }
    public function getPlazoGarantia()
    {
        return $this->plazoGarantia;
    }
    public function setPlazoGarantia($plazoGarantia)
    {
        $this->plazoGarantia = $plazoGarantia;
    }
    public function toString()
    {
        return "Codigo {$this->codigo}, Precio: {$this->precio}, Nombre: {$this->nombre}, Plazo Garantia: {$this->plazoGarantia}, Categoria: {$this->categoria}.<br>";
    }
}