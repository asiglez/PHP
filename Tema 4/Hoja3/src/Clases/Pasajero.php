<?php
namespace Src\Clases;
class Pasajero
{
    public string $dni;
    public string $nombre;
    public string $sexo;
    public Plaza $plaza;
    public function __construct(string $dni, string $nombre, string $sexo, Plaza $plaza)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->plaza = $plaza;
    }
    public function getDni(): string
    {
        return $this->dni;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getSexo(): string
    {
        return $this->sexo;
    }
    public function getPlaza(): Plaza
    {
        return $this->plaza;
    }
    public function setDni(string $dni): void
    {
        $this->dni=$dni;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre=$nombre;
    }
    public function setSexo($sexo): void
    {
        $this->sexo=$sexo;
    }
    public function setPlaza(Plaza $plaza): void
    {
        $this->plaza=$plaza;
    }
}