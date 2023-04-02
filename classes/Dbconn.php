<?php

class Dbconn implements DbconnInterface {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'scandite';

    public function connect()
    {
        $mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Set default fetch mode to associative array
        $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);
        $mysqli->set_charset("utf8mb4");

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