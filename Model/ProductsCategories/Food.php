<?php

class Food extends Product
{
    public $expiryDate;
    public $ingredients = [];

    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal, String $expiryDate, array $ingredients)
    {
        parent::__construct($_name, $_price, $_img, $_category, $_brand, $_animal);
        $this->expiryDate = $expiryDate;
        $this->ingredients = $ingredients;
    }
}
