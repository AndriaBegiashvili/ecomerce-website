<?php
abstract class Product extends Dbconn implements ProductInterface{
    public function addProduct()
    {
        try {
            $query = "INSERT INTO scandite.products (SKU, Name, Price, Type, Value) VALUES ('$this->SKU', '$this->name', '$this->price', '$this->type', '$this->value')";
            $result = $this->connect()->query($query);
            header('Location: index.php');

        } catch (Exception $e) {
            // Check if the error message indicates that the SKU already exists
            if (strpos($e->getMessage(), "Duplicate entry") !== false) {
                echo "<div>This SKU already exists</div>";
            } else {
                // Handle other exceptions here
                echo "<div>An error occurred: " . $e->getMessage() . "</div>";
            }
        }
    }
           
        


}
