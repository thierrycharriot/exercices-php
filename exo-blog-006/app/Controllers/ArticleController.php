<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;

class ArticleController extends CoreController
{

    /**
     * Afficher article write + récupérer list authors et categories
     *
     * @return void
     */
    public function write() 
    {
        $categories = Category::readAll();
        $authors = Author::readAll();

        $this->show('article/write', [
            'title'         => 'Write',
            'categories'    => $categories,
            'authors'       => $authors,
        ]);
    }

    /**
     * Créer article
     *
     * @return void
     */
    public function create() 
    {
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_author = filter_input(INPUT_POST, 'author');
        $id_category = filter_input(INPUT_POST, 'category');
        //dump($title, $content, $id_author, $id_category); // OK
        $article = new Article();

        if(!empty($title) & !empty($content)) {
            $article->setTitle($title);
            $article->setContent($content);
            $article->setId_author($id_author);
            $article->setId_category($id_category);

            if($article->create()) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/articles');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Afficher articles liste
     *
     * @return void
     */
    public function list() 
    {
        $articles = Article::readAll();
        //dump($articles); // Ok
        $this->show('article/articles', [
            'title'     => 'Articles',
            'articles'  =>  $articles
        ]);
    }

    /**
     * Afficher article
     *
     * @return void
     */
    public function read($id) 
    {
        $article = Article::read($id);
        //dump($article); // Ok
        $this->show('article/article', [
            'title'     => 'Article',
            'article'   =>  $article
        ]);
    }

    /**
     * Afficher article edit  + récupérer list authors et categories
     *
     * @return void
     */
    public function edit($id) 
    {
        $authors = Author::readAll();
        $article = Article::read($id);
        $categories = Category::readAll();

        $this->show('article/edit', [
            'title'         => 'Edit',
            'categories'    => $categories,
            'authors'       => $authors,
            'article'       => $article
        ]);
    }

    /**
     * Editer article
     *
     * @return void
     */
    public function update($id) 
    {
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id_author = filter_input(INPUT_POST, 'author');
        $id_category = filter_input(INPUT_POST, 'category');
        //dump($id, $title, $content, $id_author, $id_category); // OK
        $article = new Article();

        if(!empty($title) & !empty($content) & !empty($id_author) & !empty($id_category)) {
            $article->setTitle($title);
            $article->setContent($content);
            $article->setId_author($id_author);
            $article->setId_category($id_category);

            if($article->update($id)) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/articles');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Supprimer article
     *
     * @return void
     */
    public function delete($id) 
    {
        $article = Article::read($id);
        if(Article::delete($id)) {
            header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/articles');
            exit;
        } else {
            print "Erreur suppression BDD!";
        }  
    }

    /**
     * Afficher articles par author
     *
     * @param [type] $id
     * @return void
     */
    public function author($id)
    {
        $articles = Article::author($id);
        //dump($articles); // Ok
        $this->show('article/author', [
            'title'     => 'Article',
            'articles'   =>  $articles
        ]);        
    }

    /**
     * Afficher articles par category
     *
     * @param [type] $id
     * @return void
     */
    public function category($id)
    {
        $articles = Article::category($id);
        //dump($articles); // Ok
        $this->show('article/category', [
            'title'     => 'Article',
            'articles'   =>  $articles
        ]);        
    }

}