<?php

include 'kint.phar';

require 'inc/classes/Article.php';
require 'inc/classes/Author.php';
require 'inc/classes/Category.php';

require __DIR__ . '/inc/templates/header.tpl.php';

$page = 'home';

if (isset($_GET['page']) && $_GET['page'] !== '') {
    $page = $_GET['page'];
}

include 'inc/data.php';

if ($page === 'home') {
    //var_dump($articles); die(); // OK
    //d($articles); die(); // OK
} elseif ($page === 'article') {
    //var_dump($articles); //die(); // OK
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    //var_dump($id); die(); // OK
    if ($id !== false && $id !== null) {
        $article = $articles[$id];
        //var_dump($article); die(); // OK
    } else {
        $page = 'home';
    }
} elseif ($page === 'author') {
    //var_dump($authors); die(); // OK
    /**
     * https://www.php.net/manual/fr/function.filter-input.php
     * filter_input — Récupère une variable externe et la filtre
     */
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    //var_dump($id); die(); // OK
    if ($id !== false && $id !== null) {
        $author = $authors[$id];
        //var_dump($author); die(); // OK
        $items = [];
        foreach ($articles as $id => $article) {
            //var_dump($article); //die(); // OK
            if($author->getPseudo() == $article->getAuthor()) {
                $items[$id] = $article;
            }
        }
    } else {
        $page = 'home';
    }
} elseif ($page === 'category') {
    //var_dump($categories); die(); // OK
    /**
     * https://www.php.net/manual/fr/function.filter-input.php
     * filter_input — Récupère une variable externe et la filtre
     */
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    //var_dump($id); die(); // OK
    if ($id !== false && $id !== null) {
        $category = $categories[$id];
        //var_dump($category); die(); // OK
        $items = [];
        foreach ($articles as $id => $article) {
            //var_dump($article); die(); // OK
            if($category->getName() == $article->getCategory()) {
                $items[$id] = $article;
            }
        }
    } else {
        $page = 'home';
    }
}

require __DIR__ . '/inc/templates/' . $page . '.tpl.php';

require __DIR__ . '/inc/templates/aside.tpl.php';

require __DIR__ . '/inc/templates/footer.tpl.php';
