<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suma = array_sum($_POST['numeros']);
    echo "Suma total: $suma";
}
?>