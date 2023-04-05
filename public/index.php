<?php

require_once __DIR__ . '../../includes/app.php';

use Controllers\AdminController;
use Controllers\CodigoController;
use Controllers\LoginController;
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

$router->get('/proyectos/crear', [AdminController::class, 'crear']);
$router->post('/proyecto/crear', [AdminController::class, 'crear']);

$router->get('/producto/crear', [AdminController::class, 'crear']);
$router->post('/producto/crear', [AdminController::class, 'crear']);

$router->get('/cliente/crear', [AdminController::class, 'crear']);
$router->post('/cliente/crear', [AdminController::class, 'crear']);

$router->get('/codigo/crear', [CodigoController::class, 'crear']);
$router->post('/codigo/crear', [CodigoController::class, 'crear']);
$router->get('/codigo/actualizar', [CodigoController::class, 'actualizar']);
$router->post('/codigo/actualizar', [CodigoController::class, 'actualizar']);

/** SESION **/
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/nuevo', [LoginController::class, 'nuevo']);
$router->post('/nuevo', [LoginController::class, 'nuevo']);
$router->post('/nuevo', [LoginController::class, 'nuevo']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();