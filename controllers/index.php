<?php 

$config = require "config.php";
$database= $config["database"];
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    $size = $_REQUEST['size'];
}else{
    $page = 0;
}


$dipendenti = $query->selectAll($page, $size);
$json = json_encode($dipendenti);

