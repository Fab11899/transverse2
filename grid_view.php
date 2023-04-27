<?php
//On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$gridSelected = $_GET['grid'] ?? false;
if ($gridSelected) {
    /*On récupère les différentes pages*/
    require_once ('src/Entity/DatabaseConnection.php');
    require_once ('src/Entity/Axes.php');
    require_once ('src/Entity/Categorys.php');
    require_once ('src/Entity/Questions.php');
    require_once ('src/Entity/Answers.php');
    require_once ('src/Entity/Grids.php');
    require_once ('src/Entity/GridAnswers.php');
    //On récupère le nom de la grille
    $grid = new Grids();
    $grid->setGridId($gridSelected);
    $gridName = $grid->readGridsById();
    $gridName = $gridName['grid_name'];
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <style>
        .retour-btn {
          background-color: #808080;
          border: none;
          color: white;
          padding: 10px 16px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          border-radius: 5px;
          cursor: pointer;
        }

        .retour-btn:hover {
          background-color: #000000;

        }
    </style>
    <body class="container d-flex flex-column align-middle text-center">
    <div class="fs-1 text">Diagnostique</div>
    <div class="fs-2 text"><?= $gridName ?></div>
    <!--Chaque axe à un bouton pour afficher son contenu-->
    <?php
    //On liste les axes
    $answers = new GridAnswers();
    $axes = new Axes();
    $axesList = $axes->readAxes();
    //On affiche tous les axes
    foreach ($axesList as $axes) {
        $axe_id = $axes['axe_id'];
        $axe_name = $axes['axe_name'];
        //On récupère le nombre de points de l'axe
        $answers->setIdGrid($gridSelected);
        $axePoints = $answers->readGridPointsByAxe($axe_id);
        $axePoints = $axePoints['answer_points'];
        ?>
        <!--On fait une div cachée pour avoir le nombre de points de l'axe-->
        <div id="axe<?= $axe_id ?>" style="display: none"><?= $axePoints ?></div>
        <button class="btn w-50 mx-auto btn-secondary text" onclick="hideAndDisplay(<?= $axe_id ?>)"><?= $axe_name ?> - <?= $axePoints ?> Points</button>
        <!--On affiche le contenu de l'axe en question si on a cliqué sur le bouton-->
        <div id="<?= $axe_id ?>" style="display: none">
            <table class="table table-striped text-center align-middle w-100">
                <?php
                //On récupère les catégories de l'axe
                $categorys = new Categorys();
                $categorys->setAxeId($axe_id);
                $categorysList = $categorys->readCategorysByAxeId();
                //On affiche les catégories
                foreach ($categorysList as $category) {
                    $category_id = $category['category_id'];
                    $category_name = $category['category_name'];
                    //on récupère le nombre de points de la catégorie
                    $answers->setIdGrid($gridSelected);
                    $categoryPoints = $answers->readGridPointsByCategory($category_id);
                    $categoryPoints = $categoryPoints['answer_points'];
                    ?>
                    <tr class="table-dark w-100"><th><?= $category_name ?> - <?= $categoryPoints ?> Points</th></tr>
                    <?php
                    //On récupère les questions de la catégorie
                    $questions = new Questions();
                    $questions->setCategoryId($category_id);
                    $questionsList = $questions->readQuestionsByCategoryId();
                    //On affiche les questions
                    foreach ($questionsList as $question) {
                        $question_id = $question['question_id'];
                        $question_name = $question['question_name'];
                        ?>
                        <!--Question 1-->
                        <tr><th><?= $question_name ?></th></tr>
                        <?php
                        //On récupère les réponses de la question pour la grille sélectionnée
                        $answers->setQuestionId($question_id);
                        $answers->setIdGrid($gridSelected);
                        $answersList = $answers->readAnswersByQuestionIdAndGridId();
                        //On affiche les réponses
                        $answerName = $answersList['answer_name'];
                        ?>
                        <tr><td><?= $answerName ?></td></tr>
                        <tr><td>Le conseil</td></tr>
                        <?php
                    }
                    ?>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
    }
    ?>
    <div style="width: 500px; margin: auto">
        <canvas id="myChart"></canvas>
    </div>
    <!--Btn retour-->
    <button onclick="window.history.back()">Retour</button>
    </body>
    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        //On récupère le contenu des divs cachées
        const reactivite = document.getElementById('axe1').innerHTML;
        const competences = document.getElementById('axe2').innerHTML;
        const numerique = document.getElementById('axe3').innerHTML;
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Axe réactivité', 'Axe compétences', 'Axe numérique'],
                datasets: [{
                    label: 'Score',
                    data: [reactivite, competences, numerique],
                    borderWidth: 2,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }]
            },
            options: {
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 60
                    }
                },
            }
        });
    </script>
    <script>
        <?php
        require_once ('assets/js/indexFunctions.js');
        ?>
    </script>
    <?php
} else {
    header('Location: index.php');
}
