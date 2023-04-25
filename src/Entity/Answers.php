<?php
class Answers extends Questions
{
    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $answerId;
    private string $answerName;
    private string$answerPoint;
    private int $questionId;
    /*=====GETTERS=====*/
    final public function getAnswerId(): int
    {
        return $this->answerId;
    }
    final public function getAnswerName(): string
    {
        return $this->answerName;
    }
    final public function getAnswerPoint(): string
    {
        return $this->answerPoint;
    }
    /*=====SETTERS=====*/
    final public function setAnswerId(int $id): void
    {
        $this->answerId = $id;
    }
    final public function setAnswerName(string $name): void
    {
        $this->answerName = $name;
    }
    final public function setAnswerPoint(string $point): void
    {
        $this->answerPoint = $point;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    final public function createAnswers(string $name, string $point): void
    {
        $query = $this->db->prepare('INSERT INTO axe_category_question_answer (answer_name, answer_point, id_axe_category_question) VALUES (:name, :point, :id_axe_category_question)');
        $query->bindValue(':name', $this->getAnswerName());
        $query->bindValue(':point', $this->getAnswerPoint());
        $query->bindValue(':id_axe_category_question', $this->getQuestionId());
        $query->execute();
    }
    /*==READ==*/
    final public function readAnswers(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question_answer');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readAnswersById(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question_answer WHERE answer_id = :id');
        $query->bindValue(':id', $this->getAnswerId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    final public function readAnswersByQuestionId(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question_answer WHERE id_axe_category_question = :id');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    final public function updateAnswers(string $name, string $point): void
    {
        $query = $this->db->prepare('UPDATE axe_category_question_answer SET answer_name = :name, answer_point = :point WHERE answer_id = :id');
        $query->bindValue(':name', $this->getAnswerName());
        $query->bindValue(':point', $this->getAnswerPoint());
        $query->bindValue(':id', $this->getAnswerId(), PDO::PARAM_INT);
        $query->execute();
    }
    /*==DELETE==*/
    final public function deleteAnswers(): void
    {
        $query = $this->db->prepare('DELETE FROM axe_category_question_answer WHERE answer_id = :id');
        $query->bindValue(':id', $this->getAnswerId(), PDO::PARAM_INT);
        $query->execute();
    }
    final public function deleteAnswersByQuestionId(): void
    {
        $query = $this->db->prepare('DELETE FROM axe_category_question_answer WHERE id_axe_category_question = :id');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
    }
}