<?php
     if (isset($_REQUEST['enviar'])) { 
    $nombre=$_REQUEST['nombre'];
    $select=$_REQUEST['select'];
        print "Nombre: ".$nombre."<br/>";
        print "Módulo: ".$select."<br/>";
     }
?>