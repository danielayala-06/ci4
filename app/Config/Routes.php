<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// El slash "/" representa el HOME de tu aplicacion.

//¿Como funciona una ruta?
//$routes -> verbo('/ruta/', 'Controller::metodo)
$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index');

$routes->get('/creativo', 'Carrera::showDesign');
$routes->get('/programador', 'Carrera::showIngenieria');

//Nuevas rutas para navegar desde DASHBOARD
$routes->get('/clientes', 'Cliente::index');
$routes->get('/proveedores', 'Proveedor::index');
$routes->get('/productos', 'Producto::index');


//Rutas de navegacion para los reportes
$routes->get('/reportes/diario', 'Reportes::diario');
$routes->get('/diario', 'Reportes::diario');
$routes->get('/semanal', 'Reportes::semanal');
$routes->get('/mensual', 'Reportes::mensual');
$routes->get('/otro', 'Reportes::otro');
