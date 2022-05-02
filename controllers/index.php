<?php 

$config = require "config.php";
$database= $config["database"];
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}else{
    $page = 0;
}


$dipendenti = $query->selectAll( dipendente::class, $page);
return json_encode($dipendenti);
