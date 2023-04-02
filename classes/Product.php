<?php
abstract class Product extends Dbconn implements ProductInterface{
    public function addProduct()
    {
         public function addProduct()
    {
        $sql = "SELECT sku FROM products WHERE sku like '$this->SKU'";
        $result = mysqli_query($this->connect(), $sql);
        if (count(mysqli_fetch_all($result, MYSQLI_ASSOC)) > 0){
            echo "<div>Product with the Given SKU already exists!</div>";
        }
        try {
            $sql = "INSERT INTO products (SKU, Name, Price, Type, Value) VALUES ('$this->SKU', '$this->name', '$this->price', '$this->type', '$this->value')";
            $this->connect()->query($sql);
            echo "Success";
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    
    }
           
        


}
