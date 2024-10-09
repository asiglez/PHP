<?php
     if (isset($_POST['enviar'])) { 
    $numero=$_POST['numero'];
    if($numero%2==0){
     print "El numero $numero es par";
    }else{
     print "El numero $numero es impar";
    }
     }
?>
<form action="Ejercicio5.html" method="post">
<input type="submit" name="volver" value="Volver">
</form>