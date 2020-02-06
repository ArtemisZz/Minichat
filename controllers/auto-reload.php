<?php
require_once("../models/Minichat.php");
require_once ("../connection/Connection.php");
require_once ("../dao/MinichatDAO.php");
$connection = Connection::getInstance();
$dao = new MinichatDAO($connection);
$data = $dao->read10LastRows();

/*
foreach ($data as $index => $data_mini) {
    echo '<p>' . $data_mini['pseudo'] . ' : ' . $data_mini['message'] . '</p>';
}

*/
for($i = sizeof($data) - 1;$i >= 0 ;$i--) {
    echo '<p>' . $data[$i]['pseudo'] . ' : ' . $data[$i]['message'] . '</p>';
}
