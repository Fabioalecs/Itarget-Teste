<?php

namespace ItargetTest\Config;

use PDO;
use PDOException;

class Connection 
{
    public $host = ''; // 192.168.68.111 // 192.168.0.157
    public $dbname = 'database';
    public $port = '8003';
    public $user = 'user';
    public $password = 'password';
    public $driver = 'pgsql';
    public $connect;

    public static function getConnection()
    {
        try {
            $connection = new Connection();
            $connection->connect = new PDO("{$connection->driver}:host={$connection->host};
                                                    port={$connection->port};
                                                    dbname={$connection->dbname}", 
                                                    $connection->user, 
                                                    $connection->password);
        
            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection->connect;
            //echo "connection success";
        } catch (PDOException $e) {
            $serielized = serialize(Connection::class);
            var_dump($serielized);
            echo "Error: " . $e->getMessage();
        }
    }
}

//Connection::getConnection();