<?php

class Bowl extends Product
{
    public $material;
    public $size;

    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal, String $material, String $size)
    {
        parent::__construct($_name, $_price, $_img, $_category, $_brand, $_animal);
        $this->material = $material;
        $this->size = $size;
    }
}
