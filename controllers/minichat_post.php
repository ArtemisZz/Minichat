<?php
require_once("../models/Minichat.php");
require_once ("../connection/Connection.php");
require_once ("../dao/MinichatDAO.php");

if(isset($_POST['pseudo']) && isset($_POST['message'])){
    $user = $_SESSION["user"];
    $message = $_POST["message"];
    $minichat = new Minichat($user,$message);
    $connection = Connection::getInstance();
    $dao = new MinichatDAO($connection);
    $dao->create($minichat);

    $data = $dao->read10LastRows();
    require("../controllers/chat-controller.php.php");
}
