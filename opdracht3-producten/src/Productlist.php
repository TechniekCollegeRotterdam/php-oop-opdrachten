<?php
//ProductList.php

namespace Products;

class ProductList
{
    private $name;
    private $items = [];

    public function addProduct($product)
    {
        $this->items[] = $product;
    }

    public function getProducts()
    {
        return $this->items;
    }
}