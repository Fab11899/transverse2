# transverse2

Ce projet est un projet d'école.

Les requêtes api
-----------------
Le lien initial est : 
http://lien/api/request.php?endpoint=ActionSouhaitée&paramètres

Les endpoint possibles :
- grids
  - Permet de lister l'ensemble des grilles crées
  - Pas de paramètres supplémentaires
- gridAxes
  - Permet de lister l'ensemble des axes d'une grille souhaitée
  - Paramètres : 
    - gridId : l'id de la grille souhaitée
- gridCategorysByAxes
  - Permet de lister l'ensemble des catégories d'une grille souhaitée
  - Paramètres : 
    - gridId : l'id de la grille souhaitée
    - axeId : l'id de l'axe souhaité
- gridQuestionsByCategorys
  - Permet de lister l'ensemble des questions d'une grille souhaitée
  - Paramètres : 
    - gridId : l'id de la grille souhaitée
    - axeId : l'id de l'axe souhaité
    - categoryId : l'id de la catégorie souhaitée
- gridAnswersByCategory
  - Permet de lister l'ensemble des réponses d'une grille souhaitée
  - Paramètres : 
    - axeId : l'id de l'axe souhaité