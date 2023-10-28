<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/penerbit','TbPenerbit::show');

$routes->get('/penerbit/form','TbPenerbit ::form');

$routes->get('/penerbit/edit','TbPenerbit ::edit');

$routes->post('/penerbit/simpan','Tbpenerbit::create');

