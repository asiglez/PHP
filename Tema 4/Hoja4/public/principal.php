<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$productos = FuncionesBD::getProductos(); // Obtener todos los productos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
</head>
<body>
    <h1>Todos los Productos</h1>

    <div>
        <?php foreach ($productos as $producto){ ?>
            <div>
                <p><strong>Nombre:</strong> <?php echo $producto->getNombre(); ?></p>
                <p><strong>Código:</strong> <?php echo $producto->getCodigo(); ?></p>
                <p><strong>Precio:</strong> <?php echo $producto->getPrecio(); ?> €</p>
                <p><strong>Categoría:</strong> <?php echo $producto->getCategoria(); ?></p>
                <?php if ($producto instanceof \Src\Clases\Alimentacion){ ?>
                    <p><strong>Mes de Caducidad:</strong> <?php echo $producto->getMesCaducidad(); ?></p>
                    <p><strong>Año de Caducidad:</strong> <?php echo $producto->getAñoCaducidad(); ?></p>
                <?php }elseif ($producto instanceof \Src\Clases\Electronica){ ?>
                    <p><strong>Plazo de Garantía:</strong> <?php echo $producto->getPlazoGarantia(); ?> años</p>
                <?php }
                } ?>
                <hr>
            </div>
    </div>
</body>
</html>