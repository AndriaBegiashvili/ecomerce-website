<?php

class Dbconn implements DbconnInterface {
    private $host = 'sql7.freemysqlhosting.net';
    private $username = 'sql7610577';
    private $password = 'ftd3Zg2pn9';
    private $dbname = 'sql7610577';

    public function connect()
    {
        // Create a new mysqli object
        $mysqli = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);

        // Check if the connection was successful
        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Set default fetch mode to associative array
        mysqli_options($mysqli, MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);
        mysqli_set_charset($mysqli, "utf8mb4");

        // Return the mysqli object
        return $mysqli;
    }
    public function delete($skus){
        try {
            foreach ($skus as $sku) {
                $sql = "DELETE FROM products WHERE SKU like '$sku'";
                $this->connect()->query($sql);
                header('Location: index.php');
            }
            return "Success";
        } catch (\Throwable $th) {
            return $th;
            }
    }
    
    
}
