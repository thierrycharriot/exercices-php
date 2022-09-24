<?php

namespace App\Controllers;

use App\Models\Author;

class AuthorController extends CoreController
{

    /**
     * Afficher authors list
     *
     * @return void
     */
    public function authorsMethod() 
    {
        $authors = new Author();
        $authorsList = $authors->findAll();
        $this->show('authors', [
            'title'     => 'Authors',
            'authors'   =>  $authorsList
        ]);
    }

    /**
     * Afficher author
     *
     * @return void
     */
    public function authorMethod($id) 
    {
        $author = new Author();
        $author = $author->find($id);
        //dump($author); // Ok
        $this->show('author', [
            'title'     => 'Author',
            'author'    =>  $author
        ]);
    }

}