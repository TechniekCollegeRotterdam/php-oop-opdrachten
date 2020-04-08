<?php


// index.php

include_once('vendor/autoload.php');

use Recalculate\House;
use Recalculate\Room;

$house1 = new House();

$room1 = new Room(5, 5, 5);
$room2 = new Room(4, 4, 4);
$room3 = new Room(2, 2, 1);

$house1->addRoom($room1);
$house1->addRoom($room2);
$house1->addRoom($room3);

print "Inhoud Kamers:";
print "<ul>";
foreach ($house1->getRooms() as $room) {
    print "<li>Lengte: " . $room->getLength() . "m 
    Breedte: " . $room->getWidth() . "m 
    Hoogte: " . $room->getHeight() . "m</li>";
}
print "</ul>";
print "Volume Totaal = ".$house1->getTotalVolume()."m3<br>";
print "Prijs van het huis is= " . $house1->getPrice()."Euro";