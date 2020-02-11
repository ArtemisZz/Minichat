<?php
spl_autoload_register(function ($className) {
    include ("../model/{$className}.php");
});

require("../view/portfolio.php");
