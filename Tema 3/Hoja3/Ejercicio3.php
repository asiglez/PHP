<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hoja 3</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
    <?php
    $dni=72156747;
    $letra=$dni%23;
    $array=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',
    9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',
    20=>'C',21=>'K',22=>'E');
    echo $array[$letra];
    ?>
    </body>
    </html>