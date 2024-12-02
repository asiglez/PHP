<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

use App\Controllers\HolaMundoController; // el namespace

$holaMundoController = new HolaMundoController();

$holaMundoController->index();

echo '<hr>';

echo holaMundo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>