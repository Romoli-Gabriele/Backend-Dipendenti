<?php
$config = require "config.php";


require "vendor/autoload.php";

$config = require "config.php";



return new queryBuilder(
    Connection::make($config["database"])
);
