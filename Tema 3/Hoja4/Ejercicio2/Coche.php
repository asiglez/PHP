<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 4</title>
    </head>
    <?php
    class Coche{
        private string $matricula="";
        private int $velocidad=0;
        public function __construct(string $matricula, int$velocidad) {
            $this->matricula = $matricula;
            $this->velocidad = $velocidad;
        }
        public function acelera(int $incremento){
            if($this->velocidad+$incremento<=120){
            $this->velocidad+=$incremento;
            }else{
                echo "No se puede ir mas rapido de 120 Km/H<br/>";
            }
        }
        public function frena(int $frena){
            if($this->velocidad-$frena>=0){
            $this->velocidad-=$frena;
            }else{
                echo "No se puede ir mas despacio de 0 Km/H<br/>";
            }
        }
        public function mostrar(){
            echo "La matricula es: $this->matricula <br/>
            La velocidad es: $this->velocidad";
        }
    }
    ?>
    </body>
    </html>