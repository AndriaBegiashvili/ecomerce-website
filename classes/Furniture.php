<?php
class Furniture extends Product
{
    static $field = 'Dimensions';
    static $unit  = 'CMs';

    public function __construct($var)
    {
        $this->SKU = $var['SKU'];
        $this->name = $var['Name'];
        $this->price = $var['Price'];
        $this->type = 'Furniture';
        $this->value = $var['Height'].'x'.$var['Length'].'x'.$var['Width'];
    }

}