<?php

$config = require "config.php";
$database = $config["database"];
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    $page = 0;
}
if (isset($_REQUEST['size'])) {
    $size = $_REQUEST['size'];
} else {
    $size = 20;
}


$dipendenti = $query->selectAll($page, $size);
$json = json_encode($dipendenti, JSON_UNESCAPED_SLASHES);
header('Content-Type: application/json');

echo $json;
