<?php

include('Cors.php');
class Connection 
{
    private static $pdo = null;

    /**
     * return a singleton of PDO instance
     *  
     * @param array $config
     * @return PDO
     */
    public static function make($config)
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']);
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }
        }

        return self::$pdo;
    }
}