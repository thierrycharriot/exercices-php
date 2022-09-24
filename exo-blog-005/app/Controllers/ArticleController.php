<?php

namespace App\Controllers;

use App\Models\Article;

class ArticleController extends CoreController
{

    /**
     * Afficher articles liste
     *
     * @return void
     */
    public function articlesMethod() 
    {
        $articles = new Article();
        $articlesList = $articles->findAll();
        $this->show('articles', [
            'title'     => 'Articles',
            'articles'  =>  $articlesList
        ]);
    }

    /**
     * Afficher article
     *
     * @return void
     */
    public function articleMethod($id) 
    {
        $article = new Article();
        $article = $article->find($id);
        //dump($article); // Ok
        $this->show('article', [
            'title'     => 'Article',
            'article'   =>  $article
        ]);
    }

}