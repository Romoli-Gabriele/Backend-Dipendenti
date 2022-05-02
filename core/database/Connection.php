<?php

class Connection
{

    static function make($database)
    {

        try {
            
            return $pdo = new PDO("mysql:host={$database['host']};dbname={$database['name']};port={$database['port']};",$database['username'], $database['password']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
