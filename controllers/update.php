<?php 
$config = require "config.php";
$database= $config["database"];

$query->update($dipendente);

echo 'updated with success';