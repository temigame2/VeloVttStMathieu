<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/velos', 'VeloController::index');
$routes->get('/velos/create', 'VeloController::create');
$routes->post('/velos/store', 'VeloController::store');
$routes->get('/velos/edit/(:num)', 'VeloController::edit/$1');
$routes->post('/velos/update/(:num)', 'VeloController::update/$1');
$routes->get('/velos/delete/(:num)', 'VeloController::delete/$1');
$routes->get('/velos/show/(:num)', 'VeloController::show/$1');

$routes->get('/pieces', 'PieceController::index');
$routes->get('/pieces/create', 'PieceController::create');
$routes->post('/pieces/store', 'PieceController::store');
$routes->get('/pieces/edit/(:num)', 'PieceController::edit/$1');
$routes->post('/pieces/update/(:num)', 'PieceController::update/$1');
$routes->get('/pieces/delete/(:num)', 'PieceController::delete/$1');
$routes->get('/pieces/show/(:num)', 'PieceController::show/$1');

$routes->get('/entretiens', 'EntretienController::index');
$routes->get('/entretiens/create', 'EntretienController::create');
$routes->post('/entretiens/store', 'EntretienController::store');
$routes->get('/entretiens/edit/(:num)', 'EntretienController::edit/$1');
$routes->post('/entretiens/update/(:num)', 'EntretienController::update/$1');
$routes->get('/entretiens/delete/(:num)', 'EntretienController::delete/$1');
$routes->get('/entretiens/show/(:num)', 'EntretienController::show/$1');

$routes->get('/locations', 'LocationController::index');
$routes->get('/locations/create', 'LocationController::create');
$routes->post('/locations/store', 'LocationController::store');
$routes->get('/locations/edit/(:num)', 'LocationController::edit/$1');
$routes->post('/locations/update/(:num)', 'LocationController::update/$1');
$routes->get('/locations/delete/(:num)', 'LocationController::delete/$1');
$routes->get('/locations/show/(:num)', 'LocationController::show/$1');
