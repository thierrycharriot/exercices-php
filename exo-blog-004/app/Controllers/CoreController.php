<?php

namespace Controllers;

class CoreController
{

    /**
     * Undocumented function
     *
     * @param [type] $page
     * @param array $datas
     * @return void
     */
    protected function show($page, $datas = [])
    {

        global $router;

        //dump($datas);
        /**
         * https://www.php.net/manual/fr/function.extract.php
         * extract — Importe les variables dans la table des symboles
         * 
         */
        extract($datas);

        /**
         * https://www.php.net/manual/fr/reserved.variables.server.php
         * $_SERVER — Variables de serveur et d'exécution
         */
        $baseUrl = $_SERVER['SCRIPT_FILENAME'];
        //var_dump($baseUrl);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $page . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
