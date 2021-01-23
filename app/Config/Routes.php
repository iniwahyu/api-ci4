<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * API - AUTH
 * --------------------------------------------------------------------
 */
$routes->get('/api/user', 'Api\Auth::user');
$routes->post('/api/signin', 'Api\Auth::signin');
$routes->post('/api/signup', 'Api\Auth::signup');
$routes->get('/api/profil/(:any)', 'Api\Auth::profil/$1');
$routes->post('/api/profil/update/(:any)', 'Api\Auth::profilUpdate/$1');
$routes->post('/api/profil/sandi/(:any)', 'Api\Auth::sandiUpdate/$1');
$routes->post('/api/profil/identitas/(:any)', 'Api\Auth::identitas/$1');

/**
 * --------------------------------------------------------------------
 * API - PELAPORAN
 * --------------------------------------------------------------------
 */
// $routes->post('/api/signin', 'Api\Auth::signin');
// $routes->post('/api/signup', 'Api\Auth::signup');

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
