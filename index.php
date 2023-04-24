<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Diagnostique</h1>
<h3>Nom de l'entreprise</h3>
<button onclick="hideAndDisplay('contenu1')">Axe Compétences</button>
<br>
<div id="contenu1" style="display: none">
    <h4>Excellence Technique/Communauté de pratiques</h4>
    <p>Les questions</p>
    <h4>Faire agile</h4>
    <p>Les questions</p>
</div>
<br>
<button onclick="hideAndDisplay('contenu2')">Axe Réactivité</button>
<br>
<div id="contenu2" style="display: none">
    <h4>Vélocité de réponse</h4>
    <p>Les questions</p>
    <h4>Environnements souples</h4>
    <p>Les questions</p>
    <h4>Défi environnemental</h4>
    <p>Les questions</p>
    <h4>Veille et benchmark</h4>
</div>
<br>
<button onclick="hideAndDisplay('contenu3')">Axe Numérique</button>
<br>
<div id="contenu3" style="display: none">
    <h4>Business model</h4>
    <p>Les questions</p>
    <h4>Relation client</h4>
    <p>Les questions</p>
    <h4>Management</h4>
    <p>Les questions</p>
</div>
<br>
</body>
</html>
<script>
<?php
require_once ('assets/js/indexFunctions.js');
?>
</script>
