<?php
class Book extends Product

{
    static $field = 'Weight';
    static $unit  = 'KGs';

    public function __construct($var)
    {
        $this->SKU=$var["SKU"];
        $this->name=$var["Name"];
        $this->price=$var["Price"];
        $this->type= "Book";
        $this->value=$var["Weight"];
        

    }

}