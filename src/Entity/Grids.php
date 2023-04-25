<?php
class Grids extends DatabaseConnection
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }

    /*=====PROPERTIES=====*/
    private $gridId;
    private $gridName;
    private $gridDeleted;

    /*=====GETTERS=====*/
    final public function getGridId()
    {
        return $this->gridId;
    }

    final public function getGridName()
    {
        return $this->gridName;
    }

    final public function getGridDeleted()
    {
        return $this->gridDeleted;
    }

    /*=====SETTERS=====*/
    final public function setGridId($id)
    {
        $this->gridId = $id;
    }

    final public function setGridName($name)
    {
        $this->gridName = $name;
    }

    final public function setGridDeleted($deleted)
    {
        $this->gridDeleted = $deleted;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createGrids()
    {
        $query = $this->db->prepare('INSERT INTO grid (grid_name) VALUES (:name)');
        $query->bindValue(':name', $this->getGridName());
        $query->execute();
    }
    /*==READ==*/
    /*On récupère toutes les grilles*/
    final public function readGrids(): false|array
    {
        $query = $this->db->prepare('SELECT * FROM grid where grid_deleted = 0');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /*On récupère une grille par son ID*/
    final public function readGridsById()
    {
        $query = $this->db->prepare('SELECT * FROM grid WHERE grid_id = :id');
        $query->bindValue(':id', $this->getGridId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    /*On modifie une grille par son ID*/
    final public function updateGridsById()
    {
        $query = $this->db->prepare('UPDATE grid SET grid_name = :name WHERE grid_id = :id');
        $query->bindValue(':id', $this->getGridId(), PDO::PARAM_INT);
        $query->bindValue(':name', $this->getGridName());
        $query->execute();
    }
    /*==DELETE==*/
    /*On supprime une grille par son ID*/
    final public function deleteGridsById()
    {
        $query = $this->db->prepare('DELETE FROM grid WHERE grid_id = :id');
        $query->bindValue(':id', $this->getGridId(), PDO::PARAM_INT);
        $query->execute();
    }
}