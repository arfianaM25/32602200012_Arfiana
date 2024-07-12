<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/profile', 'Profile::index');
$routes->get('/', 'Home::index');
$routes->get('/hallo', 'HelloWorld::halodunia');
$routes->get('/form', 'FormController::input');
$routes->get('/latihanview', 'HelloWorld::halodunia');
$routes->get('/layout', 'LayoutController::index');

$routes->get('/', 'Pages::profile');
$routes->get('/skills', 'Pages::skills');

$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->match(['get', 'post'], '/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');