<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('anggota', 'AnggotaController::show');
$routes->get('anggota/form', 'AnggotaController::form');
$routes->post('anggota/simpan', 'AnggotaController::create');
$routes->get('anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('anggota/hapus', 'AnggotaController::delete');
$routes->get('/anggota/foto/(:num).png', 'AnggotaController::foto/$1');


$routes->get('pengguna', 'Penggunacontroller::show');
$routes->get('pengguna/form', 'Penggunacontroller::form');
$routes->post('pengguna/simpan', 'Penggunacontroller::create');
$routes->get('pengguna/edit/(:num)', 'Penggunacontroller::edit/$1');
$routes->post('pengguna/hapus', 'Penggunacontroller::delete');

$routes->get('koleksibuku', 'TbKoleksibukuController::show');
$routes->get('koleksibuku/form', 'TbKoleksibukuController::form');
$routes->post('koleksibuku/simpan', 'TbKoleksibukuController::create');
$routes->get('koleksibuku/edit/(:num)', 'TbKoleksibukuController::edit/$1');
$routes->post('koleksibuku/hapus', 'TbKoleksibukuController::delete');


$routes->get('buku', 'TbBukuController::show');
$routes->get('buku/form', 'TbBukuController::form');
$routes->post('buku/simpan', 'TbBukuController::create');
$routes->get('buku/edit/(:num)', 'TbBukuController::edit/$1');
$routes->post('buku/hapus', 'TbBukuController::delete');

$routes->get('peminjaman', 'TbBukuController::show');
$routes->get('peminjaman/form', 'TbBukuController::form');
$routes->post('peminjaman/simpan', 'TbBukuController::create');

$routes->get('/login', 'LoginController::form');
$routes->post('/login', 'LoginController::ceklogin');
$routes->get('/logout', 'LoginController::logout');
