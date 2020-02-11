<?php
/*
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Course cycliste, avatar</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css" />
</head>
<body>
<h1></h1>
<form name="upload_image" action="../controller/upload-avatar.php" method = "post" enctype="multipart/form-data">
    <fieldset>
        <legend>New avatar</legend>
        <input type="file" name="avatar" required="required"/>
        <button type="submit" name="valid" value="send">Send</button>
    </fieldset>
</form>
<footer><a href="../router/index.php">Home</a></footer>
</body>