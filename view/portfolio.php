<!DOCTYPE html>
<html>
<head>
    <title>Mystic: Main Page</title>
    <meta charset="UTF-8" />
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
<section id="welcome-section" class="welcome-section">
    <h1>Bonjour je suis Minh Quan Nguyen.</h1>
    <div id="introduction">
        <h3>
            <em>A web developer</em>
        </h3>
    </div>
</section>

<footer>
    <section id="contact" class="contact-section">
        <div>
            <a id="facebook" target="_blank"
               href="https://www.facebook.com/profile.php?id=100035922562774"
               class="btn contact-details"><img
                    src="https://cdn3.iconfinder.com/data/icons/picons-social/57/46-facebook-512.png"
                    alt="This is a picture linked to my facebook account" /><i></i>Facebook</a>
            <a id="linkedin"></a> <a id="profile-link" target="_blank"
                                     href="https://github.com/Phoenix-net?tab=repositories"
                                     class="btn contact-details"><img
                    src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png"
                    alt="This is a picture linked to my github account" /><i></i>GitHub</a>
            <a id="freecodecamp" target="_blank"
               href="https://www.freecodecamp.org/fcce8439e61-35bb-4a39-a1f0-786aded33c22"
               class="btn contact-details"><img
                    src="https://gilbertrosario.com/img/fcc.jpeg"
                    alt="This is a picture linked to my freeCodeCamp account" /><i></i>freeCodeCamp</a>
            <a id="linkedin" target="_blank"
               href="https://www.linkedin.com/in/minh-quan-nguyen-1b9a31199/"
               class="btn contact-details"><img
                    src="https://image.flaticon.com/icons/png/512/61/61109.png"
                    alt="This is a picture linked to my Linkedin account" /><i></i>Linkedin</a>
            <a id="email" href="mailto:minhquan.nguyen.fr@gmail.com"
               class="btn contact-details"><img
                    src="https://cdn3.iconfinder.com/data/icons/project-management-32/48/51-512.png" />Send
                a mail</a> <a id="phone" href="tel:" class="btn contact-details"><img
                    src="https://cdn4.iconfinder.com/data/icons/email-66/48/60-512.png" />
                Call me</a>
        </div>
    </section>
</footer>
</body>
</html>