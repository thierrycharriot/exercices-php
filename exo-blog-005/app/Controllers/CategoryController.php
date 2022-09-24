<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends CoreController
{

    /**
     * Afficher categories
     *
     * @return void
     */
    public function categoriesMethod() 
    {
        $categories= new Category();
        $categoriesList = $categories->findAll();
        $this->show('categories', [
            'title' => 'Categories',
            'categories'  =>  $categoriesList
        ]);
    }

    /**
     * Afficher category
     *
     * @return void
     */
    public function categoryMethod($id) 
    {
        $category = new Category();
        $category = $category->find($id);
        //dump($category); // Ok
        $this->show('category', [
            'title'     => 'Category',
            'category'    =>  $category
        ]);
    }

}