<?php

class Animal
{
    public $species;
    public $breed;
    public $age;
    public $size;

    public function __construct(String $_species, String $_breed, Int $_age, String $_size)
    {
        $this->species = $_species;
        $this->breed = $_breed;
        $this->age = $_age;
        $this->size = $_size;
    }
}
