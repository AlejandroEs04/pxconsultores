<?php

namespace Controllers;
use Model\Email;
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

        $email = new Email;
        $errores = Email::getErrores();
        $resultado = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia para correo
            $email =  new Email($_POST['contacto']);

            $errores = $email->validar();

            if(empty($errores)) {
                $message = "Tiene un correo de: " . $email->nombre . "\n";
                $message .= "Correo: " . $email->email . "\n";
                $message .= "Compania: " . $email->company . "\n";
                $message .= "Enviado el: " . $email->fecha;

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");

                // Send
                mail('info@pxconsultores.com', 'Tiene un nuevo Mensaje', $message);

                $resultado = 4;

                header('Location: ' . $_SERVER['HTTP_REFERER'] . "?resultado=4");
            }
        }

        $router->render('paginas/contacto', [
            'resultado' => $resultado,
            'errores' => $errores,
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