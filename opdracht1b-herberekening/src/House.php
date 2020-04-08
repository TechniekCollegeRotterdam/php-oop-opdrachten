<?php

// src/House.php

namespace Recalculate;

class House
{

    private $volume;
    private $price;
    private $rooms = [];

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

    public function getRooms()
    {
        return $this->rooms;
    }

    public function getTotalVolume()
    {
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += $room->getVolume();
        }
        return $totalVolume;
    }

    public function getPrice()
    {
        $volume = $this->getTotalVolume();
        //$price = $volume * 1500;
        return $volume * 1500;
    }


}
