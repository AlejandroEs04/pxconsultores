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
                debuguear($codigo);
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
}