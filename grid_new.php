<?php
/*On récupère les grilles*/
require_once ('src/Entity/DatabaseConnection.php');
require_once ('src/Entity/Axes.php');
require_once ('src/Entity/Categorys.php');
require_once ('src/Entity/Questions.php');
require_once ('src/Entity/Answers.php');
require_once ('src/Entity/Grids.php');
require_once ('src/Entity/GridAnswers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>new grid</title>
</head>
<body>
<h1>Nouvelle grille</h1>
<label for="gridName">Nom de la grille</label>
<input type="text" name="gridName" id="gridName">
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
<br>
<button>Créer la grille</button>
</body>
</html>