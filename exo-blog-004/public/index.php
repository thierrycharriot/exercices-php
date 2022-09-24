<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

/**
 * https://www.php.net/manual/fr/reserved.variables.server.php
 * $_SERVER — Variables de serveur et d'exécution
 */
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));
//dump($router);

$router->map(
    'GET',
    '/', 
    [
        'controller'    => 'MainController',
        'method'        => 'homeMethod'
    ],
    'main-home' 
);

$router->map(
    'GET',
    '/article', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'articleMethod'
    ],
    'article-article' 
);

$router->map(
    'GET',
    '/author', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'authorMethod'
    ],
    'author-author' 
);

$match = $router->match();
//dump($match);

/**
 * https://altorouter.com/usage/matching-requests.html
 */
if ($match !== false) {
    //$params = $match['params'];
    //dump($params);
    $target = $match['target'];
    //dump($target); // OK
    $controller = '\\Controllers\\' . $target['controller'];
    //dump($controller); // OK
    $method = $target['method'];
    //dump($method); // OK
    $controller = new $controller;
    $controller->$method();
} else {
    $controller = '\\Controllers\\MainController';
    //dump($controller); // OK
    $controller = new $controller;
    $controller->errorMethod();
}
