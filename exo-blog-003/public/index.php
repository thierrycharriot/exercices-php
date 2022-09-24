<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../app/Controllers/MainController.php';

$router = new AltoRouter();

/**
 * https://www.php.net/manual/fr/reserved.variables.server.php
 * $_SERVER — Variables de serveur et d'exécution
 */
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));

$router->map('GET', '/', 'MainController::homeMethod');
$router->map('GET', '/about', 'MainController::aboutMethod');
$router->map('GET', '/author', 'MainController::authorMethod');

/**
 * /**
 * https://altorouter.com/usage/matching-requests.html
 */
$match = $router->match();

if ($match) {
    $action = $match['target'];
    $morceaux = explode("::", $action);

    $controleur = $morceaux[0];
    $methode = $morceaux[1];

    $controller = new $controleur(); 
    $controller->$methode(); 

} else {
    $controller = new MainController(); 
    $controller->errorMethod();
}
