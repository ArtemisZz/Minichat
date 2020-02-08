<?php
require_once("../lib/gestionLogin.php");
$user = $_SESSION['user'];
$a = $dao->read($user->getLogin());
header("Content-Type:" . $a->getMimetype());
echo $a->getAvatar();