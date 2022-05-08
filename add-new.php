<?php
$config = require "config.php";
$database = $config["database"];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$hire_date = $_POST['hire_date'];
$gender = $_POST['gender'];


$query->insertDipendente($first_name, $last_name, $gender, $birth_date, $hire_date);
