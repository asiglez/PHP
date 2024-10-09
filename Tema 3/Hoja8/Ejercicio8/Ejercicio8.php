<?php
     if (isset($_POST['enviar'])) { 
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $operador=$_POST['operador'];
    $resultado;
     }
     if($operador=="suma"){
        $resultado=$numero1+$numero2;
        print"El resultado de realizar la suma de los numeros $numero1 y $numero2 es ".$resultado;
     }
     if($operador=="resta"){
        $resultado=$numero1-$numero2;
        print"El resultado de realizar la resta de los numeros $numero1 y $numero2 es ".$resultado;
     }
     if($operador=="producto"){
        $resultado=$numero1*$numero2;
        print"El resultado de realizar el producto de los numeros $numero1 y $numero2 es ".$resultado;
     }
     if($operador=="cociente"){
        $resultado=$numero1/$numero2;
        print"El resultado de realizar el cociente de los numeros $numero1 y $numero2 es ".$resultado;
     }
?>
<br/>
<br/>
<a href="Ejercicio8.html">Volver</a>