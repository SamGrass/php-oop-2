<?php

class Animal
{
    public $species;
    public $age;
    public $size;

    public function __construct(String $_species, Int $_age, String $_size)
    {
        $this->species = $_species;
        $this->age = $_age;
        $this->size = $_size;
    }
}
