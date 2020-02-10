<?php
require_once("../dao/UserDAO.php");
require_once("../models/User.php");
require_once("../connection/Connection.php");
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = filter_input(INPUT_POST, "login");
    $password = filter_input(INPUT_POST, "password");
    $pseudo = filter_input(INPUT_POST,"pseudo");
    $sex = $_POST['sexe'];
    $date = $_POST['birthday'];
    $user = new User(0,$login,$password,$sex,$date,$pseudo,null,null);
    $dao = new UserDAO(Connection::getInstance());
    if($dao->create($user) == true){
        require("../controllers/chat-controller.php");
    }
    else{
        require("../controllers/register-controller.php");
        exit();
    }
}