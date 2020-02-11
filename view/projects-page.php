<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Mystic: projects</title>
    <link rel="stylesheet"
          href="../styles/portfolio.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<header>
    <?php
    require("../view/nav-template.php");
    ?>
</header>
<div id="content">
    <div class="project">
        <h3>Feature 1: </h3>
        <br>
        <a href="../controller/chat-controller.php">
            <div>
                <h1>FaceBook (demo)</h1>
            </div>
        </a>
    </div>

    <div class="project">
        <h3>Feature 2: </h3>
        <br>
        <a href="/blog.php">
            <div>
                <h1>Blog (demo)</h1>
            </div>
        </a>
    </div>

    <div class="project">
        <h3>Feature 3: </h3>
        <br>
        <a href="../controller/cartocarbu-controller.php">
            <div>
                <h1>Cartocarbu (project)</h1>
            </div>
        </a>
    </div>
</div>

</body>
</html>