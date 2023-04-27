<?php
//On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <title>Grid list</title>
</head>
<style>

	
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 10px;
    }

body{
	margin-left: 70px;
	margin-right: 70px;

}

form{
	text-align: center;
	margin-top: 40px;}

	h1{
		margin-top: 50px;
		font-family: Arial, sans-serif;
		text-shadow: 2px 2px #ccc;

	}

    th {
        background-color: #808080;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
		
    }
    input[type=text] {
        padding: 16px 10px;
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<h1 class="text-center">Grid list</h1>

<form action="" method="get" >
<!--<label for="search">Recherche :</label>-->
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
<button class="button"><a href="grid_new.php" style="color: white; text-decoration: none;">Créer nouvelle liste</a></button>
<style>
.button {
  background-color: grey;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

    <?php
exit;
?>

</body>
</html>
