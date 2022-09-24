<?php

namespace Controllers;

class AuthorController extends CoreController
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function authorMethod() 
    {
        $this->show('author', [
            'title' => 'Author'
        ]);
    }

}