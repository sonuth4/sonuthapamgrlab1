<?php
define("PI", 3.14159);

function calculateCircleArea($radius)
{
    return PI * $radius * $radius;
}


$radius = 100;
echo "The area of the circle with radius $radius is: " . calculateCircleArea($radius) . " square units.";
