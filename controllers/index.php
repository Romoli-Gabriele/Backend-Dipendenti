<?php 

$config = require "config.php";
$database= $config["database"];
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}else{
    $page = 1;
}


$tasks = $query->selectAll("enployees", dipendente::class, $page);
return json_encode($tasks);
