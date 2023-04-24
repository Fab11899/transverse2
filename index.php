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
<button onclick="hideAndDisplay('contenu1')">Axe 1</button>
<br>
<div id="contenu1" style="display: none">
    Le contenu 1
</div>
<br>
<button onclick="hideAndDisplay('contenu2')">Axe 2</button>
<br>
<div id="contenu2" style="display: none">
    Le contenu 2
</div>
<br>
<button onclick="hideAndDisplay('contenu3')">Axe 3</button>
<br>
<div id="contenu3" style="display: none">
    Le contenu 3
</div>
<br>
</body>
</html>
<script>
<?php
require_once ('assets/js/indexFunctions.js');
?>
</script>
