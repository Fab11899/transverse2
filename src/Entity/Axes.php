<?php

class Axes extends DatabaseConnection
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $axeId;
    private string $axeName;
    /*=====GETTERS=====*/
    final public function getAxeId(): int
    {
        return $this->axeId;
    }
    final public function getAxeName(): string
    {
        return $this->axeName;
    }
    /*=====SETTERS=====*/
    final public function setAxeId(int $id): void
    {
        $this->axeId = $id;
    }
    final public function setAxeName(string $name): void
    {
        $this->axeName = $name;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createAxes(string $name): void
    {
        $query = $this->db->prepare('INSERT INTO `axe` (axe_name) VALUES (:name)');
        $query->bindValue(':name', $this->getAxeName());
        $query->execute();
    }
    /*==READ==*/
    final public function readAxes(): array
    {
        $query = $this->db->prepare('SELECT * FROM `axe`');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readAxesById(): array
    {
        $query = $this->db->prepare('SELECT * FROM `axe` WHERE axe_id = :id');
        $query->bindValue(':id', $this->getAxeId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    final public function updateAxes(): void
    {
        $query = $this->db->prepare('UPDATE `axe` SET axe_name = :name WHERE axe_id = :id');
        $query->bindValue(':id', $this->getAxeId(), PDO::PARAM_INT);
        $query->bindValue(':name', $this->getAxeName());
        $query->execute();
    }
    /*==DELETE==*/
    final public function deleteAxes(): void
    {
        //On commence par supprimer les catégories liées à l'axe
        $this->deleteCategorysByAxeId();
        //Puis on supprime l'axe
        $query = $this->db->prepare('DELETE FROM `axe` WHERE axe_id = :id');
        $query->bindValue(':id', $this->getAxeId(), PDO::PARAM_INT);
        $query->execute();
    }
    //On fait une fonction pour modifier le nom

}