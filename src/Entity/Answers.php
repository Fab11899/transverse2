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
    /*==READ==*/
    final public function readAnswersByQuestionId(): array
    {
        $query = $this->db->prepare('SELECT * FROM axe_category_question_answer WHERE id_axe_category_question = :id order by answer_point');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    /*==UPDATE==*/
    /*==DELETE==*/
    final public function deleteAnswersByQuestionId(): void
    {
        $query = $this->db->prepare('DELETE FROM axe_category_question_answer WHERE id_axe_category_question = :id');
        $query->bindValue(':id', $this->getQuestionId(), PDO::PARAM_INT);
        $query->execute();
    }
}