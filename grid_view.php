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
<body class="container d-flex flex-column align-middle text-center">
<div class="fs-1 text">Diagnostique</div>
<div class="fs-2 text">Systancia</div>
<!--Chaque axe à un bouton pour afficher son contenu-->
<button class="btn w-50 mx-auto btn-secondary text" onclick="hideAndDisplay('contenu1')">Axe Compétences</button>
<!--On affiche le contenu de l'axe en question si on a cliqué sur le bouton-->
<div id="contenu1" style="display: none">
    <table class="table table-striped text-center align-middle w-100">
        <!--Catégorie 1-->
        <tr class="table-dark w-100"><th>Excellence Technique/Communauté de pratiques</th></tr>
        <!--On affiche les questions de la catégorie Le label, la réponse et un conseil-->
        <!--Question 1-->
        <tr><th>Formations pour Apprendre à apprendre, changement de paradigme, "être à la page" (au-delà des compétences "justes" nécessaires)</th></tr>
        <tr><td>Possibilité de choisir et de suivre des formations "annexes" au métier et/ou temps dédié pour de la veille ou de l'auto-formation </td></tr>
        <tr><td>Le conseil</td></tr>
    </table>
</div>
<br>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    <?php
    require_once ('assets/js/indexFunctions.js');
    ?>
</script>


<?php

// Btn retour
echo '<button onclick="window.history.back()">Retour</button>';
// retour arrière dans l'historique du nav
echo '<script>';
echo 'function goBack() {';
echo 'window.history.back();';
echo '}';
echo '</script>';
?>
