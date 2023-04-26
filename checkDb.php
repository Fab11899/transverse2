<?php
//On affiche les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//On se connecte à la bdd
$username = 'usr';
$password = 'user';
$host = '172.16.47.120';
//$username = 'root';
//$password = 'root';
//$host = 'localhost';
$database = 'transverse';
$con = new mysqli($host, $username, $password, $database);
if($con->connect_errno){
    die('Error ' . $this->con->connect_error);
}
echo 'Connected successfully!';

