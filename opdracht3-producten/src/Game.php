<?php

// Movie.php

namespace Products;

class Game extends Product
{

    private $genre;
    private $requirements = [];

    public function __construct($name, $price, $tax, $profit, $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function addRequirements($requirement)
    {
        $this->requirements[] = $requirement;
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        return [$this->genre, $this->requirements];
    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        $this->category = "Game";
    }
}