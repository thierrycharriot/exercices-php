<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

/**
 * https://www.php.net/manual/fr/reserved.variables.server.php
 * $_SERVER — Variables de serveur et d'exécution
 */
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));
//dump($router);

// ARTICLES

$router->map(
    'GET',
    '/', 
    [
        'controller'    => 'MainController',
        'method'        => 'list'
    ],
    'main-list' 
);

$router->map(
    'GET',
    '/article/create', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'write'
    ],
    'article-write' 
);

$router->map(
    'POST',
    '/article/create', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'create'
    ],
    'article-create' 
);

$router->map(
    'GET',
    '/articles', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'list'
    ],
    'article-list' 
);

$router->map(
    'GET',
    '/article/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'read'
    ],
    'article-read' 
);

$router->map(
    'GET',
    '/article/update/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'edit'
    ],
    'article-load' 
);

$router->map(
    'POST',
    '/article/update/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'update'
    ],
    'article-update' 
);

$router->map(
    'GET',
    '/article/delete/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'delete'
    ],
    'article-delete' 
);

$router->map(
    'GET',
    '/article/author/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'author'
    ],
    'article-author' 
);

$router->map(
    'GET',
    '/article/category/[i:id]', 
    [
        'controller'    => 'ArticleController',
        'method'        => 'category'
    ],
    'article-category' 
);

// AUTHORS

$router->map(
    'GET',
    '/author/create', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'write'
    ],
    'author-write' 
);

$router->map(
    'POST',
    '/author/create', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'create'
    ],
    'author-create' 
);

$router->map(
    'GET',
    '/authors', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'list'
    ],
    'author-list' 
);

$router->map(
    'GET',
    '/author/[i:id]', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'read'
    ],
    'author-read' 
);

$router->map(
    'GET',
    '/author/update/[i:id]', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'edit'
    ],
    'author-load' 
);

$router->map(
    'POST',
    '/author/update/[i:id]', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'update'
    ],
    'author-update' 
);

$router->map(
    'GET',
    '/author/delete/[i:id]', 
    [
        'controller'    => 'AuthorController',
        'method'        => 'delete'
    ],
    'author-delete' 
);

// CATEGORIES

$router->map(
    'GET',
    '/category/create', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'write'
    ],
    'category-write' 
);

$router->map(
    'POST',
    '/category/create', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'create'
    ],
    'category-create' 
);

$router->map(
    'GET',
    '/categories', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'list'
    ],
    'category-list' 
);

$router->map(
    'GET',
    '/category/[i:id]', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'read'
    ],
    'category-read' 
);

$router->map(
    'GET',
    '/category/update/[i:id]', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'edit'
    ],
    'category-load' 
);

$router->map(
    'POST',
    '/category/update/[i:id]', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'update'
    ],
    'category-update' 
);

$router->map(
    'GET',
    '/category/delete/[i:id]', 
    [
        'controller'    => 'CategoryController',
        'method'        => 'delete'
    ],
    'category-delete' 
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
