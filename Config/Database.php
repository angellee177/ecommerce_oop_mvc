<?php 

namespace App\Config;

class Database {
    private $host       = "localhost";
    private $user       = "root";
    private $password   = "";
    private $db_name    = "ecommerce";

    protected function connect() {
        try {
            $connection = new mysqli($host, $user, $password, $db_name);

            return $connection;
        } catch ( Exception $error ) {
            echo "Connection to Database error : " . $error->getMessage();
        }
    }
}