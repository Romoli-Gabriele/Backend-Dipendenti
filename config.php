<?php

return [

    "database"=>[
        "name"=>"mydb",
        "username"=>"root",
        "password"=>"root",
        "connection"=>"mysql:host=127.0.0.1",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ],
];