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
$routes->get('/anggota', 'AnggotaController::tampil');
