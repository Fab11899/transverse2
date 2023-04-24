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
        <!--Question 2-->
        <tr><th>Le co-développement (outil d'intelligence collective) existe-t-il dans l'entreprise ?</th></tr>
        <tr><td>Quelques initiatives</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 3-->
        <tr><th>Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?</th></tr>
        <tr><td>Véritable communauté de pratiques mise en place</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 4-->
        <tr><th>Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?</th></tr>
        <tr><td>Systématiquement lors d'une prise de poste</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 5-->
        <tr><th>Les managers sont-ils aussi formateurs sur certains sujet pour l'entreprise entière ?</th></tr>
        <tr><td>Non</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 6-->
        <tr><th>L'entreprise favorise-t-elle l'excellence technique ? (Principe 9 du Manifeste Agile)</th></tr>
        <tr><td>Pas du tout</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--la catégorie 2-->
        <tr class="table-dark"><th>Faire agile</th></tr>
        <!--Question 7-->
        <tr><th>Déployez vous les pratiques du "Faire Agile", c'est-à-dire une ou plusieurs des "méthodes" agiles ?</th></tr>
        <tr><td>NON, nous les projets sont tous en cycle en V / cascade</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 8-->
        <tr><th>Votre entreprise promeut-elle un "état d'esprit agile" ?</th></tr>
        <tr><td>Non</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 2-->
        <tr class="table-dark"><th>Gestion humaine des compétences</th</tr>
        <!--Question 9-->
        <tr><th>Votre entreprise gère-t-elle humainement les compétences ?</th></tr>
        <tr><td>Un peu</td></tr>
        <tr><td>Le conseil</td></tr>
    </table>
</div>
<button class="btn w-50 mx-auto btn-secondary text" onclick="hideAndDisplay('contenu2')">Axe Réactivité</button>
<br>
<div id="contenu2" style="display: none">
    <table class="table table-striped text-center align-middle w-100">
        <!--Catégorie 4-->
        <tr class="table-dark"><th>Vélocité de réponse</tr>
        <!--Question 10-->
        <tr><th>Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)</th></tr>
        <tr><td>Prototype fonctionnel intermédiaire livré au client</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 11-->
        <tr><th>Réactivité face aux impératifs prépondérants</th></tr>
        <tr><td>Modifications en cours de conception engendrant alors du retard</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 12-->
        <tr><th>Mesure de la vélocité de l'équipe (indicateur de suivi du travail d'une équipe de conception)</th></tr>
        <tr><td>Suivi des tâches</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 5-->
        <tr class="table-dark"><th>Environnements souples</tr>
        <!--Question 13-->
        <tr><th>Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)</th></tr>
        <tr><td>Le système d'information permet avec quelques difficultés d'avoir de la réactivité</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 14-->
        <tr><th>Les équipes sont en capacité d'autonomiser une partie de leurs tâches</th></tr>
        <tr><td>L'entreprise équipe et forme ses équipes à la création de site web ou app via des outils no-code</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 15-->
        <tr><th>Les équipes s’inscrivent dans un cadre Agile Lean</th></tr>
        <tr><td>Pas de démarche Agile/Lean initiée dans l'entreprise</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 16-->
        <tr><th>Les mécanismes de livraison et de synchronisation sont matures</th></tr>
        <tr><td>Pas de démarche de tension des flux</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 6-->
        <tr class="table-dark"><th>Défi environnemental</tr>
        <!--Question 17-->
        <tr><th>Les innovations produit tiennent compte de l'urgence climatique</th></tr>
        <tr><td>Des premières initiatives ont été lancées</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 18-->
        <tr><th>Les processus internes sont remis en cause pour diminuer leur impact environnemental</th></tr>
        <tr><td>Systématiquement</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 19-->
        <tr><th>Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable</th></tr>
        <tr><td>Aucune réflexion sur cet axe</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 7-->
        <tr class="table-dark"><th>Veille et benchmark</tr>
        <!--Question 20-->
        <tr><th>Veille stratégique</th></tr>
        <tr><td>La veille stratégique de l'entreprise permet d'anticiper les évolutions et les innovations</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 21-->
    </table>
</div>
<br>
<button class="btn w-50 mx-auto btn-secondary " onclick="hideAndDisplay('contenu3')">Axe Numérique</button>
<br>
<div id="contenu3" style="display: none">
    <table class="table table-striped text-center align-middle w-100">
        <!--Catégorie 8-->
        <tr class="table-dark"><th>Business model</tr>
        <!--Question 22-->
        <tr><th>Votre entreprise dégage t-elle une part de CA  par des produits ou services en ligne</th></tr>
        <tr><td>Oui environ 30%</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 23-->
        <tr><th>La mise en place d’outils numériques a-t-elle permis d'optimiser les coûts, les délais et la qualité ?</th></tr>
        <tr><td>Oui pour tous les critères </td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 24-->
        <tr><th>Comment les outils sont-ils intégrés dans les process de l’entreprise ?</th></tr>
        <tr><td>A part entière, il existe des procédures et formations aux outils, ces outils sont intituitifs et adaptés à l'activité</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 25-->
        <tr><th>Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?</th></tr>
        <tr><td>En mode collaboratif : quelques aménagements (type sharepoint, drive) pour des sujets plutôt ponctuels</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 26-->
        <tr><th>Mesurez-vous les impacts du numérique sur votre entreprise ?</th></tr>
        <tr><td>Oui des outils de mesure sont en place</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 9-->
        <tr><th>Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?</th></tr>
        <tr><td>Le numérique est un sujet totalement rattaché à la démarche RSE</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 10-->
        <tr><th>Existe-t-il des freins (stratégiques, financiers,…) à l’ investissement dans les outils numériques ?</th></tr>
        <tr><td>Non des budgets sont alloués et l'entreprise a bien compris cette nécessité dans sa stratégie</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 11-->
        <tr class="table-dark"><th>Relation client</tr>
        <!--Question 27-->
        <tr><th>L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?</th></tr>
        <tr><td>Oui la présence de l'entreprise sur les réseaux est visible, elle correspond au secteur d'activité</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 28-->
        <tr><th>Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)</th></tr>
        <tr><td>Plusieurs modes d'utilisation sont possibles pour échanger avec l'externe, ils sont performants et adaptés avec l'activité de l'entreprise</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 29-->
        <tr><th>L’entreprise dispose-t-elle d’un community manager ?</th></tr>
        <tr><td>Non mais une personne se charge de l'animation des réseaux sociaux parmi ses autres tâches</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 30-->
        <tr><th>Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?</th></tr>
        <tr><td>Oui avec des incitations de l'entreprise pour le faire</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 31-->
        <tr><th>Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?</th></tr>
        <tr><td>Des indicateurs sont mis en place afin de mesurer l'efficacité et l'impact du site sur les réseaux, une recherche de performance est en place pour toucher toujours plus et mieux</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 12-->
        <tr><th>Avez-vous observé chez vos concurrents des pratiques innovantes ?</th></tr>
        <tr><td>Les processus s'appuient rarement sur la numérisation des données et les outils numériques. Le potentiel ne semble pas pleinement exploité. </td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Catégorie 13-->
        <tr class="table-dark"><th>Management</th></tr>
        <!--Question 32-->
        <tr><th>Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ? </th></tr>
        <tr><td>Les processus de travail s'appuient sur des outils numériques quand ceux-ci sont possibles. L'ensemble des fonctions de l'entreprise sont équipées pour pouvoir réaliser le travail à distance quand celui-ci est possible</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 33-->
        <tr><th>L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?</th></tr>
        <tr><td>Oui gain de temps, facilité, économies et fiabilité</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 34-->
        <tr><th>Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?</th></tr>
        <tr><td>Tout est en place pour faciliter la compréhension et l'adhésion aux nouveaux outils/pratiques</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 35-->
        <tr><th>Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?</th></tr>
        <tr><td>Oui quelques évolutions s'opèrent pour travailler en inter-service ou avec l'externe, toutefois le potentiel n'est pas pleinement exploité</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 36-->
        <tr><th>Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’ information ?</th></tr>
        <tr><td>Il y a un peu de benchmark toutefois les décisions d'évolutions sont un peu tardive (quand il n y a plus le choix)</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 37-->
        <tr><th>Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?</th></tr>
        <tr><td>Oui mais les outils sont vieillissants, il y a des freins pour les faire évoluer</td></tr>
        <tr><td>Le conseil</td></tr>
        <!--Question 38-->
        <tr><th>Comment accompagnez-vous vos collaborateurs dans la transition numérique ?</th></tr>
        <tr><td>L'entreprise est pro-active par la promotion des innovations et des outils numériques. J'adgère</td></tr>
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
