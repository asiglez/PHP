<?php
     if (isset($_GET['enviar'])) { 
    $nombre=$_GET['nombre'];
    $select=$_GET['select'];
        print "Nombre: ".$nombre."<br/>";
        print "Módulo: ".$select."<br/>";
     }
?>