<?php 

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate( string $nombre ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function s($html) : string {
    $s = htmlspecialchars($html);

    return $s;
}

function validarORedireccionar(string $url) {
    // Validar que la URL sea un id valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: ${url}");
    }

    return $id;
} 

function mostrarNotificacion($resultado) {
    $mensaje = '';

    switch($resultado) { 
        case 1:
            $mensaje = 'Creado Correctamente';
        break;

        case 2:
            $mensaje = 'Actualizado Correctamente';
        break;

        case 3:
            $mensaje = 'Eliminado Correctamente';
        break;

        case 4:
            $mensaje = 'Mensaje Enviado Correctamente';
        break;

        default:
            $mensaje = false;
        break;
    }

    return $mensaje;
}