<?php

class MainController{

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
        $this->show('home');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function aboutMethod() 
    {
        $this->show('about');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function authorMethod() 
    {
        $random = mt_rand(1, 34);
        $this->show('author', ['title' => 'Qui suis-je ?', 'heure' => date('H\hi'), 'nombre' => $random]);
    }

    private function show($page, $datas=[]) {
        /**
         * https://www.php.net/manual/fr/function.dirname.php
         * dirname — Renvoie le chemin du dossier parent
         * 
         * https://www.php.net/manual/fr/reserved.variables.server.php
         * $_SERVER — Variables de serveur et d'exécution
         */
        $baseUrl = dirname($_SERVER['SCRIPT_NAME']);
        require __DIR__."/../views/header.tpl.php";
        require __DIR__."/../views/$page.tpl.php";
        require __DIR__."/../views/footer.tpl.php";
    }

}