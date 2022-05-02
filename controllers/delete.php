<?php 
$config = require "config.php";
$database= $config["database"];

$query->delete($dipendente);

return 'deleted with success';