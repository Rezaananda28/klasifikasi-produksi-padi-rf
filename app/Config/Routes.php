<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// LOGIN
$routes->get('/', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// PROFILE
$routes->get('/profile', 'Profile::index');
$routes->post('/profile/update-password', 'Profile::updatePassword');

// DASHBOARD
$routes->get('/dashboard', 'Dashboard::index');

// DATA PRODUKSI
$routes->get('data-produksi', 'DataProduksi::index');
$routes->post('/data-produksi/store', 'DataProduksi::store');
$routes->get('/data-produksi/edit/(:num)', 'DataProduksi::edit/$1');
$routes->post('/data-produksi/update/(:num)', 'DataProduksi::update/$1');
$routes->get('/data-produksi/delete/(:num)', 'DataProduksi::delete/$1');

// Hasil KLASIFIKASI
$routes->get('/hasil-klasifikasi', 'HasilKlasifikasi::index');

// Klasifikasi
$routes->get('klasifikasi', 'Klasifikasi::index');
$routes->match(['get', 'post'], 'klasifikasi/ambil-data', 'Klasifikasi::ambilData');
$routes->match(['get', 'post'], 'klasifikasi/preprocessing', 'Klasifikasi::preprocessing');
$routes->match(['get', 'post'], 'klasifikasi/labeling', 'Klasifikasi::labeling');
$routes->match(['get', 'post'], 'klasifikasi/encoding', 'Klasifikasi::encoding');
$routes->match(['get', 'post'], 'klasifikasi/load-model', 'Klasifikasi::loadModel');
$routes->match(['get', 'post'], 'klasifikasi/prediksi', 'Klasifikasi::prediksi');
$routes->match(['get', 'post'], 'klasifikasi/simpan-hasil', 'Klasifikasi::simpanHasil');
$routes->get('klasifikasi/evaluasi', 'Klasifikasi::evaluasi');

// informasi
$routes->get('panduan', 'Panduan::index');
$routes->get('tentang', 'Tentang::index');
