<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// El slash "/" representa el HOME de tu aplicacion.

//¿Como funciona una ruta?
//$routes -> verbo('/ruta/', 'Controller::metodo)
$routes->get('/', 'Home::index');
$routes->get('/creativo', 'Carrera::showDesign');
$routes->get('/programador', 'Carrera::showIngenieria');
