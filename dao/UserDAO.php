<?php

require_once("../connection/Connection.php");
require_once ("../dao/IAbstractDAO.php");
class UserDAO implements IAbstractDAO
{
    private $connection = null;

    /**
     * UserDAO constructor.
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($obj)
    {
        try {
            $login = $obj->getLogin();
            $password = $obj->getPassword();
            $sexe = $obj->getSexe();
            $date = $obj->getBirthDay();
            $pseudo = $obj->getNom();
            $sql = "INSERT INTO `user`(login, password, sexe, date_naissance, nom) VALUES ('".$login."', '".$password."', '".$sexe."', '".$date."', '".$pseudo."')";
            $this->connection->exec($sql);
            return true;
        }
        catch (Exception $e){
            return false;
        }

    }

    public function read($id)
    {
        try {
            $sql = "SELECT * FROM user WHERE login = '".$id."'";
            $response = $this->connection->query($sql);
            return $response->fetchAll();
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }


    public function readAll()
    {

    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }
}