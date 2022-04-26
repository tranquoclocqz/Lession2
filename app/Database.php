<?php

namespace App;

class Database
{
    public function connect()
    {
        return new \PDODb([
            'type' => 'mysql',
            'host' => DB_HOST,
            'username' => DB_USER,
            'password' => DB_PASS,
            'dbname' => DB_NAME,
            'port' => DB_PORT,
            'prefix' => DB_PREFIX,
            'charset' => 'utf8'
        ]);
    }
}