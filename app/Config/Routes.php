<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/estudiante', 'Estudiante::index');
$routes->get('/estudiante/insertar/(:any)/(:any)', 'Estudiante::insertar/$1/$2');
$routes->get('/estudiante/eliminar/(:num)', 'Estudiante::eliminar/$1');
$routes->get('/estudiante/actualizar/(:num)/(:any)/(:any)', 'Estudiante::actualizar/$1/$2/$3');
