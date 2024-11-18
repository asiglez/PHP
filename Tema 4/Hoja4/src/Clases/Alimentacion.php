<?php

namespace Src\Clases;

use Src\Clases\Producto;

class Alimentacion extends Producto
{
    public $mesCaducidad;
    public $añoCaducidad;
    public function __construct($codigo, $precio, $nombre, $mesCaducidad, $añoCaducidad, $categoria)
    {
        parent::__construct($codigo, $precio, $nombre, $categoria);
        $this->mesCaducidad = $mesCaducidad;
        $this->añoCaducidad = $añoCaducidad;
    }
    public function getMesCaducidad()
    {
        return $this->mesCaducidad;
    }
    public function getAñoCaducidad()
    {
        return $this->añoCaducidad;
    }
    public function setMesCaducidad($mesCaducidad)
    {
        $this->mesCaducidad = $mesCaducidad;
    }
    public function setAñoCaducidad($añoCaducidad)
    {
        $this->añoCaducidad = $añoCaducidad;
    }
    public function toString()
    {
        return "Codigo {$this->codigo}, Precio: {$this->precio}, Nombre: {$this->nombre}, Mes Caducidad: {$this->mesCaducidad}, Año Caducidad: {$this->añoCaducidad}, Categoria: {$this->categoria}.<br>";
    }
}
