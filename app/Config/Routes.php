<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Example'); // Définir votre propre contrôleur par défaut
$routes->setDefaultMethod('index'); // Définir votre propre méthode par défaut

// Route par défaut
$routes->get('/', 'controllers_accueil::index');

// Autres routes...

$routes->get('/reservation.php', 'controllers_reservation::index');

$routes->get('/activiter.php', 'controllers_activiter::index');

$routes->get('/accueil.php', 'controllers_accueil::index');

$routes->get('/aide.php', 'controllers_aide::index');

$routes->get('/compte.php', 'controllers_compte::index');

// Ce qui concerne l'inscription et la connexion (le controller fait les deux)
$routes->get('/connexion', 'Controllers_Inscription::index');
$routes->post('inscription.php', 'Controllers_Inscription::inscription');
$routes->get('/connexion', 'Controllers_Inscription::index');
$routes->post('login.php', 'Controllers_Inscription::login');

// Pour tester la bd
$routes->get('testdbcon', 'TestDbController::index'); 

// Images
$routes->add('static/images/(:any)', 'StaticFiles::serveImages/$1');
// à en faire une pour css exterieur