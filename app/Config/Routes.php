<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/penerbit','Tbpenerbit::show');

$routes->get('/penerbit/form','Tbpenerbit ::form');

$routes->post('/penerbit/simpan','Tbpenerbit::create');
