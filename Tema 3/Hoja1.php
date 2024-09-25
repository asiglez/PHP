<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
    <?php
    $dias_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $dia_semana = $dias_semana[date("w")-1];
    $dia = date("d");
    $mes = $meses[date("n")-1];
    $año = date("Y");
    echo "$dia_semana, $dia de $mes de $año";
    ?>
        <h1>Ejercicio 2</h1>
    <?php
    $suma=0;
    for($a=10;$a<100;$a++){
        if($a%2==0)
            $suma+=$a; 
    }
    echo "La suma de los números pares es: ";echo$suma;
    ?>
        <h1>Ejercicio 3</h1>
    <?php
    $numero=636;
    $inverso=0;
    $aux=$numero;
    while($aux !=0){
        $resto=$aux%10;
        $inverso=$inverso *10 +$resto;
        $aux=(int)($aux/10);
    }
    if($numero==$inverso)
    print "El numero $numero es capicua";
    else
    print "El numero $numero no es capicua";
    ?>
        <h1>Ejercicio 4</h1>
    <?php
    for($a=100;$a<999;$a++){
    $d1=$a/100;
    settype($d1,"integer");
    $prueba1=$a%100;
    $prueba2=$prueba1%10;
    $d3=$prueba2/1;
    if($d1==$d3)
    print "$a ";
    }
    ?>
        <h1>Ejercicio 5</h1>
    <?php
    for($a=100;$a<999;$a++){
    $d1=$a/100;
    settype($d1,"integer");
    $d2=($a%100)/10;
    settype($d2,"integer");
    $d3=($a%100)%10;
    $suma=$d1+$d2+$d3;
    $multiplicacion=$d1*$d2*$d3;
    if($suma==$multiplicacion)
    print "$a ";
    }
    ?>
        <h1>Ejercicio 6</h1>
    <?php
    $d1=0;
    $d2=1;
    print "$d1,$d2";
    for($a=0;$a<10;$a++){
    $d1+=$d2;
    $d2+=$d1;
    print ",$d1,$d2";
    }
    ?>
        <h1>Ejercicio 7</h1>
    <?php
    $d1=1;
    $d2=2;
    print "$d1/$d2";
    for($a=1;$a<10;$a++){
    $d1++;
    $d2*=2;
    print ",$d1/$d2";
    }
    ?>
        <h1>Ejercicio 8</h1>
    <?php
    $d1=9;
    $aux=$d1;
    for($a=1;$a<$aux;$a++){
    $d1*=$a;
    }
    print $d1;
    ?>
        <h1>Ejercicio 9</h1>
    <?php
    $distancia=1000;
    $dias=7;
    $precio=$distancia*2.5;
    if($distancia>=800 && $dias>=7){
    $precio*=0.7;
    }
    print $precio;
    ?>
</body>
</html>