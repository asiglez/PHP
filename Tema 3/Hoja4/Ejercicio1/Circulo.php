<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <?php
    class Circulo{
        private float $radio;
        public function __construct(float $radio) {
            $this->radio = $radio;
        }
        public function setRadio(float $newradio){
            $this->radio=$newradio;
        }
        public function getRadio(){
            return $this->radio;
        }
        //public function __set($radio,$valor){
        //    $this->radio=$valor;
        //}
        //public function __get($radio){
        //    return $this->radio;
        //}
    }
    ?>
    </body>
    </html>