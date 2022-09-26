<?php

namespace App\Models;

use App\Utils\Database;

use PDO;

class Article 
{

    private $id;
    private $title;
    private $content;
    private $author;
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
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

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
     * Set the value of id_author
     *
     * @return  self
     */ 
    public function setId_author($id_author)
    {
        $this->id_author = $id_author;

        return $this;
    }

    /**
     * Get the value of id_category
     */ 
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @return  self
     */ 
    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Enregistrer article
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
            INSERT INTO articles
            (
                title, 
                content, 
                id_author, 
                id_category
            ) VALUES
            (
                :title, 
                :content, 
                :id_author, 
                :id_category
            )");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':title', $this->title, PDO::PARAM_STR);
        $prep->bindValue(':content', $this->content, PDO::PARAM_STR);
        $prep->bindValue(':id_author', $this->id_author, PDO::PARAM_STR);
        $prep->bindValue(':id_category', $this->id_category, PDO::PARAM_STR);

        if ($prep->execute()) {
            return true;
        }
        return false;
    }

    /**
     * Sélectionner 6articles
     *
     * @return void
     */
    public static function readLimit()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `articles` ORDER BY `title` DESC LIMIT 3';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $articles = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($articles); // OK
        return $articles;
    }

    /**
     * Sélectionner liste articles
     *
     * @return void
     */
    public static function readAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `articles` ORDER BY title DESC';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $articles = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($articles); // OK
        return $articles;
    }

    /**
     * Sélectionner article
     *
     * @param [type] $id
     * @return void
     */
    public static function read($id)
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
        //dump($article); // OK
        return $article;
    }

    /**
     * Editer article
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
            UPDATE `articles`
            SET
                title = :title,
                content = :content, 
                id_author = :id_author,
                id_category = :id_category,
                created_at = NOW()
            WHERE id_article = :id
            ");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':title', $this->title, PDO::PARAM_STR);
        $prep->bindValue(':content', $this->content, PDO::PARAM_STR);
        $prep->bindValue(':id_author', $this->id_author, PDO::PARAM_STR);
        $prep->bindValue(':id_category', $this->id_category, PDO::PARAM_STR);
        $prep->bindValue(':id', $id['id']);

        //dump($this->title, $this->content, $this->id_author, $this->id_category, $id);
        
        if ($prep->execute()) {
            return true;
        }
    
        return false;
    }

    /**
     * Supprimer article
     *
     * @return void
     */
    public static function delete($id)
    {
        $id = $id['id'];
        //dump($id); // OK
        $pdo= Database::getPDO(); 
        $prep = $pdo->prepare("
            DELETE FROM `articles`
            WHERE id_article = :id_article
        ");
        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         */
        $prep->bindValue(':id_article', $id);

        if ($prep->execute()) {
            return true;
        }
        return false;    
    }

    /**
     * Sélectionner articles par author
     *
     * @param [type] $id
     * @return void
     */
    public static function author($id)
    {
        $id = $id['id'];
        //dump($id); // OK
        $pdo= Database::getPDO();
        $sql = 'SELECT * FROM `articles` WHERE `id_author` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetch
         * PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO 
         */
        $articles = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($articles); // OK
        return $articles;
    }

    /**
     * Sélectionner articles par category
     *
     * @param [type] $id
     * @return void
     */
    public static function category($id)
    {
        $id = $id['id'];
        //dump($id); // OK
        $pdo= Database::getPDO();
        $sql = 'SELECT * FROM `articles` WHERE `id_category` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetch
         * PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO 
         */
        $articles = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($articles); // OK
        return $articles;
    }

}