<?php

namespace Controllers;

class MainController extends CoreController
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function errorMethod()
    {
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function homeMethod() 
    {
        $this->show('home', [
            'title' => 'Accueil'
        ]);
    }

}