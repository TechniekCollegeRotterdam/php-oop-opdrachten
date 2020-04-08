<?php

// Movie.php

namespace Products;

class Movie extends Product
{

    private $quality;

    public function __construct($name, $price, $tax, $profit, $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
    }

    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        return [$this->quality];
    }

    public function setCategory()
    {
        // TODO: Implement setCategory() method.
        $this->category = "Movie";
    }
}

