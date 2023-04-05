<?php 

namespace Controllers;

use Model\Usuarios;
use MVC\Router;


class LoginController {
    public static function login(Router $router) {

        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $auth = new Usuarios($_POST['usuarios']);

            $errores = $auth->validar();
        
            if(empty($errores)) {

                $resultado = $auth->existeUsuario();

                if(!$resultado) {
                    // Mensaje de error si el usuario no existe
                    $errores = Usuarios::getErrores();
                } else {
                    // Verificar password
                    $auth->comprobarPassword($resultado);

                    if($auth->autenticado) {
                        $auth->autenticar();
                    } else {
                        $errores = Usuarios::getErrores();
                    }
                }
            }
        }

        $adminsi = true;

        $router->render('auth/login', [
            'adminsi' => true,
            'errores' => $errores,
        ]);
    }

    public static function nuevo(Router $router) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $passwordHash = password_hash($_POST['usuarios']['password'], PASSWORD_DEFAULT);

            $_POST['usuarios']['password'] = $passwordHash;

            // Crear una nueva instancia
            $usuarios = new Usuarios($_POST['usuarios']);

            // Validar
            $errores = $usuarios->validar();
            
            if (empty($errores)) {

                // Guarda en la base de datos
                $usuarios->guardar();
            }
        }

        $router->render('auth/nuevo', [
            'adminsi' => true
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}