<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/kategori','Tbkategori::show');
$routes->get('/kategori/form','Tbkategori::form');
$routes->get('/kategori/edit/(:num)','Tbkategori::edit/$1,');
$routes->post('/kategori/simpan','Tbkategori::create');
$routes->post('kategori/hapus','Tbkategori::delete');