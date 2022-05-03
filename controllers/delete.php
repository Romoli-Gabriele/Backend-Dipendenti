<?php 
$config = require "config.php";
$database= $config["database"];

$query->delete($dipendente);

echo 'deleted with success';