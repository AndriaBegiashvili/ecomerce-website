<?php
class MainController extends Product implements MainControllerInterface
{
    public function showData(){
        $query = "SELECT * FROM scandite.products ORDER BY LENGTH(SKU), SKU";
        $mysqli = $this->connect();
        $result = $mysqli->query($query);
    
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function displayData(){
        $data = $this->showData();
        if (!empty($data)) {
            foreach ($data as $row) {
                $field = $row['Type']::$field;
                $unit = $row['Type']::$unit;
                echo "<div class='col-sm-2'>
                <div class='card'>
                <div class='card-body'>
                    <input
                    class='delete-checkbox'
                    name='checkeds[]'
                    type='checkbox'
                    value='".$row['SKU']."'
                    id='flexCheckDefault'
                    /> <br /><h5 class='card-title'> SKU: "
                    .$row['SKU']."</h5><p class='card-text'>Name: ".$row['Name']."</p><p class='card-text'>Price: "
                    .$row['Price']." $</p><p class='card-text'>".$field.": ".$row['Value']." ".$unit."</p></div></div></div>";             
            }
        
        } 
    }
    public function addType()
    {
        if(isset($_POST['bttn'])){
            $type = $_POST["product_type"];
            $obj = new $type($_POST);
            $obj->addProduct();
        }
        
    }
    public function deleteCard() {
        if (isset($_POST['delete'])) {
            if(isset($_POST["checkeds"])){
                $deleteSKU = $_POST["checkeds"];
                $this->delete($deleteSKU);
            }
            
        }
        
        
    }

        

}    

