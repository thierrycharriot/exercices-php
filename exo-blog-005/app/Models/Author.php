<?php

namespace App\Models;

use App\Utils\Database;

use PDO;

class Author
{

    private $id;
    private $firstname;
    private $lastname;
    private $pseudo;
    private $mail;
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Sélectionner liste authors
     *
     * @return void
     */
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `authors`';
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetchall.php
         * PDOStatement::fetchAll — Récupère les lignes restantes d'un ensemble de résultats 
         */
        $authors = $pdoStatement->fetchAll(PDO::FETCH_OBJ);
        //dump($authors); //OK
        return $authors;
    }

    /**
     * Sélectionner author
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {
        $id = $id['id'];
        $pdo= Database::getPDO();
        $sql = 'SELECT * FROM `authors` WHERE `id_author` = ' . $id;
        $pdoStatement = $pdo->query($sql);
        /**
         * https://www.php.net/manual/fr/pdostatement.fetch
         * PDOStatement::fetch — Récupère la ligne suivante d'un jeu de résultats PDO 
         */
        $author = $pdoStatement->fetch(PDO::FETCH_OBJ);
        //dump($author); //OK
        return $author;
    }

}