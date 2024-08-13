<?php

namespace Controllers;

use Exception;
use Model\Producto;
use MVC\Router;

class ProductoController
{
    public static function index(Router $router)
    {
        $productos = Producto::find(2);
        $router->render('productos/index', [
            'productos' => $productos
        ]);
    }

    public static function guardarAPI()
    {
        $_POST['nombre'] = htmlspecialchars($_POST['nombre']);
        try {
            $producto = new Producto($_POST);
            $resultado = $producto->guardar();
            http_response_code(200);
            echo json_encode([
                'codigo' => 1,
                'mensaje' => 'Producto guardado exitosamente',
            ]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al guardar producto',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function buscarAPI()
    {
        try {

            $productos = Producto::all();
            http_response_code(200);
            echo json_encode($productos);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al buscar productos',
                'detalle' => $e->getMessage(),
            ]);
        }
    }
}
