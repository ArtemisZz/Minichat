<?php
require_once("../connection/Connection.php");
require_once ("../dao/AbstractDAO.php");
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
            $pseudo = $obj->getPseudo();
            $message = $obj->getMessage();
            $sql = "INSERT INTO minichat(pseudo,message) VALUES ('".$pseudo."', '".$message."')";
            $this->connection->exec($sql);

        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public function read($id)
    {
        try {
            $sql = "SELECT pseudo,message FROM minichat WHERE id = '".$id."'";
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
            $sql = "SELECT pseudo,message FROM minichat ORDER BY  id desc limit 10";
            $response = $this->connection->query($sql);
            $data = $response->fetchAll();
            return $data;
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