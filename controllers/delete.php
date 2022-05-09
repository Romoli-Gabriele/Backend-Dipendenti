<?php 
$config = require "config.php";
$database= $config["database"];
$id = $_REQUEST['id'];
$query->delete($id);

echo 'deleted with success';