<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/peminjaman','TbPeminjaman::show');
$routes->get('peminjaman/form','TbPeminjaman::form');
$routes->post('peminjaman/simpan','TbPeminjaman::create');
$routes->get('peminjaman/edit/(:num)', 'TbPeminjaman::edit/$1'); 
$routes->post('peminjaman/hapus','TbPeminjaman::delete');
 