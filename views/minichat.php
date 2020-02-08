<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" lang="fr">
    <link href="../styles/minichat.css" rel="stylesheet"/>
    <link href="https://bootswatch.com/4/pulse/bootstrap.min.css" rel="stylesheet"/>
    <title>MiniChat</title>
</head>
<body>
    <div id="chatblock" class="popup">
        <div class="chatname" onclick="revertPopUp()"></div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/autoload.js"></script>

</body>
</html>