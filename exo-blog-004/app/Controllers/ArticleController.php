<?php

namespace Controllers;

class ArticleController extends CoreController
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function articleMethod() 
    {
        $this->show('article', [
            'title' => 'Articlel'
        ]);
    }

}