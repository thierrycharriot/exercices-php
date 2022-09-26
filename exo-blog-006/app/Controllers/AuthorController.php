<?php

namespace App\Controllers;

use App\Models\Author;

class AuthorController extends CoreController
{

    /**
     * Afficher author write 
     *
     * @return void
     */
    public function write()
    {
        $this->show('author/write', [
            'title'     => 'Write'
        ]);        
    }

    /**
     * Créer author
     *
     * @return void
     */
    public function create() 
    {
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $pseudo = filter_input(INPUT_POST, 'pseudo');
        $mail = filter_input(INPUT_POST, 'mail');
        //dump($firstname, $lastname, $pseudo, $mail); // OK
        $author = new Author();

        if(!empty($firstname) & !empty($lastname) & !empty($pseudo) & !empty($mail)) {
            $author->setFirstname($firstname);
            $author->setLastname($lastname);
            $author->setPseudo($pseudo);
            $author->setMail($mail);

            if($author->create()) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/authors');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Afficher authors list
     *
     * @return void
     */
    public function list() 
    {
        $authors = new Author();
        $authorsList = $authors->readAll();
        $this->show('author/authors', [
            'title'     => 'Authors',
            'authors'   =>  $authorsList
        ]);
    }

    /**
     * Afficher author
     *
     * @return void
     */
    public function read($id) 
    {
        $author = new Author();
        $author = $author->read($id);
        //dump($author); // Ok
        $this->show('author/author', [
            'title'     => 'Author',
            'author'    =>  $author
        ]);
    }

    /**
     * Afficher author edit
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $author = Author::read($id);

        $this->show('author/edit', [
            'title'     => 'Edit',
            'author'    => $author,
        ]);
    }

    /**
     * Editer author
     *
     * @return void
     */
    public function update($id) 
    {
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $pseudo = filter_input(INPUT_POST, 'pseudo');
        $mail = filter_input(INPUT_POST, 'mail');
        //dump($id, $firstname, $lastname, $pseudo, $mail); // OK
        $author = new Author();

        if(!empty($firstname) & !empty($lastname) & !empty($pseudo) & !empty($mail)) {
            $author->setFirstname($firstname);
            $author->setLastname($lastname);
            $author->setPseudo($pseudo);
            $author->setMail($mail);

            if($author->update($id)) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/authors');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Supprimer author
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        if(Author::delete($id)) {
            header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/authors');
            exit;
        } else {
            print "Erreur suppression BDD!";
        }          
    }

}