<?php
session_name("Minichat");
session_start();
require_once("../dao/UserDAO.php");
require_once("../connection/Connection.php");
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = filter_input(INPUT_POST, "login");
    $password = filter_input(INPUT_POST, "password");
    $dao = new UserDAO(Connection::getInstance());
    if(($user = $dao->read($login)) != null){
        $_SESSION['user'] = $user;
    }
    else{
        require("../views/login-page.php");
        exit();
    }
}
else{
    require("../views/login-page.php");
    exit();
}