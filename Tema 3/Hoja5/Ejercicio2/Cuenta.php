<?php
class Cuenta {
    private $numero;
    private $titular;
    private $saldo;

    public function __construct($numero, $titular, $saldo) {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function ingreso($cantidad) {
        $this->saldo += $cantidad;
    }

    public function reintegro($cantidad) {
        $this->saldo -= $cantidad;
    }

    public function esPreferencial($cantidad) {
        return $this->saldo > $cantidad;
    }

    public function mostrar() {
        echo "Cuenta Nº: {$this->numero}, Titular: {$this->titular}, Saldo: {$this->saldo}€<br>";
    }
}
?>