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

/**
 * Esta seccion es para las rutas de CLIENTES
 */
$routes->get('/clientes', 'Cliente::index');//Muestra la tabla con datos
$routes->get('/clientes/registrar', 'Cliente::create');//Muestra solo el envio del formulario
$routes->post('/clientes/guardar', 'Cliente::registrarCliente');//Guarda los datos del formulario a la tabla
$routes->get('/clientes/eliminar/(:num)', 'Cliente::eliminar/$1');//Elimina un registro de la tabla
$routes->get('/clientes/buscar/(:num)', 'Cliente::buscar/$1');// Antes de acutalizar tenemos que buscar
$routes->post('/clientes/actualizar/(:num)', 'Cliente::actualizarCliente/$1');// Actualiza los datos del formulario

/**
 * RUTAS PARA PROVEEDORES
*/
//$routes->get('/proveedores', 'Proveedor::index');
$routes->get('/proveedores', 'Proveedor::indexAsync');
$routes->post('/proveedores/registrar', 'Proveedor::crearAsync');
$routes->get('/proveedores/listar', 'Proveedor::getProveedores');//Ruta para obtener los proveedores en formato JSON (Async)
//$routes->get('/proveedores/registrar', 'Proveedor::create');//Muestra solo el envio del formulario
$routes->post('/proveedores/guardar', 'Proveedor::registrarProveedor');//Guarda los datos del formulario a la tabla
$routes->get('/proveedores/eliminar/(:num)', 'Proveedor::eliminar/$1');//Elimina un registro de la tabla
$routes->get('/proveedores/buscar/(:num)', 'Proveedor::buscar/$1');
$routes->post('/proveedores/actualizar/(:num)', 'Proveedor::actualizarProveedor/$1');// Actualiza los datos del formulario


/**
 * RUTAS PARA LOS PRODUCTOS
*/
$routes->get('/productos', 'Producto::index');
$routes->get('/productos/registrar', 'Producto::registrar');
$routes->post('/productos/guardar', 'Producto::registrarProducto');
$routes->get('/productos/eliminar/(:num)', 'Producto::eliminar/$1');
$routes->get('/productos/buscar/(:num)', 'Producto::buscar/$1');
$routes->post('/productos/actualizar/(:num)', 'Producto::actualizarProducto/$1');
/**
 * RUTAS PARA LOS VEHICULOS
 */
$routes->get('/vehiculos', 'Vehiculos::index');

// BD> Modelo> Controlador> Ruta> JS> HTML
$routes->get('/vehiculos/listar','Vehiculos::getVehiculos');
$routes->post('/vehiculos/registrar','Vehiculos::registrarVehiculo');




/**
 * RUTAS PARA MARCAS
 */
$routes->get('/marcas/listar','Marca::getMarcas');

//Rutas de navegacion para los reportes
$routes->get('/reportes/diario', 'Reportes::diario');
$routes->get('/diario', 'Reportes::diario');
$routes->get('/semanal', 'Reportes::semanal');
$routes->get('/mensual', 'Reportes::mensual');
$routes->get('/otro', 'Reportes::otro');
