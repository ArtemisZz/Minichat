<?php
spl_autoload_register(function ($className) {
    include ("lib/{$className}.class.php");
});

require("../view/portfolio.php");
