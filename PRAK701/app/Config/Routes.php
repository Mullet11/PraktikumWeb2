<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'AuthController::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login/process', 'AuthController::process');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/process', 'AuthController::registerProcess');

$routes->group('buku', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/', 'BukuController::index');
    $routes->get('create', 'BukuController::create');
    $routes->post('store', 'BukuController::store');
    $routes->get('edit/(:num)', 'BukuController::edit/$1');
    $routes->post('update/(:num)', 'BukuController::update/$1');
    $routes->delete('delete/(:num)', 'BukuController::delete/$1');
});
