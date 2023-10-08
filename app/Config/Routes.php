<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Anggota', 'AnggotaController::tampil');
$routes->get('/Anggota/form', 'AnggotaController::form');
$routes->post('/Anggota', 'AnggotaController::tambah');
