<?php

class MainController
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function err404()
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
        $this->show('home');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function articleMethod() 
    {
        $this->show('article');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function authorMethod() 
    {
        $this->show('author');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function categoryMethod() 
    {
        $this->show('category');
    }

    /**
     * Undocumented function
     *
     * @param [type] $viewName
     * @param array $viewData
     * @return void
     */
    private function show($page, $datas = [])
    {
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $page . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}