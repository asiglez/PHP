<?php
     if (isset($_GET['enviar'])) { 
    $nombre=$_GET['nombre'];
    $apellidos=$_GET['apellidos'];
    $edad=$_GET['edad'];
        print "Nombre: ".$nombre."<br/>";
        print "Apellidos: ".$apellidos."<br/>";
        print "Edad: ".$edad."<br/>";
     }
?>