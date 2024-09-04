<?php

class Game extends Product
{
    public $gameType;
    public $material;

    public function __construct(String $_name, Float $_price, String $_img, String $_category, String $_brand, Animal $_animal, String $gameType, String $material)
    {
        parent::__construct($_name, $_price, $_img, $_category, $_brand, $_animal);
        $this->gameType = $gameType;
        $this->material = $material;
    }

    public function getGameInfo()
    {
        return $this->gameType . ' ' . $this->material;
    }
}
