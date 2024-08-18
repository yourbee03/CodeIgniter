<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProyekController::index');
$routes->get('/proyek', 'ProyekController::index');
$routes->get('/proyek/create', 'ProyekController::create');
$routes->post('/proyek/store', 'ProyekController::store');
$routes->get('/proyek/edit/(:num)', 'ProyekController::edit/$1');
$routes->post('/proyek/update/(:num)', 'ProyekController::update/$1');
$routes->get('/proyek/delete/(:num)', 'ProyekController::delete/$1');