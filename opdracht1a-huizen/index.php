<?php

require_once "vendor/autoload.php";

use Houses\House;

$house1 = new House(2, 4, 100);
$house2 = new House(3, 6, 150);
$house3 = new House(2, 3, 75);

print $house1->getHouse();
print $house1->getPrice();

print $house2->getHouse();
print $house2->getPrice();

print $house3->getHouse();
print $house3->getPrice();
