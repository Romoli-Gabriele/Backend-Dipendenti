<?php 
$config = require "config.php";
$database= $config["database"];

$query->update($dipendente);

return 'updated with success';