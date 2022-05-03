<?php 
$config = require "config.php";
$database= $config["database"];

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$birth_date = $_REQUEST['birth_date'];
$hire_date = $_REQUEST['hire_date'];

$dipendente = new dipentente($first_name, $last_name, $birth_date, $hire_date);
$query->insertDipendente($dipendente);

echo "added with success";

