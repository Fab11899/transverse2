<?php
class Api extends GridAnswers
{
    //Le but de cette API sera de

    //On récupère la connexion à la base de données via le parent
    public function __construct()
    {
        parent::__construct();
    }
    /*=====PROPERTIES=====*/
    private int $apiGridId;
    private int $apiAxeId;
    private int $apiCategoryId;
    private int $apiQuestionId;
    /*=====GETTERS=====*/
    final public function getApiGridId(): int
    {
        return $this->apiGridId;
    }
    final public function getApiAxeId(): int
    {
        return $this->apiAxeId;
    }
    final public function getApiCategoryId(): int
    {
        return $this->apiCategoryId;
    }
    final public function getApiQuestionId(): int
    {
        return $this->apiQuestionId;
    }
    /*=====SETTERS=====*/
    final public function setApiGridId(int $id): void
    {
        $this->apiGridId = $id;
    }
    final public function setApiAxeId(int $id): void
    {
        $this->apiAxeId = $id;
    }
    final public function setApiCategoryId(int $id): void
    {
        $this->apiCategoryId = $id;
    }
    final public function setApiQuestionId(int $id): void
    {
        $this->apiQuestionId = $id;
    }
    /*=====METHODES=====*/
    /*==CREATE==*/
    /*==READ==*/
    //1. Récupérer une liste des grilles
    //2. Récupérer les axes d'une grille
    //3. Récupérer les catégories d'un axe
    //4. Récupérer les questions d'une catégorie
    //5. Récupérer les réponses d'une question
    final public function readApiGrids(): array
    {
        $query = $this->db->prepare('SELECT grid_id, grid_name FROM grid where grid_deleted = 0');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readApiGridPointsByAxe(): array
    {
        $query = $this->db->prepare('select a.axe_id, a.axe_name, sum(acqa.answer_point) as answer_points from grid_question_answer gqa
                                            inner join axe_category_question_answer acqa on gqa.id_axe_category_question_answer = acqa.answer_id
                                            inner join axe_category_question acq on acqa.id_axe_category_question = acq.question_id
                                            inner join axe_category ac on acq.id_axe_category = ac.category_id
                                            inner join axe a on ac.id_axe = a.axe_id
                                            where gqa.id_grid = :id_grid
                                            group by ac.id_axe');
        $query->bindValue(':id_grid', $this->getApiGridId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readApiGridPointsByCategory(): array
    {
        $query = $this->db->prepare('select a.axe_id, a.axe_name, ac.category_id, ac.category_name, ac.category_id, ac.category_name, sum(acqa.answer_point) as answer_points from grid_question_answer gqa
                                            inner join axe_category_question_answer acqa on gqa.id_axe_category_question_answer = acqa.answer_id
                                            inner join axe_category_question acq on acqa.id_axe_category_question = acq.question_id
                                            inner join axe_category ac on acq.id_axe_category = ac.category_id
                                            inner join axe a on ac.id_axe = a.axe_id
                                            where gqa.id_grid = :id_grid and a.axe_id = :id_axe
                                            group by ac.id_axe, ac.category_id');
        $query->bindValue(':id_grid', $this->getApiGridId(), PDO::PARAM_INT);
        $query->bindValue(':id_axe', $this->getApiAxeId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readApiGridPointsByQuestion(): array {
        $query = $this->db->prepare('select a.axe_id, a.axe_name, ac.category_id, ac.category_name, ac.category_id, ac.category_name, acq.question_id, acq.question_name, sum(acqa.answer_point) as answer_points from grid_question_answer gqa
                                            inner join axe_category_question_answer acqa on gqa.id_axe_category_question_answer = acqa.answer_id
                                            inner join axe_category_question acq on acqa.id_axe_category_question = acq.question_id
                                            inner join axe_category ac on acq.id_axe_category = ac.category_id
                                            inner join axe a on ac.id_axe = a.axe_id
                                            where gqa.id_grid = :id_grid and a.axe_id = :id_axe and ac.category_id = :id_category
                                            group by ac.id_axe, ac.category_id, acq.question_id');
        $query->bindValue(':id_grid', $this->getApiGridId(), PDO::PARAM_INT);
        $query->bindValue(':id_axe', $this->getApiAxeId(), PDO::PARAM_INT);
        $query->bindValue(':id_category', $this->getApiCategoryId(), PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    final public function readApiGridAnswersByCategory(): array
    {
        $response = [];
        require_once ('DatabaseConnection.php');
        require_once ('Axes.php');
        require_once ('Categorys.php');
        require_once ('Questions.php');
        require_once ('Answers.php');
        require_once ('Grids.php');
        require_once ('GridAnswers.php');
        //On récupère les axes
        $axes = new Axes();
        $axes->setAxeId($this->getApiAxeId());
        $axesList = $axes->readAxes();
        //On boucle sur les axes
        foreach ($axesList as $axe) {
            $axeId = (int)$axe['axe_id'];
            $axeName = $axe['axe_name'];
            //On ajoute l'ID et le nom au tableau
            $response[$axeId] = [
                'axe_id' => $axeId,
                'axe_name' => $axeName,
                'categories' => []
            ];
            //On récupère les catégories
            $categorys = new Categorys();
            $categorys->setAxeId($axeId);
            $categorysList = $categorys->readCategorysByAxeId();
            //On boucle sur les catégories
            foreach ($categorysList as $category) {
                $categoryId = (int)$category['category_id'];
                $categoryName = $category['category_name'];
                //On ajoute l'ID et le nom au tableau
                $response[$axeId]['categories'][$categoryId] = [
                    'category_id' => $categoryId,
                    'category_name' => $categoryName,
                    'questions' => []
                ];
                //On récupère les questions
                $questions = new Questions();
                $questions->setCategoryId($categoryId);
                $questionsList = $questions->readQuestionsByCategoryId();
                //On boucle sur les questions
                foreach ($questionsList as $question) {
                    $questionId = (int)$question['question_id'];
                    $questionName = $question['question_name'];
                    //On ajoute l'ID et le nom au tableau
                    $response[$axeId]['categories'][$categoryId]['questions'][$questionId] = [
                        'question_id' => $questionId,
                        'question_name' => $questionName,
                        'answers' => []
                    ];
                    //On récupère les réponses
                    $answers = new Answers();
                    $answers->setQuestionId($questionId);
                    $answersList = $answers->readAnswersByQuestionId();
                    //On boucle sur les réponses
                    foreach ($answersList as $answer) {
                        $answerId = (int)$answer['answer_id'];
                        $answerName = $answer['answer_name'];
                        $answerPoint = (int)$answer['answer_point'];
                        //On ajoute l'ID et le nom au tableau
                        $response[$axeId]['categories'][$categoryId]['questions'][$questionId]['answers'][$answerId] = [
                            'answer_id' => $answerId,
                            'answer_name' => $answerName,
                            'answer_point' => $answerPoint,
                            'answer_selected' => false
                        ];
                    }

                }

            }
        }
        return $response;
    }
    /*==UPDATE==*/
    /*==DELETE==*/
}