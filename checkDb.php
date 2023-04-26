<?php
//On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//On se connecte à la bdd
$username = 'usr';
$password = 'user';
$host = '172.16.47.120';
$dbname = 'transverse';
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//on vérifie que la bdd est bien connectée
if ($db) {
    echo "La base de données est connectée";
} else {
    echo "La base de données n'est pas connectée";
}

