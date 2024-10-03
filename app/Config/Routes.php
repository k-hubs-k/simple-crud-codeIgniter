<?php
# Routes.php (Config/Routes.php)

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/filter', 'Home::search');

$routes->get('addForm', 'Home::addForm');
$routes->post('add', 'Home::add');

$routes->get('updateForm/(:num)', 'Home::UpdateForm/$1');
$routes->post('update/(:num)', 'Home::update/$1');

$routes->get('delete/(:num)', 'Home::delete/$1');
