<?php

require_once __DIR__ . '../../includes/app.php';

use Controllers\AdminController;
use Controllers\CodigoController;
use Controllers\LoginController;
use Controllers\NombresController;
use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

/** ZONA PUBLICA **/
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

/** ZONA PRiVADA **/
$router->get('/admin', [AdminController::class, 'admin']);
$router->post('/admin/export', [AdminController::class, 'export']);

$router->get('/proyecto/crear', [NombresController::class, 'crearProyecto']);
$router->post('/proyecto/crear', [NombresController::class, 'crearProyecto']);

$router->get('/producto/crear', [NombresController::class, 'crearProducto']);
$router->post('/producto/crear', [NombresController::class, 'crearProducto']);

$router->get('/cliente/crear', [NombresController::class, 'crearCliente']);
$router->post('/cliente/crear', [NombresController::class, 'crearCliente']);

$router->get('/codigo/crear', [CodigoController::class, 'crear']);
$router->post('/codigo/crear', [CodigoController::class, 'crear']);
$router->get('/codigo/actualizar', [CodigoController::class, 'actualizar']);
$router->post('/codigo/actualizar', [CodigoController::class, 'actualizar']);

/** INFORMACION **/
$router->get('/informacion', [PaginasController::class, 'informacion']);

/** SESION **/
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/nuevo', [LoginController::class, 'nuevo']);
$router->post('/nuevo', [LoginController::class, 'nuevo']);
$router->post('/nuevo', [LoginController::class, 'nuevo']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();