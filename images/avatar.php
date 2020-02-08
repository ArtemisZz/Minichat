<?php
require_once("../lib/gestionLogin.php");
$user = $_SESSION['user'];
$a = $dao->read($user->getLogin());
//header("Content-Type:" . $a->getMimetype());
//print_r($a->getAvatar());
 '<img src="data:image/jpeg;base64,'.base64_encode( $a->getAvatar()).'"/>';