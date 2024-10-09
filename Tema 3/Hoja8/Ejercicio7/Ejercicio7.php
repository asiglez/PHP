<?php
     if (isset($_POST['enviar'])) { 
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    print"LISTA DE PARES DE NUMEROS DE $numero1 Y $numero2:<br>";
    for($i=$numero1,$j=$numero2;$i<=$numero2;$i++,$j--){
        print("($i,$j) ");
    }
     }
?>
<br/>
<br/>
<a href="Ejercicio7.html">Volver</a>