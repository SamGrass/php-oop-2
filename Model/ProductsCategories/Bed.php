<?php

class Bed extends Product
{
    public $size;
    public $material;

    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal, String $size, String $material)
    {
        parent::__construct($_name, $_price, $_img, $_category, $_brand, $_animal);
        $this->size = $size;
        $this->material = $material;
    }
}
