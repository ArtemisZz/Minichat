<?php
spl_autoload_register(function ($className) {
    include ("lib/{$className}.class.php");
});

require_once('../lib/gestionLogin.php');
require('../views/home-page.php');