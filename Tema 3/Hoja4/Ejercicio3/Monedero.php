<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <?php
    class Monedero{
        private float $dinero;
        private static int $numero_monederos=0;
        public function __construct($dinero) {
            $this->dinero = $dinero;
            self::$numero_monederos++;
        }
        public function __destruct(){
            $this->dinero=0;
            self::$numero_monederos--;
        }
        
        public function meter($ingreso){
            $this->dinero+=$ingreso;
        }
        public function sacar($retiro){
            if($this->dinero-$retiro>=0){
            $this->dinero-=$retiro;
            }else{
            echo "Saldo insuficiente<br/>";
            }
        }
        public function consulta(){
            return $this->dinero;
        }
    }
    ?>
    </body>
    </html>