<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 1</title>
    </head>
    <body>  
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
    </body>
    </html>