<?php

namespace App\Models;

use App\Utils\Database;

use PDO;

class Article 
{

    private $id;
    private $title;
    private $content;
    private $id_author;
    private $id_category;
    private $created_at;    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of id_author
     */ 
    public function getId_author()
    {
        return $this->id_author;
    }

    /**
     * Get the value of id_category
     */ 
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Sélectionner liste articles
     *
     * @return void
     */
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `articles`';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $articles = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($articles); //OK
        return $articles;
    }

    /**
     * Sélectionner article
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {
        $id = $id['id'];
        $pdo= Database::getPDO();
        $sql = 'SELECT * FROM `articles` WHERE `id_article` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetch
         * PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO 
         */
        $article = $pdoStatement->fetch(PDO::FETCH_OBJ);
        //dump($article); //OK
        return $article;
    }

}