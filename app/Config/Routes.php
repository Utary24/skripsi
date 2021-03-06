<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::index');


// ROUTING DATA document masuk
$routes->get('documentmasuk/pdf', 'DocumentMasukController::pdf');
$routes->get('documentmasuk/excel', 'DocumentMasukController::excel');
$routes->get('documentmasuk', 'DocumentMasukController::index');
$routes->get('documentmasuk/create', 'DocumentMasukController::create');
$routes->post('documentmasuk/store', 'DocumentMasukController::store');
$routes->get('documentmasuk/edit/(:alphanum)', 'DocumentMasukController::edit/$1');
$routes->post('documentmasuk/update/(:num)', 'DocumentMasukController::update/$1');
$routes->get('documentmasuk/delete/(:alphanum)', 'DocumentMasukController::delete/$1');


// ROUTING DATA document keluar
$routes->get('documentkeluar/pdf', 'DocumentKeluarController::pdf');
$routes->get('documentkeluar/excel', 'DocumentKeluarController::excel');
$routes->get('documentkeluar', 'DocumentKeluarController::index');
$routes->get('documentkeluar/create', 'DocumentKeluarController::create');
$routes->post('documentkeluar/store', 'DocumentKeluarController::store');
$routes->get('documentkeluar/edit/(:alphanum)', 'DocumentKeluarController::edit/$1');
$routes->post('documentkeluar/update/(:num)', 'DocumentKeluarController::update/$1');
$routes->get('documentkeluar/delete/(:alphanum)', 'DocumentKeluarController::delete/$1');


// ROUTING DATA karyawan
$routes->get('karyawan/pdf', 'KaryawanController::pdf');
$routes->get('karyawan/excel', 'KaryawanController::excel');
$routes->get('karyawan', 'KaryawanController::index');
$routes->get('karyawan/create', 'KaryawanController::create');
$routes->post('karyawan/store', 'KaryawanController::store');
$routes->get('karyawan/edit/(:alphanum)', 'KaryawanController::edit/$1');
$routes->post('karyawan/update/(:num)', 'KaryawanController::update/$1');
$routes->get('karyawan/delete/(:alphanum)', 'KaryawanController::delete/$1');



// ROUTING DATA nota masuk
$routes->get('notamasuk/pdf', 'NotaMasukController::pdf');
$routes->get('notamasuk/excel', 'NotaMasukController::excel');
$routes->get('notamasuk', 'NotaMasukController::index');
$routes->get('notamasuk/create', 'NotaMasukController::create');
$routes->post('notamasuk/store', 'NotaMasukController::store');
$routes->get('notamasuk/edit/(:alphanum)', 'NotaMasukController::edit/$1');
$routes->post('notamasuk/update/(:num)', 'NotaMasukController::update/$1');
$routes->get('notamasuk/delete/(:alphanum)', 'NotaMasukController::delete/$1');


// ROUTING DATA  nota keluar
$routes->get('notakeluar/pdf', 'NotaKeluarController::pdf');
$routes->get('notakeluar/excel', 'NotaKeluarController::excel');
$routes->get('notakeluar', 'NotaKeluarController::index');
$routes->get('notakeluar/create', 'NotaKeluarController::create');
$routes->post('notakeluar/store', 'NotaKeluarController::store');
$routes->get('notakeluar/edit/(:alphanum)', 'NotaKeluarController::edit/$1');
$routes->post('notakeluar/update/(:num)', 'NotaKeluarController::update/$1');
$routes->get('notakeluar/delete/(:alphanum)', 'NotaKeluarController::delete/$1');


// ROUTING DATA  users
$routes->get('users/pdf', 'UsersController::pdf');
$routes->get('users/excel', 'UsersController::excel');
$routes->get('users', 'UsersController::index');
$routes->get('users/create', 'UsersController::create');
$routes->post('users/store', 'UsersController::store');
$routes->get('users/edit/(:alphanum)', 'UsersController::edit/$1');
$routes->post('users/update/(:num)', 'UsersController::update/$1');
$routes->get('users/delete/(:alphanum)', 'UsersController::delete/$1');


// ROUTING DATA Atk
$routes->get('atk/pdf', 'AtkController::pdf');
$routes->get('atk/excel', 'AtkController::excel');
$routes->get('atk', 'AtkController::index');
$routes->get('atk/create', 'AtkController::create');
$routes->post('atk/store', 'AtkController::store');
$routes->get('atk/edit/(:alphanum)', 'AtkController::edit/$1');
$routes->post('atk/update/(:num)', 'AtkController::update/$1');
$routes->get('atk/delete/(:alphanum)', 'AtkController::delete/$1');



// ROUTING DATA Asset
$routes->get('asset/pdf', 'AssetController::pdf');
$routes->get('asset/excel', 'AssetController::excel');
$routes->get ('asset', 'AssetController::index');
$routes->get ('asset/create', 'AssetController::create');
$routes->post('asset/store', 'AssetController::store');
$routes->get ('asset/edit/(:alphanum)', 'AssetController::edit/$1');
$routes->post('asset/update/(:num)', 'AssetController::update/$1');
$routes->get ('asset/delete/(:alphanum)', 'AssetController::delete/$1');



// ROUTING DATA  Audio Visual
$routes->get('audiovisual/pdf', 'AudioVisualController::pdf');
$routes->get('audiovisual/excel', 'AudioVisualController::excel');
$routes->get('audiovisual', 'AudioVisualController::index');
$routes->get('audiovisual/create', 'AudioVisualController::create');
$routes->post('audiovisual/store', 'AudioVisualController::store');
$routes->get('audiovisual/edit/(:alphanum)', 'AudioVisualController::edit/$1');
$routes->post('audiovisual/update/(:num)', 'AudioVisualController::update/$1');
$routes->get('audiovisual/delete/(:alphanum)', 'AudioVisualController::delete/$1');


// ROUTING DATA  Elektronik
$routes->get('elektronik/pdf', 'ElektronikController::pdf');
$routes->get('elektronik/excel', 'ElektronikController::excel');
$routes->get('elektronik', 'ElektronikController::index');
$routes->get('elektronik/create', 'ElektronikController::create');
$routes->post('elektronik/store', 'ElektronikController::store');
$routes->get('elektronik/edit/(:alphanum)', 'ElektronikController::edit/$1');
$routes->post('elektronik/update/(:num)', 'ElektronikController::update/$1');
$routes->get('elektronik/delete/(:alphanum)', 'ElektronikController::delete/$1');



// ROUTING DATA  furniture
$routes->get('furniture/pdf', 'FurnitureController::pdf');
$routes->get('furniture/excel', 'FurnitureController::excel');
$routes->get('furniture', 'FurnitureController::index');
$routes->get('furniture/create', 'FurnitureController::create');
$routes->post('furniture/store', 'FurnitureController::store');
$routes->get('furniture/edit/(:alphanum)', 'FurnitureController::edit/$1');
$routes->post('furniture/update/(:num)', 'FurnitureController::update/$1');
$routes->get('furniture/delete/(:alphanum)', 'FurnitureController::delete/$1');



// ROUTING DATA  kendaraan
$routes->get('kendaraan/pdf', 'KendaraanController::pdf');
$routes->get('kendaraan/excel', 'KendaraanController::excel');
$routes->get('kendaraan', 'KendaraanController::index');
$routes->get('kendaraan/create', 'KendaraanController::create');
$routes->post('kendaraan/store', 'KendaraanController::store');
$routes->get('kendaraan/edit/(:alphanum)', 'KendaraanController::edit/$1');
$routes->post('kendaraan/update/(:num)', 'KendaraanController::update/$1');
$routes->get('kendaraan/delete/(:alphanum)', 'KendaraanController::delete/$1');



// ROUTING DATA  multimedia
$routes->get('multimedia/pdf', 'MultimediaController::pdf');
$routes->get('multimedia/excel', 'MultimediaController::excel');
$routes->get('multimedia', 'MultimediaController::index');
$routes->get('multimedia/create', 'MultimediaController::create');
$routes->post('multimedia/store', 'MultimediaController::store');
$routes->get('multimedia/edit/(:alphanum)', 'MultimediaController::edit/$1');
$routes->post('multimedia/update/(:num)', 'MultimediaController::update/$1');
$routes->get('multimedia/delete/(:alphanum)', 'MultimediaController::delete/$1');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
