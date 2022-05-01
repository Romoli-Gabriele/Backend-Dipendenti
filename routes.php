<?php 

$router->get("api/dipendenti","controllers/index.php");
$router->put("","controllers/update.php");
$router->delete("","controllers/delete.php");
$router->post("", "controllers/add-new.php");