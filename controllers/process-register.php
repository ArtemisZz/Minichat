<?php
require_once("../dao/UserDAO.php");
require_once ("../models/User.php");
require_once("../connection/Connection.php");
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = filter_input(INPUT_POST, "login");
    $password = filter_input(INPUT_POST, "password");
    $pseudo = filter_input(INPUT_POST,"pseudo");
    $sex = $_POST['sexe'];
    $date = $_POST['birthday'];
    $user = new User($login,$password,$sex,$date,$pseudo);
    $dao = new UserDAO(Connection::getInstance());
    if($dao->create($user) == true){
        require("../controllers/index.php");
    }
    else{
        require("../controllers/register-controller.php");
        exit();
    }
}