<?php

require_once("../connection/Connection.php");
require_once ("../dao/IAbstractDAO.php");
require_once("../models/User.php");
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
            $password = password_hash($obj->getPassword(),CRYPT_BLOWFISH);
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
        $mimetype = null;
        $avatar = null;
        try {
            $sql = "SELECT * FROM user WHERE login = '".$id."'";
            $response = $this->connection->prepare($sql);
            $response->execute();
            $response->execute();
            $response->bindColumn('mimetype', $mimetype);
            $response->bindColumn('avatar', $avatar, PDO::PARAM_LOB);
            $data =  $response->fetchAll();
            return new User($data[0]['id'],$data[0]['login'], $data[0]['password'],$data[0]['sexe'],$data[0]['date_naissance'], $data[0]['nom'], $avatar, $mimetype);
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
        try {
            $id = $obj->getId();
            $login = $obj->getLogin();
            $password = $obj->getPassword();
            $sex = $obj->getSexe();
            $date = $obj->getBirthDay();
            $pseudo = $obj->getNom();
            $avatar = $obj->getAvatar();
            $mime = $obj->getMimeType();
            $sql = "UPDATE `user` SET login ='".$login."', password ='".$password."', sexe='".$sex."', date_naissance='".$date."', nom='".$pseudo."', avatar=:avatar, mimetype=:mime WHERE id='".$id."'";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(':mime', $mime);
            $stmt->bindParam(':avatar', $avatar, PDO::PARAM_LOB);

            return $stmt->execute();
            return true;
        }
        catch (Exception $e){
            echo $e->getMessage();
        }    }

    public function delete($obj)
    {

    }

}