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
    '/articles', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'articlesMethod'
    ],
    'article-articles' 
);

$router->map(
    'GET',
    '/article/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'articleMethod'
    ],
    'article-article' 
);


$router->map(
    'GET',
    '/authors', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'authorsMethod'
    ],
    'author-authors' 
);

$router->map(
    'GET',
    '/author/[i:id]', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'authorMethod'
    ],
    'author-author' 
);

$router->map(
    'GET',
    '/categories', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'categoriesMethod'
    ],
    'category-categories' 
);

$router->map(
    'GET',
    '/category/[i:id]', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'categoryMethod'
    ],
    'category-category' 
);

$match = $router->match();
//dump($match);

/**
 * https://altorouter.com/usage/matching-requests.html
 */
if ($match !== false) {
    $target = $match['target'];
    //dump($target); // OK
    $controller = '\\App\\Controllers\\' . $target['controller'];
    //dump($controller); // OK
    $method = $target['method'];
    //dump($method); // OK
    $controller = new $controller;
    $params = $match['params'];
    //dump($params);
    $controller->$method($params);
} else {
    $controller = '\\App\\Controllers\\MainController';
    //dump($controller); // OK
    $controller = new $controller;
    $controller->errorMethod();
}
