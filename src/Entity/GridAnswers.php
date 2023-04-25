<?php
class GridAnswers extends Grids
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $gridQuestionAnswerId;
    private int $idGrid;
    private int $idAxecategoryQuestionAnswer;
    private int $idAxeCategoryQuestion;
    /*=====GETTERS=====*/
    final public function getGridQuestionAnswerId(): int
    {
        return $this->gridQuestionAnswerId;
    }
    final public function getIdGrid(): int
    {
        return $this->idGrid;
    }
    final public function getIdAxecategoryQuestionAnswer(): int
    {
        return $this->idAxecategoryQuestionAnswer;
    }
    final public function getQuestionId(): int
    {
        return $this->idAxeCategoryQuestion;
    }
    /*=====SETTERS=====*/
    final public function setGridQuestionAnswerId(int $id): void
    {
        $this->gridQuestionAnswerId = $id;
    }
    final public function setIdGrid(int $id): void
    {
        $this->idGrid = $id;
    }
    final public function setIdAxecategoryQuestionAnswer(int $id): void
    {
        $this->idAxecategoryQuestionAnswer = $id;
    }
    final public function setQuestionId(int $id): void
    {
        $this->idAxeCategoryQuestion = $id;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createGridAnswers(): void
    {
        $query = $this->db->prepare('INSERT INTO grid_question_answer (id_grid, id_axe_category_question_answer) VALUES (:id_grid, :id_axe_category_question_answer)');
        $query->bindValue(':id_grid', $this->getIdGrid());
        $query->bindValue(':id_axe_category_question_answer', $this->getIdAxecategoryQuestionAnswer());
        $query->execute();
    }
    /*==READ==*/
    final public function readGridAnswers(): array
    {
        $query = $this->db->prepare('SELECT * FROM grid_question_answer');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readGridAnswersById(): array
    {
        $query = $this->db->prepare('SELECT * FROM grid_question_answer WHERE grid_question_answer_id = :id');
        $query->bindValue(':id', $this->getGridQuestionAnswerId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    //On récupère le nom de la réponse par rapport à l'ID de la grille et l'ID de la question
    final public function readAnswersByQuestionIdAndGridId(): array
    {
        $query = $this->db->prepare('SELECT axe_category_question_answer.answer_name FROM grid_question_answer 
                                            INNER JOIN axe_category_question_answer ON grid_question_answer.id_axe_category_question_answer = axe_category_question_answer.answer_id 
                                            WHERE grid_question_answer.id_grid = :id_grid AND axe_category_question_answer.id_axe_category_question = :id_axe_category_question
                                            LIMIT 1');
        $query->bindValue(':id_grid', $this->getIdGrid(), PDO::PARAM_INT);
        $query->bindValue(':id_axe_category_question', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    final public function updateGridAnswers(): void
    {
        $query = $this->db->prepare('UPDATE grid_question_answer SET id_grid = :id_grid, id_axe_category_question_answer = :id_axe_category_question_answer WHERE grid_question_answer_id = :id');
        $query->bindValue(':id_grid', $this->getIdGrid());
        $query->bindValue(':id_axe_category_question_answer', $this->getIdAxecategoryQuestionAnswer());
        $query->bindValue(':id', $this->getGridQuestionAnswerId());
        $query->execute();
    }
    /*==DELETE==*/
    final public function deleteGridAnswers(): void
    {
        $query = $this->db->prepare('DELETE FROM grid_question_answer WHERE grid_question_answer_id = :id');
        $query->bindValue(':id', $this->getGridQuestionAnswerId());
        $query->execute();
    }


}