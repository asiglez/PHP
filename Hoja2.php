<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 2</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    echo "Este es el resultado correcto del primer ejercicio";
    ?>    
        <h1>Ejercicio 2</h1>
    <?php
    echo "Segundo ejercicio: visualización del contenido de variables<br/>";
    $nombre="Asier";
    $edad=23;
    echo "Mi nombre es $nombre y mi edad es $edad";
    ?>    
        <h1>Ejercicio 3</h1>
    <?php
    $operador1=13;
    $operador2=4;
    $resultado1=$operador1-$operador2;
    $resultado2=$operador1+$operador2;
    $resultado3=$operador1*$operador2;
    $resultado4=$operador1/$operador2;
    $resultado5=$operador1%$operador2;
    echo "$resultado1<br/>";
    echo "$resultado2<br/>";
    echo "$resultado3<br/>";
    echo "$resultado4<br/>";
    echo "$resultado5<br/>";
    ?>
        <h1>Ejercicio 4</h1>
    <?php
    $nombre="Juan";
    echo "Informacion de la variable nombre:"; var_dump($nombre);
    echo "<br/>Contenido de la variable: $nombre";
    $nombre=null;
    echo "<br/>Despues de asignarle un valor nulo:"; var_dump($nombre);
    ?>
        <h1>Ejercicio 5</h1>
    <?php
    $temporal="Juan";
    echo "$temporal es un "; echo gettype($temporal);
    $temporal=3.14;
    echo "<br/>$temporal es un "; echo gettype($temporal);
    $temporal=false;
    echo "<br/>$temporal es un "; echo gettype($temporal);
    $temporal=3;
    echo "<br/>$temporal es un "; echo gettype($temporal);
    $temporal=null;
    echo "<br/>$temporal es un "; echo gettype($temporal);
    ?>
        <h1>Ejercicio 6</h1>
    <?php
    $n1=5;
    $n2=6;
    $n3=7;
    $media=($n1+$n2+$n3)/3;
    echo "La media es $media";
    ?>
        <h1>Ejercicio 7</h1>
    <?php
    $n1=4;
    $n2=5;
    echo "El valor de la primera variable es $n1 y el de la segunda es $n2<br/>";
    $ayuda=$n1;
    $n1=$n2;
    $n2=$ayuda;
    echo "Ahora el valor de la primera variable es $n1 y el de la segunda es $n2";
    ?>
        <h1>Ejercicio 8</h1>
    <?php
    $dinero=67;
    $b10=$dinero/10;
    settype($b10,"integer");
    $dinero-=$b10*10;
    $b5=$dinero/5;
    settype($b5,"integer");
    $dinero-=$b5*5;
    $b1=$dinero/1;
    settype($b1,"integer");
    $dinero-=$b1*1;
    echo "67€ se divide en $b10 billetes de 10, $b5 billete de 5 y $b1 monedas de 1";
    ?>
</body>
</html>