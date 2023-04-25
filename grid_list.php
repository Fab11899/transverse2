<?php
// Données

$entreprises = array(
    array('nom' => 'Entreprise Systancia', 'tel' => '0123456789', 'adresse' => 'Adresse'),
    array('nom' => 'Entreprise Lesaffre', 'tel' => '0234567890', 'adresse' => 'Adresse'),
    array('nom' => 'Entreprise LDE', 'tel' => '0345678901', 'adresse' => 'Adresse'),
    array('nom' => 'Entreprise 4', 'tel' => '0456789012', 'adresse' => 'Adresse'),
    array('nom' => 'Entreprise 5', 'tel' => '0567890123', 'adresse' => 'Adresse')
);

//full text
if(isset($_GET['q'])) {
    $q = $_GET['q'];
    $entreprises_filtered = array_filter($entreprises, function($entreprise) use ($q) {
        return (strpos(strtolower($entreprise['nom']), strtolower($q)) !== false);
    });
} else {
    $entreprises_filtered = $entreprises;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Grid list</title>
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
</head>
<body>

<h1>Grid list</h1>

<form action="" method="get">
    <label for="search">Recherche :</label>
    <input type="text" id="search" name="q" placeholder="Recherche...">
    <button type="submit">Rechercher</button>
</form>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Téléphone</th>
            <th>Adresse</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($entreprises_filtered as $entreprise) { ?>
        <tr>
            <td><?php echo $entreprise['nom']; ?></td>
            <td><?php echo $entreprise['tel']; ?></td>
            <td><?php echo $entreprise['adresse']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
