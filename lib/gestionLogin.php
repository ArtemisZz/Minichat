<?php
require_once("../dao/UserDAO.php");
require_once("../connection/Connection.php");
session_name('minichat');
session_start();
$user = null;
$dao = new UserDAO(Connection::getInstance());
if (!isset($_SESSION['user'])){ // visiteur non encore authentifié
    $login = filter_input(INPUT_POST, "login");
    $password = filter_input(INPUT_POST, "password");
    if ($login != '' || $password != ''){
        $user = $dao->read($login);
        setcookie("login",$_POST["login"],time()+ (10 * 365 * 24 * 60 * 60));
    }
    if ($user != null) {
        if($user->getPassword() == $password){
            $_SESSION['user'] = $user;
            $_SESSION['pseudo'] = $user->getNom();
        }
        else if(crypt($password,$user->getPassword()) == $user->getPassword()){
            $_SESSION['user'] = $user;
            $_SESSION['pseudo'] = $user->getNom();
        }
        else{
            require("../view/login-page.php");
            exit();
        }
    } else {
        require("../view/login-page.php");
        exit();
    }
}
else{

}
