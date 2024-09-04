<?php

class Litter extends Product
{
    public $material;
    public $scented;

    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal, String $material, String $scented)
    {
        parent::__construct($_name, $_price, $_img, $_category, $_brand, $_animal);
        $this->material = $material;
        $this->scented = $scented;
    }
}
