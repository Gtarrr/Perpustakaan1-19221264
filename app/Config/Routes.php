<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/anggota', 'AnggotaController::show');
$routes->get('anggota/form', 'AnggotaController::form');
$routes->post('anggota/simpan', 'AnggotaController::create');
$routes->get('anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('anggota/hapus', 'AnggotaController::delete');


$routes->get('/pengguna', 'Pengguna::show');
$routes->get('pengguna/form', 'Pengguna::form');
$routes->post('pengguna/simpan', 'Pengguna::create');
$routes->get('pengguna/edit/(:num)', 'Pengguna::edit/$1');
$routes->post('pengguna/hapus', 'Pengguna::delete');

$routes->get('/koleksibuku', 'Tbkoleksibuku::show');
$routes->get('koleksibuku/form', 'Tbkoleksibuku::form');
$routes->post('koleksibuku/simpan', 'Tbkoleksibuku::create');
$routes->get('koleksibuku/edit/(:num)', 'Tbkoleksibuku::edit/$1');
$routes->post('koleksibuku/hapus', 'Tbkoleksibuku::delete');


$routes->get('/buku', 'TbBuku::show');
$routes->get('buku/form', 'TbBuku::form');
$routes->post('buku/simpan', 'TbBuku::create');
$routes->get('buku/edit/(:num)', 'TbBuku::edit/$1');
$routes->post('buku/hapus', 'TbBuku::delete');
