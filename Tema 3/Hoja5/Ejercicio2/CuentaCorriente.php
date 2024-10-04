<?php
class CuentaCorriente extends Cuenta {
    private $cuota_mantenimiento;

    public function __construct($numero, $titular, $saldo, $cuota_mantenimiento) {
        parent::__construct($numero, $titular, $saldo);
        $this->cuota_mantenimiento = $cuota_mantenimiento;
        $this->ingreso(-$cuota_mantenimiento);
    }

    public function reintegro($cantidad) {
        if ($this->saldo >= 20) {
            parent::reintegro($cantidad);
        } else {
            echo "Saldo insuficiente para reintegro.<br>";
        }
    }

    public function mostrar() {
        parent::mostrar();
        echo "Cuota de mantenimiento: {$this->cuota_mantenimiento}€<br>";
    }
}
?>