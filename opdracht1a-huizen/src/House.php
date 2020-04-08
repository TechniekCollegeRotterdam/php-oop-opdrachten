<?php

namespace Houses;

class House
{
    private $floor;
    private $rooms;
    private $volume;

    public function __construct($floor, $rooms, $volume)
    {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->volume = $volume;
    }

    public function getHouse(){
        return "Dit huis heeft ".$this->floor." verdiepingen, ".$this->rooms." kamers en heeft een volume van ".$this->volume." m3 <br>";
    }

    public function getPrice(){
        $price = $this->volume * 1500;
        return "De prijs van het huis is: ".$price."<br>";
    }

}