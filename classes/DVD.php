<?php
class DVD extends Product
{
    static $field = 'Size';
    static $unit  = 'MBs';

    public function __construct($var)
    {
        $this->SKU=$var["SKU"];
        $this->name=$var["Name"];
        $this->price=$var["Price"];
        $this->type= "DVD";
        $this->value=$var["Size"];

    }
}

    
