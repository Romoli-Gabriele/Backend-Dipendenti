<?php 

$router->get("","controllers/index.php");
$router->delete("","controllers/delete.php");
$router->post("", "controllers/add-new.php");
$router->post("update","controllers/update.php");