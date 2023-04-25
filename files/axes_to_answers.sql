/*On insert 3 lignes dans la table axe*/
insert into axe (axe_name) values ('Compétences'), ('Réactivité'), ('Numérique');
/*On crée les catégories pour chaque axe*/
insert into axe_category (category_name, id_axe) values
    ('Excellence Technique/Communauté de pratiques', 1),
    ('Faire agile', 1),
    ('Gestion humaine des compétences', 1),
    ('Vélocité de réponse', 2),
    ('Environnements souples', 2),
    ('Défi environnemental', 2),
    ('Veille et benchmark', 2),
    ('Business model', 3),
    ('Relation client', 3),
    ('Management', 3);
/*On crée les questions pour chaque catégorie*/
insert into axe_category_question (question_name, id_axe_category) values
    ('Formations pour Apprendre à apprendre, changement de paradigme, "être à la page" (au-delà des compétences "justes" nécessaires)', 1),
    ('Le co-développement (outil d intelligence collective) existe-t-il dans l entreprise ?', 1),
    ('Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?', 1),
    ('Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?', 1),
    ('Les managers sont-ils aussi formateurs sur certains sujet pour l entreprise entière ?', 1),
    ('L entreprise favorise-t-elle l excellence technique ? (Principe 9 du Manifeste Agile)', 1),
    ('Déployez vous les pratiques du "Faire Agile", cest-à-dire une ou plusieurs des "méthodes" agiles ?', 2),
    ('Votre entreprise promeut-elle un "état d esprit agile" ?', 2),
    ('Votre entreprise gère-t-elle humainement les compétences ?', 3),
    ('Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)', 4),
    ('Réactivité face aux impératifs prépondérants', 4),
    ('Mesure de la vélocité de l équipe (indicateur de suivi du travail d une équipe de conception)', 4),
    ('Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)', 5),
    ('Les équipes sont en capacité d autonomiser une partie de leurs tâches', 5),
    ('Les équipes s’inscrivent dans un cadre Agile Lean', 5),
    ('Les mécanismes de livraison et de synchronisation sont matures', 5),
    ('Les innovations produit tiennent compte de l urgence climatique', 6),
    ('Les processus internes sont remis en cause pour diminuer leur impact environnemental', 6),
    ('Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable', 6),
    ('Veille stratégique', 7),
    ('Votre entreprise dégage t-elle une part de CA  par des produits ou services en ligne', 8),
    ('La mise en place d’outils numériques a-t-elle permis d optimiser les coûts, les délais et la qualité ?', 8),
    ('Comment les outils sont-ils intégrés dans les process de l’entreprise ?', 8),
    ('Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?', 8),
    ('Mesurez-vous les impacts du numérique sur votre entreprise ?', 8),
    ('Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?', 8),
    ('Existe-t-il des freins (stratégiques, financiers,…) à l’ investissement dans les outils numériques ?', 8),
    ('L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?', 9),
    ('Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)', 9),
    ('L’entreprise dispose-t-elle d’un community manager ?', 9),
    ('Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?', 9),
    ('Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?', 9),
    ('Avez-vous observé chez vos concurrents des pratiques innovantes ?', 9),
    ('Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ? ', 10),
    ('L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?', 10),
    ('Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?', 10),
    ('Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?', 10),
    ('Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’ information ?', 10),
    ('Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?', 10),
    ('Comment accompagnez-vous vos collaborateurs dans la transition numérique ?', 10);
/*On crée les réponses pour chaque question*/
insert into axe_category_question_answer (answer_name, answer_point, id_axe_category_question) values
    ('Désintérêt pour l amélioration de la compétence des équipes', 0, 1),
    ('Nombreuses formations métiers dans le plan de formation', 1, 1),
    ('Possibilité de choisir et de suivre des formations "annexes" au métier et/ou temps dédié pour de la veille ou de l auto-formation ', 2, 1),
    ('Pas du tout', 0, 2),
    ('Quelques initiatives', 1, 2),
    ('Démarche instaurée et pratiquée régulièrement', 2, 2),
    ('Aucune initiative', 0, 3),
    ('Capitalisation d un certain nombre de savoirs', 1, 3),
    ('Véritable communauté de pratiques mise en place', 2, 3),
    ('Aucune initiative', 0, 4),
    ('Quelques initiatives', 1, 4),
    ('Systématiquement lors d une prise de poste', 2, 4),
    ('Non', 0, 5),
    ('Quelques fois', 1, 5),
    ('Quasi systématiquement', 2, 5),
    ('Pas du tout', 0, 6),
    ('Oui un peu', 1, 6),
    ('Oui', 2, 6),
    ('NON, nous les projets sont tous en cycle en V / cascade', 0, 7),
    ('Quelques projets pilotes', 1, 7),
    ('Déploiement systématique d une ou plusieurs méthodes', 2, 7),
    ('Non', 0, 8),
    ('Quelques valeurs agiles promues', 1, 8),
    ('Oui', 2, 8),
    ('Non', 0, 9),
    ('Un peu', 1, 9),
    ('Oui', 2, 9),
    ('Pas de phase de validation intermédiaire', 0, 10),
    ('Prototype fonctionnel intermédiaire livré au client', 1, 10),
    ('Principe du MVP respecté : Minimum Viable Product / la version d un produit qui permet d obtenir un maximum de retours client avec un minimum d effort', 2, 10),
    ('Pas de modification possible en cours de conception', 0, 11),
    ('Modifications en cours de conception engendrant alors du retard', 1, 11),
    ('L équipe de conception s adapte en cas de modification en cours de conception', 2, 11),
    ('Jamais', 0, 12),
    ('Suivi des tâches', 1, 12),
    ('Mesure de la vélocité', 2, 12),
    ('Le système d information freine toute tentative de réagir rapidement', 0, 13),
    ('Le système d information permet avec quelques difficultés d avoir de la réactivité', 1, 13),
    ('En cas de besoin, le système d information favorise la réactivité', 2, 13),
    ('Jamais', 0, 14),
    ('On laisse la possibilité de créer quelques macros Excel/VBA', 1, 14),
    ('L entreprise équipe et forme ses équipes à la création de site web ou app via des outils no-code', 2, 14),
    ('Pas de démarche Agile/Lean initiée dans l entreprise', 0, 15),
    ('Plusieurs concepts Agile/Lean sont mis en œuvre dans l entreprise', 1, 15),
    ('Les concepts Agile/Lean sont inscrits dans l ADN de l entreprise : Satisfaction du client avec des livraisons au plu tôt et régulières, accepter les changements, lisser les activités, collaboration quotidienne avec les parties prenantes, proximité terrain, autonomie des équipes dans la résolution de problèmes, amélioration continue...', 2, 15),
    ('Pas de démarche de tension des flux', 0, 16),
    ('Quelques concepts du juste à temps sont mis en œuvre pour tendre le flux', 1, 16),
    ('Concepts du juste à temps maîtrisés (production rythmée par la demande client, peu d en-cours)', 2, 16),
    ('Aucune réflexion sur cet axe', 0, 17),
    ('Des premières initiatives ont été lancées', 1, 17),
    ('Systématiquement', 2, 17),
    ('Aucune réflexion sur cet axe', 0, 18),
    ('Des premières initiatives ont été lancées', 1, 18),
    ('Systématiquement', 2, 18),
    ('Aucune réflexion sur cet axe', 0, 19),
    ('Des premières initiatives ont été lancées', 1, 19),
    ('Systématiquement', 2, 19),
    ('Pas de veille', 0, 20),
    ('La veille stratégique de l entreprise permet d anticiper les évolutions et les innovations', 1, 20),
    ('La veille stratégique de l entreprise permet d anticiper les disruptions nécessaires', 2, 20),
    ('Moins de 10%', 0, 21),
    ('Oui environ 20%', 1, 21),
    ('Oui environ 30%', 2, 21),
    ('Aucun', 0, 22),
    ('Oui mais pas pour tous les critères', 1, 22),
    ('Oui pour tous les critères ', 2, 22),
    ('Absence d outils ou de procédures, manque d utilité', 0, 23),
    ('En partie, les outils ne sont pas toujours adaptés à l activité et pas toujours rattachés à des procédures, sans entraver ses principales fonctions', 1, 23),
    ('A part entière, il existe des procédures et formations aux outils, ces outils sont intituitifs et adaptés à l activité', 2, 23),
    ('En mode novice : au mieux par mail ou via le site internet', 0, 24),
    ('En mode collaboratif : quelques aménagements (type sharepoint, drive) pour des sujets plutôt ponctuels', 1, 24),
    ('En mode avancé : des plateformes dédiées (type extranet, applications) sont intégrées au mode de partage permanent ', 2, 24),
    ('Non', 0, 25),
    ('Oui et non on observe sans mesurer', 1, 25),
    ('Oui des outils de mesure sont en place', 2, 25),
    ('Absence de démarche RSE', 0, 26),
    ('C est un sujet observé de loin, on traite les questions d obligation légales sans aller plus loin', 1, 26),
    ('Le numérique est un sujet totalement rattaché à la démarche RSE', 2, 26),
    ('Oui la stratégie de l entreprise n est pas orientée en faveur du numérique, elle n investit pas', 0, 27),
    ('Oui l entreprise est plutôt frileuse, on ne dépense que le strict nécessaire pour que les outils fonctionnent sans recherche de performance', 1, 27),
    ('Non des budgets sont alloués et l entreprise a bien compris cette nécessité dans sa stratégie', 2, 27),
    ('Non le site/la page réseau sont inexistants ou inactifs', 0, 28),
    ('Oui mais seulement sur le site internet = 1 point', 1, 28),
    ('Oui la présence de l entreprise sur les réseaux est visible, elle correspond au secteur d activité', 2, 28),
    ('Absence de plateforme de contact', 0, 29),
    ('Des accès dédiés pour les échanges entre le client et l entreprise sont existent, le suivi des contacts n est pas optimal', 1, 29),
    ('Plusieurs modes d utilisation sont possibles pour échanger avec l externe, ils sont performants et adaptés avec l activité de l entreprise', 2, 29),
    ('Non aucune personne n est dédiée ', 0, 30),
    ('Non mais une personne se charge de l animation des réseaux sociaux parmi ses autres tâches', 1, 30),
    ('Oui', 2, 30),
    ('Non ou rarement', 0, 31),
    ('Oui sans incitation', 1, 31),
    ('Oui avec des incitations de l entreprise pour le faire', 2, 31),
    ('Absence de suivi', 0, 32),
    ('Des indicateurs sont en place mais plutôt de façon passive, ils servent à mesurer ', 1, 32),
    ('Des indicateurs sont mis en place afin de mesurer l efficacité et l impact du site sur les réseaux, une recherche de performance est en place pour toucher toujours plus et mieux', 2, 32),
    ('Oui ils sont tellement performants et en avance que nous pourrions perdre des marchés', 0, 33),
    ('Oui ils ont quelques belles idées, si seulement on pouvait faire aussi bien qu eux', 1, 33),
    ('Oui elles servent comme base de reflexion et de développement pour notre propre entreprise. On peut être rivaliser !', 2, 33),
    ('Les fonctions supports ne sont pas amenées à être équipé pour le travail à distance. L entreprise fonctionne majoritairement sur le mode papier.', 0, 34),
    ('Les processus s appuient rarement sur la numérisation des données et les outils numériques. Le potentiel ne semble pas pleinement exploité. ', 1, 34),
    ('Les processus de travail s appuient sur des outils numériques quand ceux-ci sont possibles. L ensemble des fonctions de l entreprise sont équipées pour pouvoir réaliser le travail à distance quand celui-ci est possible', 2, 34),
    ('Non au contraire, peu de monde y adhère', 0, 35),
    ('Oui dans l ensemble toutefois nous rencontrons parfois des contraintes (pratiques, techniques,…)', 1, 35),
    ('Oui gain de temps, facilité, économies et fiabilité', 2, 35),
    ('Absence de communication et d accompagnement', 0, 36),
    ('La communication n est pas parfaite, les personnes qui peuvent se sentir en difficultés avec les nouvelles pratiques ne sont pas forcémment considérées. ', 1, 36),
    ('Tout est en place pour faciliter la compréhension et l adhésion aux nouveaux outils/pratiques', 2, 36),
    ('L organisation est en silot, absence de projets transversaux et d interactions avec les autres sites', 0, 37),
    ('Oui quelques évolutions s opèrent pour travailler en inter-service ou avec l externe, toutefois le potentiel n est pas pleinement exploité', 1, 37),
    ('Oui on sort complétement du mode silot et on favorise le mode projet', 2, 37),
    ('Absence de veille', 0, 38),
    ('Il y a un peu de benchmark toutefois les décisions d évolutions sont un peu tardive (quand il n y a plus le choix)', 1, 38),
    ('Oui l entreprise est en capacité de mesurer sa performance et de réagir rapidement pour se mettre à jour', 2, 38),
    ('Absence de prise en compte des pratiques terrain', 0, 39),
    ('Oui mais les outils sont vieillissants, il y a des freins pour les faire évoluer', 1, 39),
    ('Oui totalement les outils s adaptent au terrain quotidiennement', 2, 39),
    ('Absence d accompagnement', 0, 40),
    ('L entreprise accompagne en faisant de son mieux pour faire adhérer les autres, il y a parfois quelques blocages. J aimerais parfois être moi-même accompagné', 1, 40),
    ('L entreprise est pro-active par la promotion des innovations et des outils numériques. J adgère', 2, 40);