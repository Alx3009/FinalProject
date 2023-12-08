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
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Authentication::signin');
$routes->get('/homepage', 'FinProApp::index');

$routes->get('/phvalue', 'FinProApp::phSensor');
$routes->get('/ppmvalue', 'FinProApp::ppmSensor');
$routes->get('/tempvalue', 'FinProApp::tempSensor');

//routes buat chart
// $routes->get('/datechart', 'FinProApp:getDate');
$routes->get('/tempchart', 'FinProApp::tempChart');
$routes->get('/tdschart', 'FinProApp::tdsChart');
$routes->get('/phchart', 'FinProApp::phChart');

// $routes->get('/home', 'FinProApp::home');
$routes->get('/content/profile', 'Profile::index');
$routes->get('/content/article/hidroponic-article', 'Article::index');
$routes->get('/content/article/ph-article', 'Article::phArticle');
$routes->get('/content/article/ppm-article', 'Article::ppmArticle');
$routes->get('/content/article/temp-article', 'Article::tempArticle');

$routes->get('/content/updateprofile/(:segment)', 'Profile::updateProfile/$1');

$routes->get('/sendData/(:segment)/(:segment)/(:segment)', 'FinProApp::sendData/$1/$2/$3');
$routes->post('/profile/saveUpdate', 'Profile::saveUpdate');

// $routes->get('/authentication/sign_in', 'Authentication::index');
// $routes->get('/authentication/registration', 'Authentication::register');
// $routes->post('/authentication/create', 'Authentication::create');
// $routes->post('/authentication/check', 'Authentication::check');
// $routes->get('/profile/(:segment)', 'Profile::updateProfile/$1');

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {
    // $routes->get('/', 'FinProApp::index');
});

//authentication is the file inside the view
$routes->group('authentication', static function ($routes) {
    $routes->group('', ['filter' => 'AlreadyLoggedIn'], static function ($routes) {
        // $routes->get('signin', 'Authentication::login', ['as' => 'signin']);
        // $routes->get('register', 'Authentication::register', ['as' => 'register']);
        // $routes->post('create', 'Authentication::create', ['as' => 'create']);
        // $routes->post('check', 'Authentication::check', ['as' => 'check']);
    });
});

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
