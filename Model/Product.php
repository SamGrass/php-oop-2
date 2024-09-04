<?php
class Product
{

    public $name;
    public $price;
    public $img;
    public $category;
    public $brand;
    public $animal;



    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->img = $_img;
        $this->category = $_category;
        $this->brand = $_brand;
        $this->animal = $_animal;
    }
}
