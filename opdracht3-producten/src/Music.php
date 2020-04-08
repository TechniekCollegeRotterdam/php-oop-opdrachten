<?php
// Music.php

namespace Products;

class Music extends Product
{
    private $artist;
    private $numbers = [];

    public function __construct($name, $price, $tax, $profit, $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    public function addNumber($number)
    {
        $this->numbers[] = $number;
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        return [$this->artist, $this->numbers];

    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        $this->category = "Music";
    }
}
