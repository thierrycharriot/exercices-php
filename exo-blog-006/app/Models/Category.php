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
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Enregistrer category
     *
     * @return void
     */
    public function create()
    {
        $pdo = Database::getPDO(); 
    
        /**
         * https://www.php.net/manual/fr/pdo.prepare.php
         * PDO::prepare — Prépare une requête à l'exécution et retourne un objet 
         */
        $prep = $pdo->prepare("
            INSERT INTO categories
            (
                name, 
                description
            ) VALUES
            (
                :name, 
                :description
            )");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':name', $this->name, PDO::PARAM_STR);
        $prep->bindValue(':description', $this->description, PDO::PARAM_STR);

        if ($prep->execute()) {
            return true;
        }
        return false;
    }

    /**
     * Sélectionner liste categories
     *
     * @return void
     */
    public static function readAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `categories`';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $categories = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($categories); // OK
        return $categories;
    }

    /**
     * Sélectionner category
     *
     * @param [type] $id
     * @return void
     */
    public static function read($id)
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
        //dump($category); // OK
        return $category;
    }

    /**
     * Editer category
     *
     * @param [type] $id
     * @return void
     */
    public function update($id)
    {
        $pdo = Database::getPDO(); 
    
        /**
         * https://www.php.net/manual/fr/pdo.prepare.php
         * PDO::prepare — Prépare une requête à l'exécution et retourne un objet 
         */
        $prep = $pdo->prepare("
            UPDATE `categories`
            SET
                name = :name,
                description = :description 
            WHERE id_category = :id
            ");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':name', $this->name, PDO::PARAM_STR);
        $prep->bindValue(':description', $this->description, PDO::PARAM_STR);
        $prep->bindValue(':id', $id['id']);

        //dump($this->firstname, $this->lastname, $this->pseudo, $this->mail, $id);
        
        if ($prep->execute()) {
            return true;
        }       
        return false;
    }

    /**
     * Supprimer category
     *
     * @return void
     */
    public static function delete($id)
    {
        $id = $id['id'];
        //dump($id); // OK
        $pdo= Database::getPDO(); 
        $prep = $pdo->prepare("
            DELETE FROM `categories`
            WHERE id_category = :id_category
        ");
        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         */
        $prep->bindValue(':id_category', $id);

        if ($prep->execute()) {
            return true;
        }
        return false;    
    }

}