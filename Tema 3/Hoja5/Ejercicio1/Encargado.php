<?php
class Encargado extends Empleado {
    public function getSueldo() {
        return parent::getSueldo() * 1.15; // 15% más
    }
}
?>