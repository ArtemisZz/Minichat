<?php


class Connection
{
    private static $connection =null;

    /**
     * Connection constructor.
     */
    private function __construct()
    {
// Connexion à la base de données
        try {
            self::$connection = new PDO('mysql:host=localhost:3306;dbname=symfony;charset=utf8', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance(){
        if(self::$connection === null){
            new Connection();
        }
        return self::$connection;
    }


}