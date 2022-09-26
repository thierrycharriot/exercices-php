<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends CoreController
{

    /**
     * Afficher category write 
     *
     * @return void
     */
    public function write()
    {
        $this->show('category/write', [
            'title'     => 'Write'
        ]);        
    }

    /**
     * Créer category
     *
     * @return void
     */
    public function create() 
    {
        /**
         * https://www.php.net/manual/fr/function.filter-input.php
         * filter_input — Récupère une variable externe et la filtre
         */
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //dump($name, $name; // OK
        $category = new Category();

        if(!empty($name) & !empty($description)) {
            $category->setName($name);
            $category->setDescription($description);

            if($category->create()) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/categories');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Afficher categories
     *
     * @return void
     */
    public function list() 
    {
        $categories= new Category();
        $categoriesList = $categories->readAll();
        $this->show('category/categories', [
            'title' => 'Categories',
            'categories'  =>  $categoriesList
        ]);
    }

    /**
     * Afficher category
     *
     * @return void
     */
    public function read($id) 
    {
        $category = new Category();
        $category = $category->read($id);
        //dump($category); // Ok
        $this->show('category/category', [
            'title'     => 'Category',
            'category'    =>  $category
        ]);
    }

    /**
     * Afficher category edit
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $category = Category::read($id);

        $this->show('category/edit', [
            'title'     => 'Edit',
            'category'    => $category,
        ]);
    }

    /**
     * Editer category
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
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //dump($name, $description; // OK
        $category = new Category();

        if(!empty($name) & !empty($description)) {
            $category->setName($name);
            $category->setDescription($description);

            if($category->update($id)) {
                header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/categories');
                exit;
            } else {
                print "Erreur insertion BDD!";
            }  
        } else {
            print "L'un des champs n'est pas rempli!";
        }
    }

    /**
     * Supprimer category
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        if(Category::delete($id)) {
            header('Location: ' . dirname($_SERVER['SCRIPT_NAME']) . '/categories');
            exit;
        } else {
            print "Erreur suppression BDD!";
        }          
    }

}