<?php
/*
  Utilise le contenu de $_SESSION (en particulier $_SESSION['ident'])
*/
if (!isset($_SESSION['user'])) {  // si la page était protégée, on ne devrait même pas faire ce test
    require('../views/login-page.php');
    exit();
}
$user = $_SESSION['user'];
$avatarURL = "../images/avatar_def.png";
$avatarURL = "data:image/jpeg;base64,". base64_encode($dao->read($user->getLogin())->getAvatar());

//$avatarURL = "getAvatar.php?login={$personne->login}";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Page à accès contrôlé</title>
    <link rel="stylesheet" type="text/css" href="../styles/style_authent.css"/>
</head>
<body>
<header>
    <h1>
        <?php
        echo '<img class="avatar" src="'.$avatarURL.'" />';
        echo "{$user->getNom()}";
        ?>
    </h1>
</header>
<div id="content">
    <div class="project">
        <h3>Feature 1: </h3>
        <br>
        <a href="../controllers/chat-controller.php">
            <div>
                <h1>FaceBook (demo)</h1>
            </div>
        </a>
    </div>

    <div class="project">
        <h3>Feature 2: </h3>
        <br>
        <a href="../controllers/chat-controller.php">
            <div>
                <h1>FaceBook (demo)</h1>
            </div>
        </a>
    </div>
</div>

<footer>
    <a href="../controllers/logout.php">Disconnect</a>
    <a href="../controllers/change-avatar.php">Changer d'avatar</a>
</footer>
</body>
</html>