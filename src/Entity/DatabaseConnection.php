<?php
class DatabaseConnection
{
    //On se connecte à la bdd dans un construct
    protected PDO $db;
    public function __construct()
    {
        /*Les infos de connection locales*/
        /*$username = 'root';
        $password = '';
        $host = 'localhost';*/
        /*Les infos de connection en ligne*/
        $username = 'transverse';
        $password = 'transverse';
        $host = 'localhost';
        $dbname = 'transverse';
        $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    }
}