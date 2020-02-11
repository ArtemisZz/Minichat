<?php
spl_autoload_register(function ($className) {
    include ("lib/{$className}.class.php");
});

require_once('../lib/gestionLogin.php');
unset($_SESSION['user']);
session_destroy();

require("../view/login-page.php");