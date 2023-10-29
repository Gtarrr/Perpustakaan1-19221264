<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/penerbit','TbPenerbit::show');

$routes->get('/penerbit/form','TbPenerbit ::form');

$routes->get('/penerbit/edit','TbPenerbit ::edit');

$routes->post('/penerbit/simpan','Tbpenerbit::create');

$routes->get('/', 'Home::dashboard');

$routes->get('/peminjaman','TbPeminjaman::show');
$routes->get('peminjaman/form','TbPeminjaman::form');
$routes->post('peminjaman/simpan','TbPeminjaman::create');
$routes->get('peminjaman/edit/(:num)', 'TbPeminjaman::edit/$1'); 
$routes->post('peminjaman/hapus','TbPeminjaman::delete');

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


$routes->get('/', 'Home::dashboard');

$routes->get('/kategori','Tbkategori::show');
$routes->get('/kategori/form','Tbkategori::form');
$routes->get('/kategori/edit/(:num)','Tbkategori::edit/$1,');
$routes->post('/kategori/simpan','Tbkategori::create');
$routes->post('kategori/hapus','Tbkategori::delete');

$routes->get('/', 'Home::index');

$routes->get('/Anggota', 'AnggotaController::tampil');
$routes->get('/Anggota/form', 'AnggotaController::form');
$routes->post('/Anggota', 'AnggotaController::tambah');

