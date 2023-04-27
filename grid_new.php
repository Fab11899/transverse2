<?php
//On affiche les erreurs
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/*On récupère les grilles*/
require_once ('src/Entity/DatabaseConnection.php');
require_once ('src/Entity/Axes.php');
require_once ('src/Entity/Categorys.php');
require_once ('src/Entity/Questions.php');
require_once ('src/Entity/Answers.php');
require_once ('src/Entity/Grids.php');
require_once ('src/Entity/GridAnswers.php');
//on crée la grille
if (isset($_POST['newGrid'])) {
    //On commence par récupérer le nom du formulaire
    $gridName = $_POST['gridName'];
    //on enregistre la grille
    $grid = new Grids();
    $grid->setGridName($gridName);
    $grid->createGrids();
    //On récupère l'id de la grille
    $gridId = $grid->readGridsByName();
    $gridId = (int)$gridId['grid_id'];
    //On récupère toutes les questions pour ensuite boucler dessus
    $questions = new Questions();
    $questionsList = $questions->readQuestions();
    foreach ($questionsList as $question) {
        //On récupère l'id de la question
        $questionId = $question['question_id'];
        //On récupère la réponse
        $answerId = $_POST['answer' . $questionId];
        //On enregistre la réponse
        $gridAnswer = new GridAnswers();
        $gridAnswer->setIdGrid($gridId);
        $gridAnswer->setIdAxeCategoryQuestionAnswer($answerId);
        $gridAnswer->createGridAnswers();
    }
    //On redirige vers la page de la grille
    header('Location: grid_view.php?grid=' . $gridId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>New grid</title>
</head>
<body>

<div class="container">
<h1 style="text-align: center; font-family: Arial, sans-serif;">Nouvelle grille</h1>  
</div>


<!--On crée le formulaire-->
<form method="post" >
    <label for="gridName" >Nom de la grille</label>
    
    <input type="text" name="gridName" id="gridName" required>
    <?php

    //On commence par récupérer les axes
    $axes = new Axes();
    $axesList = $axes->readAxes();

    //On affiche les axes
    foreach ($axesList as $axe) {
        $axeName = $axe['axe_name'];
        $axeId = $axe['axe_id'];
        ?>
        <h2><?= $axeName ?></h2>
        <?php

        //On récupère les catégories de l'axe
        $categorys = new Categorys();
        $categorys->setAxeId($axeId);
        $categorysList = $categorys->readCategorysByAxeId();

        //On affiche les catégories`
        foreach ($categorysList as $category) {
            $categoryName = $category['category_name'];
            $categoryId = $category['category_id'];
            ?>
            <h3><?= $categoryName ?></h3>
            <?php

            //On récupère les questions de la catégorie
            $questions = new Questions();
            $questions->setCategoryId($categoryId);
            $questionsList = $questions->readQuestionsByCategoryId();

            //On affiche les questions
            foreach ($questionsList as $question) {
                $questionName = $question['question_name'];
                $questionId = $question['question_id'];
                ?>
                <h4><?= $questionName ?></h4>
                <?php

                //On fait un select avec les réponses possibles de la question
                $answers = new Answers();
                $answers->setQuestionId($questionId);
                $answersList = $answers->readAnswersByQuestionId();
                ?>
                <label for="answer<?= $questionId ?>">Réponse :</label>
                <select name="answer<?= $questionId ?>" id="answer<?= $questionId ?>">
                    <?php
                    foreach ($answersList as $answer) {
                        $answerName = $answer['answer_name'];
                        $answerId = $answer['answer_id'];
                        ?>
                        <option value="<?= $answerId ?>"><?= $answerName ?></option>
                        <?php
                    }
                    ?>
                </select>


                <?php
            }
        }
    }
    ?>
    <button name="newGrid" style="; color: white; border-radius: 5px;">Créer la grille</button>
    <style>
        button{
  background-color: grey;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  float: right; 
  margin-right: 20px;
        }
    <?php
exit;
?>
</body>
</html>