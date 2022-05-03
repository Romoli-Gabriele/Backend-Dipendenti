<?php

return [

    "database"=>[
        "name"=>"mydb",
        "username"=>"root",
        "password"=>"root",
        "host"=>"host.docker.internal",
        "port"=>"3306",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ],
];