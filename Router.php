<?php 

namespace MVC;

class Router {
    public $rutasGet = [];
    public $rutasPost = [];

    public function get($url, $fn) {
        $this->rutasGet[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->rutasPost[$url] = $fn;
    }

    public function comprobarRutas() {
        session_start();

        // Comprobar si el usuario iniciar sesion para entrar a admin
        $auth = $_SESSION['login'] ?? null;

        // Arreglo de rutas protegidas
        $rutas_protegidas = [
            '/admin', 
            '/nuevo', 
            '/proyecto/crear',
            '/producto/crear',
            '/cliente/crear',
            '/codigo/crear',
            '/codigo/actualizar'
        ];

        // Identificar en que ruta se encuentra el usuario 
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        // Identificar si es metodo POST o GET
        $metodo = $_SERVER['REQUEST_METHOD'];

        if($metodo === 'GET') {
            $fn = $this->rutasGet[$urlActual] ?? null;
        } else {
            $fn = $this->rutasPost[$urlActual] ?? null;
        }


        // Proteger las rutas
        if(in_array($urlActual, $rutas_protegidas) && !$auth) {
           header('Location: /');
        }

        if($fn) {
            call_user_func($fn, $this);
        } else {
            incluirTemplate('Error404');
        }
    }

    // Muestra una vista
    public function render($view, $datos = []) {
        foreach($datos as $key => $value) {
            $$key = $value;
        } 
        
        ob_start();
        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();

        include __DIR__ . "/views/layout.php";
    }
}