<?php
     if (isset($_POST['enviar'])) { 
    $numero=$_POST['numero'];
    print"TABLA DE MULTIPLICAR DEL $numero:<br>";
    for($i=1;$i<=10;$i++){
        print("$i X $numero = ".$i*$numero."<br>");
    }
     }
?>
<br/>
<a href="Ejercicio6.html">Volver</a>