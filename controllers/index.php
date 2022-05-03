<?php 

$config = require "config.php";
$database= $config["database"];
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}else{
    $page = 2;
}


$dipendenti = $query->selectAll($page);
echo json_encode($dipendenti);
