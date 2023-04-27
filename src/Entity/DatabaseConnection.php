<?php
class DatabaseConnection
{
    //On se connecte à la bdd dans un construct
    protected PDO $db;
    public function __construct()
    {
        /*Les infos de connection locales*/
        $username = 'root';
        $password = 'root';
        $host = 'localhost';
        //Les infos de connection distantes
        //$username = 'usr';
        //$password = 'user';
        //$host = '172.16.47.120';
        $dbname = 'transverse';
        $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    }
}