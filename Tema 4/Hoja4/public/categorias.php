<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

use Src\BD\FuncionesBD;

$categorias = FuncionesBD::getCategorias(); // Obtener todas las categorías

$productos = [];
if (isset($_GET['categoria_id'])) {
    // Si se selecciona una categoría, obtener los productos de esa categoría
    $categoriaId = $_GET['categoria_id'];
    $productos = FuncionesBD::getProductosPorCategoria($categoriaId);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos por Categoría</title>
</head>
<body>
    <h1>Selecciona una Categoría</h1>

    <!-- Formulario para seleccionar la categoría -->
    <form method="get" action="categorias.php">
        <select name="categoria_id">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria->getId(); ?>">
                    <?php echo $categoria->getNombre(); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ver Productos</button>
    </form>

    <h2>Productos de la Categoría</h2>
    <div>
        <?php if ($productos): ?>
            <?php foreach ($productos as $producto): ?>
                <div>
                    <p><strong>Nombre:</strong> <?php echo $producto->getNombre(); ?></p>
                    <p><strong>Código:</strong> <?php echo $producto->getCodigo(); ?></p>
                    <p><strong>Precio:</strong> <?php echo $producto->getPrecio(); ?> €</p>
                    <p><strong>Categoría:</strong> <?php echo $producto->getCategoria(); ?></p>
                    <?php if ($producto instanceof \Src\Clases\Alimentacion): ?>
                        <p><strong>Mes de Caducidad:</strong> <?php echo $producto->getMesCaducidad(); ?></p>
                        <p><strong>Año de Caducidad:</strong> <?php echo $producto->getAñoCaducidad(); ?></p>
                    <?php elseif ($producto instanceof \Src\Clases\Electronica): ?>
                        <p><strong>Plazo de Garantía:</strong> <?php echo $producto->getPlazoGarantia(); ?> años</p>
                    <?php endif; ?>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay productos para esta categoría.</p>
        <?php endif; ?>
    </div>
</body>
</html>