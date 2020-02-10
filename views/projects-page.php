<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Mystic: projects</title>
    <link rel="stylesheet"
          href="../styles/portfolio.css" />
    <link rel="stylesheet"
          href="https://bootswatch.com/4/superhero/bootstrap.min.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarColor02" aria-controls="navbarColor02"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="../router/index.php">Home
                        <span class="sr-only">(current)</span>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="../controllers/projects-controller.php">Features</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text"
                       placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
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
        <a href="../views/blog.php">
            <div>
                <h1>Blog (demo)</h1>
            </div>
        </a>
    </div>

    <div class="project">
        <h3>Feature 3: </h3>
        <br>
        <a href="../controllers/cartocarbu-controller.php">
            <div>
                <h1>Cartocarbu (project)</h1>
            </div>
        </a>
    </div>
</div>

</body>
</html>