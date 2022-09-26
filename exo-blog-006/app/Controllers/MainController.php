<?php

namespace App\Controllers;

use App\Models\Article;

class MainController extends CoreController
{

    /**
     * Afficher page 404
     *
     * @return void
     */
    public function errorMethod()
    {
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }

    /**
     * Afficher page home
     *
     * @return void
     */
    public function list() 
    {
        $articles = Article::readLimit();
        //dump($articles); // Ok
        $this->show('home', [
            'title'     => 'Accueil',
            'articles'  =>  $articles
        ]);
    }
    
}