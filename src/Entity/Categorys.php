<?php

class Categorys extends Axes
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $categoryId;
    private string $categoryName;
    private int $axeId;
    /*=====GETTERS=====*/
    final public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    final public function getCategoryName(): string
    {
        return $this->categoryName;
    }
    /*=====SETTERS=====*/
    final public function setCategoryId(int $id): void
    {
        $this->categoryId = $id;
    }
    final public function setCategoryName(string $name): void
    {
        $this->categoryName = $name;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createCategorys(string $name): void
    {
        $query = $this->db->prepare('INSERT INTO axe_category (category_name, id_axe) VALUES (:name, :id_axe)');
        $query->bindValue(':name', $this->getCategoryName());
        $query->bindValue(':id_axe', $this->getAxeId());
        $query->execute();
    }
    /*==READ==*/
    /*On récupère toutes les catégories*/
    final public function readCategorys(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    /*On récupère une catégorie par son ID*/
    final public function readCategorysById(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category WHERE category_id = :id');
        $query->bindValue(':id', $this->getCategoryId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /*On récupère les catégories par rapport à l'id de l'axe*/
    final public function readCategorysByAxeId(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category WHERE id_axe = :id');
        $query->bindValue(':id', $this->getAxeId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    final public function updateCategorys(): void
    {
        $query = $this->db->prepare('UPDATE axe_category SET category_name = :name, id_axe = :id_axe WHERE category_id = :id');
        $query->bindValue(':id', $this->getCategoryId(), PDO::PARAM_INT);
        $query->bindValue(':name', $this->getCategoryName());
        $query->bindValue(':id_axe', $this->getAxeId());
        $query->execute();
    }
    /*==DELETE==*/
    final public function deleteCategorys(): void
    {
        $query = $this->db->prepare('DELETE FROM axe_category WHERE category_id = :id');
        $query->bindValue(':id', $this->getCategoryId(), PDO::PARAM_INT);
        $query->execute();
    }
    //On supprime les catégories par rapport à l'id de l'axe
    final public function deleteCategorysByAxeId(): void
    {
        /*On supprime les questions de la catégorie*/
        $this->deleteQuestionsByCategoryId();
        /*On supprime la catégorie*/
        $query = $this->db->prepare('DELETE FROM axe_category WHERE id_axe = :id');
        $query->bindValue(':id', $this->getAxeId(), PDO::PARAM_INT);
        $query->execute();
    }
}