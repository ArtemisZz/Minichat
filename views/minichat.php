<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" lang="fr">
    <link href="../styles/minichat.css" rel="stylesheet"/>
    <link href="https://bootswatch.com/4/pulse/bootstrap.min.css" rel="stylesheet"/>
    <title>MiniChat</title>
</head>
<body>
    <form action="minichat_post.php" method="post">
        <fieldset>
            <legend>Minichat</legend>
            <div class="form-group">
                <input type="text" class="form-control" id="login" name="login" value="<?php echo $_SESSION['user']->getLogin() ?>" hidden placeholder="login">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?php echo $_SESSION['pseudo'] ?>" hidden placeholder="Pseudo">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class="form-control" id="message" name="message" placeholder="Message" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>

    <div id="chatbox">

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            function getData(){
                $.ajax({
                    type: 'POST',
                    url: '../controllers/auto-reload.php',
                    success: function(data){
                        $('#chatbox').html(data);
                    }
                });
            }
            getData();
            setInterval(function () {
                getData();
            }, 1000);  // it will refresh your data every 1 sec

        });
        $("#chatbox").animate({ scrollTop: $(this).height() }, "normal");
    </script>
</body>
</html>