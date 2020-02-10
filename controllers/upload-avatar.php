<?php
require_once('../lib/gestionLogin.php');
$avatar = $_FILES['avatar'];
if($avatar !== null){
    $user = $_SESSION['user'];
    $user->setAvatar(file_get_contents($avatar['tmp_name']));
    $user->setMimeType($avatar['type']);
    $dao->update($user);
}

require("../controllers/chat-controller.php");