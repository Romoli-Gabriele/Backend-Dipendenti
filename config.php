<?php

return [

    "database"=>[
        "name"=>"mydb",
        "username"=>"Romoli",
        "password"=>"password",
        "host"=>"127.0.0.1",
        "port"=>"3306",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ],
];