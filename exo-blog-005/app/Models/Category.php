<?php

namespace App\Models;

use App\Utils\Database;

use PDO;

class Category
{

    private $id;
    private $name;
    private $description;    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Sélectionner liste categories
     *
     * @return void
     */
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `categories`';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $categories = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($categories); //OK
        return $categories;
    }

    /**
     * Sélectionner category
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {
        $id = $id['id'];
        $pdo= Database::getPDO();
        $sql = 'SELECT * FROM `categories` WHERE `id_category` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetch
         * PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO 
         */
        $category = $pdoStatement->fetch(PDO::FETCH_OBJ);
        //dump($category); //OK
        return $category;
    }
}