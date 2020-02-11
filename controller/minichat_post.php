<?php
session_name('minichat');
session_start();
require_once("../model/Minichat.php");
require_once ("../connection/Connection.php");
require_once ("../dao/MinichatDAO.php");
require_once ("../dao/UserDAO.php");

if(isset($_POST['message'])){
    $dao = new UserDAO(Connection::getInstance());
    $user = $dao->read($_POST['login']);
    $_SESSION['user'] = $user;
    $_SESSION['pseudo'] = $user->getNom();
    $message = $_POST["message"];
    $minichat = new Minichat($user,$message);
    $connection = Connection::getInstance();
    $dao = new MinichatDAO($connection);
    $dao->create($minichat);
    require('../controller/chat-controller.php');
}
