<?php

namespace Controllers;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $inicio = true;

        $router->render('paginas/index', [
            'inicio' => true
        ]);
    }

    public static function nosotros(Router $router) {
        $router->render('paginas/nosotros', [
            'nosotros' => true
        ]);
    }

    public static function contacto(Router $router) {
        $router->render('paginas/contacto', [
            'contacto' => true
        ]);
    }

    public static function informacion(Router $router) {

        $point = $_GET['id'];

        $router->render('paginas/informacion', [
            'point' => $point
        ]);
    }
}