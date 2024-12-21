<?php
function calculateTriangleArea($base, $height)
{
    return 0.5 * $base * $height;
}


$base = 1;
$height = 2;
echo "The area of the triangle is: " . calculateTriangleArea($base, $height) . " square units.";
