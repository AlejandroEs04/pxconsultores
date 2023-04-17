<?php 

namespace Controllers;

use Model\Cliente;
use Model\Producto;
use Model\Proyecto;
use MVC\Router;

class NombresController {
    public static function crearProyecto(Router $router) {

        $tipo = "proyecto";
        $nombre = "Proyecto";
        $errores = Proyecto::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia 
            $proyecto = new Proyecto($_POST['proyecto']);

            $errores = $proyecto->validar();


            if(empty($errores)) {
                // Guardar en la base de datos
                $proyecto->guardar();
            }
        }

        $router->render('admin/formulario-nombre', [
            'errores' => $errores,
            'tipo' => $tipo,
            'nombre' => $nombre
        ]);
    }

    public static function crearCliente(Router $router) {

        $tipo = "cliente";
        $nombre = "Cliente";
        $errores = Cliente::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia 
            $cliente = new Cliente($_POST['cliente']);

            $errores = $cliente->validar();


            if(empty($errores)) {
                // Guardar en la base de datos
                $cliente->guardar();
            }
        }

        $router->render('admin/formulario-nombre', [
            'errores' => $errores,
            'tipo' => $tipo,
            'nombre' => $nombre
        ]);
    }

    public static function crearProducto(Router $router) {

        $tipo = "producto";
        $nombre = "Producto";
        $errores = Producto::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia 
            $producto = new Producto($_POST['producto']);

            $errores = $producto->validar();


            if(empty($errores)) {
                // Guardar en la base de datos
                $producto->guardar();
            }
        }

        $router->render('admin/formulario-nombre', [
            'errores' => $errores,
            'tipo' => $tipo,
            'nombre' => $nombre
        ]);
    }
}