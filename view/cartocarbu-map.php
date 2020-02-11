<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="fr"/>
        <title>Mystic: Carto'Carbu</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
              integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
              crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
                integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
                crossorigin=""></script>
        <link rel="stylesheet" href="../styles/map.css"/>
    </head>
    <body>
            <?php
            echo $html_res;
            ?>
            <div id="carteCampus">
            </div>
        <script src="../js/scriptCarte.js"></script>
    </body>
</html>
