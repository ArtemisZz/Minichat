<?php
/*
  Utilise le contenu de $_SESSION (en particulier $_SESSION['ident'])
*/
if (!isset($_SESSION['user'])) {  // si la page était protégée, on ne devrait même pas faire ce test
    require('../view/login-page.php');
    exit();
}
$user = $_SESSION['user'];
$avatarURL = '';
if ($dao->read($user->getLogin())->getAvatar() != null) {
    //$avatarURL = "data:".$dao->read($user->getLogin())->getMimetype().";base64,". base64_decode($dao->read($user->getLogin())->getAvatar());
    $avatarURL = "../images/get-avatar.php";
} else {
    $avatarURL = "../images/avatar_def.png";
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" lang="fr">
    <link href="../styles/minichat.css" rel="stylesheet"/>
    <link href="https://bootswatch.com/4/pulse/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../styles/style_authent.css"/>
    <title>MiniChat</title>
</head>
<body>
<header>
    <h1>
        <?php
        echo '<img class="avatar" src="' . $avatarURL . '" />';
        echo "{$user->getNom()}";
        ?>
    </h1>
</header>
<div id="chatblock" class="popup">
    <div class="chatname" onclick="revertPopUp()">
        <?php
        echo '<img class="chatimage" src="' . $avatarURL . '" />';
        ?>
    </div>
    <div id="chatbox">

    </div>
    <form class="chatinput" action="minichat_post.php" method="post">
        <fieldset>
            <div class="form-group">
                <input type="text" class="form-control" id="login" name="login"
                       value="<?php echo $_SESSION['user']->getLogin() ?>" hidden placeholder="login">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="pseudo" name="pseudo"
                       value="<?php echo $_SESSION['pseudo'] ?>" hidden placeholder="Pseudo">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="message" name="message" placeholder="Message" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</div>
<footer>
    <a href="../controller/logout.php">Disconnect</a>
    <a href="../controller/change-avatar.php">Changer d'avatar</a>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/autoload.js"></script>

</body>
</html>