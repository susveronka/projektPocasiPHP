<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('spolkoveZeme', 'Main::spolkoveZeme');
$routes->get('prehledStanic', 'Main::prehledStanic');