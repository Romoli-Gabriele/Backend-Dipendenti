<?php
session_start();
$query = require "./core/bootstrap.php";
$router = new router();
require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());