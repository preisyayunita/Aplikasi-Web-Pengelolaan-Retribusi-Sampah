<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set $autoRoutesImproved to true in app/Config/Feature.php and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('login/index', 'Login::index');
$routes->get('registrasi/index', 'Registrasi::register');
$routes->post('/registrasi/registerProcess', 'Registrasi::registerProcess');
$routes->get('/registrasi/success', 'Registrasi::success');
// Route untuk halaman lupa password
$routes->get('login/lupa_password', 'Login::lupaPassword');

// Route untuk proses lupa password (POST)
$routes->post('login/processForgotPassword/(:segment)', 'Login::processForgotPassword/$1');

// Route untuk halaman reset password dengan token
$routes->get('login/reset_password/(:segment)', 'Login::resetPassword/$1');

// Route untuk proses reset password (POST)
$routes->post('login/reset_password', 'Login::processResetPassword');


// $routes->addRedirect('/', 'admin/home_admin');

$routes->get('admin', 'Admin::index', ['filter' => 'login:admin']);
$routes->get('admin/add_kategori', 'Admin::create', ['filter' => 'login:admin']);
$routes->post('admin/store', 'Admin::store', ['filter' => 'login:admin']);
$routes->get('admin/edit_kategori/(:num)', 'Admin::edit/$1', ['filter' => 'login:admin']);
$routes->put('admin/update(:any)', 'Admin::update/$1', ['filter' => 'login:admin']);
$routes->delete('admin/destroy(:segment)', 'Admin::destroy/$1', ['filter' => 'login:admin']);
$routes->get('admin/detail_validasi/(:num)', 'Admin::detail_member/$1', ['filter' => 'login:admin']);
$routes->get('admin/sms_gateway', 'Admin::smsGateway', ['filter' => 'login:admin']);
$routes->post('admin/kirimSms', 'Admin::kirimSms', ['filter' => 'login:admin']);
$routes->get('admin/destroy_sms(:segment)', 'Admin::destroy_sms/$1', ['filter' => 'login:admin']);
$routes->get('admin/edit_akun_petugas/(:num)', 'Admin::edit_petugas/$1', ['filter' => 'login:admin']);
$routes->put('admin/ubah_petugas(:any)', 'Admin::ubah_petugas/$1', ['filter' => 'login:admin']);
$routes->delete('admin/destroy_petugas/(:num)', 'Admin::destroy_petugas/$1', ['filter' => 'login:admin']);



//pelanggan
// $routes->get('admin/pelanggan', 'Admin::pelanggan', ['filter' => 'login:admin']);
// $routes->get('admin/add_pelanggan', 'Admin::create_pelanggan', ['filter' => 'login:admin']);
// $routes->post('admin/store_pelanggan', 'Admin::store_pelanggan', ['filter' => 'login:admin']);
// $routes->get('admin/edit_pelanggan/(:num)', 'Admin::edit_pelanggan/$1', ['filter' => 'login:admin']);
// $routes->put('admin/ubahpelanggan(:any)', 'Admin::ubahpelanggan/$1', ['filter' => 'login:admin']);
// $routes->delete('admin/destroy_pelanggan(:segment)', 'Admin::destroy_pelanggan/$1', ['filter' => 'login:admin']);

// Validasi Berkas
$routes->get('admin', 'Admin::validasi_berkas', ['filter' => 'login:admin']);
// $routes->get('admin/destroy_validasi/(:num)', 'Admin::destroy_validasi/$1', ['filter' => 'login:admin']);
// $routes->delete('admin/destroy_validasi(:segment)', 'Admin::destroy_validasi/$1', ['filter' => 'login:admin']);

// 
$routes->get('admin/akun_petugas', 'Admin::akunPetugas', ['filter' => 'login:admin']);
$routes->get('admin/add_akun_petugas', 'Admin::tambah_petugas', ['filter' => 'login:admin']);   // Menampilkan form tambah akun petugas
$routes->post('admin/save_petugas', 'Admin::save_petugas', ['filter' => 'login:admin']);      // Proses penyimpanan data petugas

$routes->get('admin/akun_pelanggan', 'Admin::akunPelanggan', ['filter' => 'login:admin']);

//Transaksi
$routes->get('admin/transaksi', 'Admin::transaksi', ['filter' => 'login:admin']);
$routes->get('export-excel', 'Admin::export_excel', ['filter' => 'login:admin']);

// Routes Pelanggan
$routes->get('pelanggan/tambah_member', 'Pelanggan::tambah_member', ['filter' => 'login:pelanggan']);
$routes->get('pelanggan', 'Pelanggan::history_pelanggan', ['filter' => 'login:pelanggan']);
$routes->get('pelanggan', 'Pelanggan::waiting_room', ['filter' => 'login:pelanggan']);
$routes->post('pelanggan/getDesaByKecamatan', 'Pelanggan::getDesaByKecamatan', ['filter' => 'login:pelanggan']);
$routes->post('pelanggan/getTarifByKategori', 'Pelanggan::getTarifByKategori', ['filter' => 'login:pelanggan']);
$routes->resource('pelanggan/tambah_member', ['controller' => 'Api\Pelanggan'], ['filter' => 'login:pelanggan']);


// Routes Petugas
$routes->get('petugas/bukti_bayar', 'Petugas::bukti_bayar', ['filter' => 'login:petugas']);
$routes->get('petugas/addBukti', 'Petugas::addBukti', ['filter' => 'login:petugas']);
$routes->put('petugas/prosesaddBukti(:any)', 'Petugas::prosesaddBukti/$1', ['filter' => 'login:petugas']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
