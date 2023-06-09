<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('fixityHome');
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
//$routes->get('/', 'Home::index';
$routes->get('/home','fixityHome');
$routes->get('/career','fixityHome::career');
$routes->get('/about_us','fixityHome::about');
$routes->get('/partner','fixityHome::partners');
$routes->get('/resource','fixityHome::resource');
$routes->get('/contact_us','fixityHome::contact');

$routes->get('/services','Services::service_page');
$routes->get('/staffing','Services::staffing');
$routes->get('/htd','Services::htd');
$routes->get('/IT_Solution','Services::solution');
$routes->get('/product_development','Services::product_development');

$routes->get('/product','Product::product');
$routes->get('/quilkdeals','Product::deal');
$routes->get('/goodgovernance','Product::good_governance');
$routes->get('/legacy','Product::legacy');
$routes->get('/pts','Product::product_1');
$routes->get('/task_master','Product::product_2');
$routes->get('/vts','Product::product_3');
$routes->get('/AMTS','Product::asset_management');
$routes->get('/password_protector','Product::password_protector');

$routes->get('/resource','Resources::resource');
$routes->get('/awards','Resources::awards');
$routes->get('/blog','Resources::blogs');
//$routes->get('/Blog_Details','Resources::blog_Detail');
$routes->get('/whitepaper','Resources::whitepapers');
$routes->get('/privacy_policy','fixityHome::privacyPolicy');
$routes->get('/getFooter','fixityHome::getFooter');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
