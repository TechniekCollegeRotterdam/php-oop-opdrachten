<?php

// src/Room.php

namespace Recalculate;

class Room
{
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getVolume()
    {
        //$volume = $this->length * $this->height * $this->width;
        return $this->length * $this->height * $this->width;
    }


}