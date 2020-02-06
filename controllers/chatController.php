<?php
require_once("../models/Minichat.php");
require_once ("../connection/Connection.php");
require_once ("../dao/MinichatDAO.php");
$connection = Connection::getInstance();
$dao = new MinichatDAO($connection);
$data = $dao->read10LastRows();
require("../views/minichat.php");