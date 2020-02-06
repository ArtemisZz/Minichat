<?php
require_once("../models/Minichat.php");
require_once ("../connection/Connection.php");
require_once ("../dao/MinichatDAO.php");

if(isset($_POST['pseudo']) && isset($_POST['message'])){
    $pseudo = $_POST["pseudo"];
    $message = $_POST["message"];
    $user = new Minichat($pseudo,$message);
    $connection = Connection::getInstance();
    $dao = new MinichatDAO($connection);
    $dao->create($user);

    $data = $dao->read10LastRows();
    require_once("../views/minichat.php");
}
