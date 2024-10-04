<?php
class CuentaAhorro extends Cuenta {
    private $comision_apertura;
    private $intereses;

    public function __construct($numero, $titular, $saldo, $comision_apertura, $intereses) {
        parent::__construct($numero, $titular, $saldo);
        $this->comision_apertura = $comision_apertura;
        $this->intereses = $intereses;
        $this->ingreso(-$comision_apertura);
    }

    public function aplicaInteres() {
        $this->ingreso($this->saldo * ($this->intereses / 100));
    }

    public function mostrar() {
        parent::mostrar();
        echo "Comisión de apertura: {$this->comision_apertura}€, Intereses: {$this->intereses}%<br>";
    }
}
?>