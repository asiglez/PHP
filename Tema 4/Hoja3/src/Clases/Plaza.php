<?php
namespace Src\Clases;
class Plaza
{
    public int $numero;
    public bool $reservada;
    public float $precio;
    public function __construct(int $numero, bool $reservada, float $precio)
    {
        $this->numero = $numero;
        $this->reservada = $reservada;
        $this->precio = $precio;
    }
    public function getNumero(): int
    {
        return $this->numero;
    }
    public function getReservada(): bool
    {
        return $this->reservada;
    }
    public function getPrecio(): float
    {
        return $this->precio;
    }
    public function setNumero(int $numero): void
    {
        $this->numero=$numero;
    }
    public function setReservada(bool $reservada): void
    {
        $this->reservada=$reservada;
    }
    public function setPrecio(float $precio): void
    {
        $this->precio=$precio;
    }
}
