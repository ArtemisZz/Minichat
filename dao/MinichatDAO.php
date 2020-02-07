<?php
require_once("../connection/Connection.php");
require_once ("../dao/IAbstractDAO.php");
class MinichatDAO implements IAbstractDAO
{

    private $connection = null;

    /**
     * MinichatDAO constructor.
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($obj)
    {
        try {
            $user = $obj->getUser();
            $id = $user->getId();
            $message = $obj->getMessage();
            $sql = "INSERT INTO minichat(user_id,message) VALUES ('".$id."', '".$message."')";
            $this->connection->exec($sql);

        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public function read($id)
    {
        try {
            $sql = "SELECT message FROM minichat WHERE id = '".$id."'";
            $response = $this->connection->query($sql);
            $dr = $response->fetchAll();

        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function read10LastRows()
    {
        try {
            $sql = "SELECT u.nom, m.message FROM minichat m, user u WHERE u.id = m.user_id ORDER BY  m.id desc limit 10";
            $response = $this->connection->query($sql);
            return $response->fetchAll();
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function readAll($id)
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