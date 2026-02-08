<?php

namespace Framework\Database;

use mysqli;

class DatabaseConnection
{
    public static function getConnection(): mysqli
    {
        $servername = "localhost";
        $username = "root";
        $password = "secret";
        $dbname = "address_management";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
