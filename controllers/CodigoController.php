<?php

namespace Controllers;

use Model\Cliente;
use Model\Codigo;
use Model\Producto;
use Model\Proyecto;
use MVC\Router;

class CodigoController {
    public static function crear(Router $router) {

        $codigo = new Codigo;
        $errores = Codigo::getErrores();

        // Obtengo datos que llevaran el codigo
        $clientes = Cliente::all();
        $productos = Producto::all();
        $proyectos = Proyecto::all();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia
            $codigo = new Codigo($_POST['codigo']);

            $errores = $codigo->validar();


            if(empty($errores)) {
                // Guardar en la base de datos
                $codigo->guardar();
            }
        }


        $router->render('admin/codigo-crear', [
            'errores' => $errores,
            'adminsi' => true, 
            'clientes' => $clientes, 
            'productos' => $productos,
            'proyectos' => $proyectos, 
            'codigo' => $codigo
        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarORedireccionar('/codigo');

            // Buscar codigo por su id 
            $codigo = Codigo::find($id);

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $args = $_POST['codigo'];
    
                $errores = $codigo->validar();
    
    
                if(empty($errores)) {
                    // Guardar en la base de datos
                    $args->guardar();
                }
            }

        $router->render('admin/actualizar', [
            'codigo' => $codigo
        ]);
    }
}