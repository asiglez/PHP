<?php

namespace Src\BD;

use PDO;
use Src\Clases\Alimentacion;
use Src\Clases\Electronica;
use Src\Clases\Categoria;

class FuncionesBD
{
    public static function getProductos()
    {
        $conexion = ConexionBD::getConnection();
        $productos = array();

        if ($conexion instanceof PDO) {
            // Consulta para obtener todos los productos
            $resultado = $conexion->query('
                SELECT p.codigo, p.nombre, p.precio, p.categoria_id, a.mes_caducidad, a.año_caducidad, e.plazo_garantia FROM productos p 
                LEFT JOIN alimentaciones a ON p.codigo = a.codigo
                LEFT JOIN electronicas e ON p.codigo = e.codigo');

            // Recorrer los resultados y crear objetos según el tipo de producto
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                if ($registro['mes_caducidad'] !== null) {
                    // Producto de tipo Alimentación
                    $producto = new Alimentacion(
                        $registro['codigo'],
                        $registro['precio'],
                        $registro['nombre'],
                        $registro['mes_caducidad'],
                        $registro['año_caducidad'],
                        $registro['categoria_id']
                    );
                    array_push($productos, $producto);
                } elseif ($registro['plazo_garantia'] !== null) {
                    // Producto de tipo Electrónica
                    $producto = new Electronica(
                        $registro['codigo'],
                        $registro['precio'],
                        $registro['nombre'],
                        $registro['plazo_garantia'],
                        $registro['categoria_id']
                    );
                    array_push($productos, $producto);
                }
            }
        }

        return $productos;
    }

    public static function getCategorias()
    {
        $conexion = ConexionBD::getConnection();
        $categorias = array();

        if ($conexion instanceof PDO) {
            // Obtener todas las categorías
            $resultado = $conexion->query('SELECT id, nombre FROM categorias');

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $categoria = new Categoria($registro['id'], $registro['nombre']);
                array_push($categorias, $categoria);
            }
        }

        return $categorias;
    }
    public static function getProductosPorCategoria($categoriaId)
    {
        $conexion = ConexionBD::getConnection();
        $productos = array();

        if ($conexion instanceof PDO) {
            // Filtrar productos por categoría
            $stmt = $conexion->prepare('
                SELECT p.codigo, p.nombre, p.precio, p.categoria_id, a.mes_caducidad, a.año_caducidad, e.plazo_garantia
                FROM productos p
                LEFT JOIN alimentaciones a ON p.codigo = a.codigo
                LEFT JOIN electronicas e ON p.codigo = e.codigo
                WHERE p.categoria_id = :categoria_id
            ');
            $stmt->execute([':categoria_id' => $categoriaId]);

            while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($registro['mes_caducidad'] !== null) {
                    // Producto de tipo Alimentación
                    $producto = new Alimentacion(
                        $registro['codigo'],
                        $registro['precio'],
                        $registro['nombre'],
                        $registro['mes_caducidad'],
                        $registro['año_caducidad'],
                        $registro['categoria_id']
                    );
                    array_push($productos, $producto);
                } elseif ($registro['plazo_garantia'] !== null) {
                    // Producto de tipo Electrónica
                    $producto = new Electronica(
                        $registro['codigo'],
                        $registro['precio'],
                        $registro['nombre'],
                        $registro['plazo_garantia'],
                        $registro['categoria_id']
                    );
                    array_push($productos, $producto);
                }
            }
        }

        return $productos;
    }
}
?>