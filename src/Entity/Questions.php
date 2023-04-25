<?php
class Questions extends Categorys
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $questionId;
    private string $questionName;
    private int $categoryId;
    /*=====GETTERS=====*/
    final public function getQuestionId(): int
    {
        return $this->questionId;
    }
    final public function getQuestionName(): string
    {
        return $this->questionName;
    }
    /*=====SETTERS=====*/
    final public function setQuestionId(int $id): void
    {
        $this->questionId = $id;
    }
    final public function setQuestionName(string $name): void
    {
        $this->questionName = $name;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createQuestions(string $name): void
    {
        $query = $this->db->prepare('INSERT INTO axe_category_question (question_name, id_axe_category) VALUES (:name)');
        $query->bindValue(':name', $this->getQuestionName());
        $query->execute();
    }
    /*==READ==*/
    final public function readQuestions(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readQuestionsById(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question WHERE question_id = :id');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    final public function readQuestionsByCategoryId(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question WHERE id_axe_category = :id');
        $query->bindValue(':id', $this->getCategoryId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    final public function updateQuestions(string $name): void
    {
        $query = $this->db->prepare('UPDATE axe_category_question SET question_name = :name WHERE question_id = :id');
        $query->bindValue(':name', $this->getQuestionName());
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
    }
    /*==DELETE==*/
    final public function deleteQuestions(): void
    {
        $query = $this->db->prepare('DELETE FROM axe_category_question WHERE question_id = :id');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
    }
    final public function deleteQuestionsByCategoryId(): void
    {
        /*On supprime les réponses de la question*/
        $this->deleteAnswersByQuestionId();
        /*On supprime la question*/
        $query = $this->db->prepare('DELETE FROM axe_category_question WHERE id_axe_category = :id');
        $query->bindValue(':id', $this->getCategoryId(), PDO::PARAM_INT);
        $query->execute();
    }

}