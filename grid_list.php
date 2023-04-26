<?php
//On affiche les erreurs
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
require_once ('src/Entity/DatabaseConnection.php');
require_once ('src/Entity/Grids.php');
$objGrid = new Grids();
$grids = $objGrid->readGrids();
//full text
if(isset($_GET['q'])) {
    $q = $_GET['q'];
    $entreprises_filtered = array_filter($grids, function($entreprise) use ($q) {
        return (str_contains(strtolower($entreprise['grid_name']), strtolower($q)));
    });
} else {
    $q = false;
    $entreprises_filtered = $grids;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grid list</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #808080;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    input[type=text] {
        padding: 6px 10px;
        margin-top: 8px;
        margin-bottom: 58px;
        margin-right: 16px;
        font-size: 17px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        width: 50%;
    }
</style>
<body>
<h1>Grid list</h1>
<form action="" method="get">
    <label for="search">Recherche :</label>
    <input type="text" id="search" name="q" placeholder="Recherche..." value="<?= $q ?>">
    <button type="submit">Rechercher</button>
</form>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Accéder</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($entreprises_filtered as $entreprise) {
            $entreprise_name = $entreprise['grid_name'];
            $entreprise_id = (int)$entreprise['grid_id'];
            ?>
            <tr>
                <td><?= $entreprise_name ?></td>
                <td><a href="grid_view.php?grid=<?= $entreprise_id ?>">Voir la grille</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

</body>
</html>
