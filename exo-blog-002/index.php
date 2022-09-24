<?php

require __DIR__ . '/Controllers/MainController.php';


// .htaccess index.php?uri=/$1
if (isset($_GET['uri'])) {
    $page = $_GET['uri'];
} else {
    $page = '/';
}
//var_dump($page); //die();

$routes = [
    '/'         => 'homeMethod',
    '/article'  => 'articleMethod',
    '/author'   => 'authorMethod',
    '/category' => 'categoryMethod'
];

if (isset($routes[$page])) {
    //var_dump($routes[$page]); //die();
    $controller = new MainController();
    $methode = $routes[$page];
    $controller->$methode();
} else {
    $controller = new MainController();
    $controller->err404();
}