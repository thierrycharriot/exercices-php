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
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
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
     * Enregistrer author
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
            INSERT INTO authors
            (
                firstname, 
                lastname, 
                pseudo, 
                mail
            ) VALUES
            (
                :firstname, 
                :lastname, 
                :pseudo, 
                :mail
            )");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $prep->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $prep->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $prep->bindValue(':mail', $this->mail, PDO::PARAM_STR);

        if ($prep->execute()) {
            return true;
        }
        return false;
    }

    /**
     * Sélectionner liste authors
     *
     * @return void
     */
    public static function readAll()
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
    public static function read($id)
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

    /**
     * Editer author
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
            UPDATE `authors`
            SET
                firstname = :firstname,
                lastname = :lastname, 
                pseudo = :pseudo,
                mail = :mail
            WHERE id_author = :id
            ");

        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         * 
         * https://www.php.net/manual/fr/pdo.constants.php
         * Représente les types de données CHAR, VARCHAR ou les autres types de données sous forme de chaîne de caractères SQL. 
         */
        $prep->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $prep->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $prep->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $prep->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $prep->bindValue(':id', $id['id']);

        //dump($this->firstname, $this->lastname, $this->pseudo, $this->mail, $id);
        
        if ($prep->execute()) {
            return true;
        }        
        return false;
    }

    /**
     * Supprimer author
     *
     * @return void
     */
    public static function delete($id)
    {
        $id = $id['id'];
        //dump($id); // OK
        $pdo= Database::getPDO(); 
        $prep = $pdo->prepare("
            DELETE FROM `authors`
            WHERE id_author = :id_author
        ");
        /**
         * https://www.php.net/manual/fr/pdostatement.bindvalue.php
         * PDOStatement::bindValue — Associe une valeur à un paramètre 
         */
        $prep->bindValue(':id_author', $id);

        if ($prep->execute()) {
            return true;
        }
        return false;    
    }

}