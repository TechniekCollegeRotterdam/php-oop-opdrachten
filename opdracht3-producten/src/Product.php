<?php

namespace Products;

abstract class Product
{
    private $name;
    private $purchasePrice;
    private $tax;
    private $description;
    private $profit;
    protected $category;

    public function __construct($name, $price, $tax, $profit, $description)
    {
        $this->name = $name;
        $this->purchasePrice = $price;
        $this->tax = $tax;
        $this->profit = $profit;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getSalesprice()
    {
        return round($this->purchasePrice + $this->profit + (($this->tax/100) * ($this->purchasePrice + $this->profit)), 2);
    }

    public function printInfo()
    {
        $print = "<ul>";
        foreach($this->getInfo() as $item)
        {
            if(is_array($item))
            {
                $print .= "<li>Extra info<ul>";
                foreach($item as $subitem)
                {
                    $print .= "<li>$subitem</li>";
                }
                $print .= "</ul></li>";
            }else{
                $print .= "<li>$item</li>";
            }
        }
        $print .= "</ul>";
        return $print;
    }

    abstract public function getInfo();
    abstract public function setCategory();
}