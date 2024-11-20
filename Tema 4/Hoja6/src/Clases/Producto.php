<?php
namespace Src\Clases;

class Familia
{
    public $id;
    public $nombre;
    public $precio;
    public $descripcion;
    public $imagen;
    public function __construct($id, $nombre, $precio, $descripcion, $imagen)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
}
?>