<?php
function calculateArea($base, $height, $shape) {
    if (!is_numeric($base) || !is_numeric($height) || $base <= 0 || $height <= 0) {
        return "Base and height must be positive numbers.";
    }
    switch (strtolower($shape)) {
        case "triangle":
            return 0.5 * $base * $height;
        case "parallelogram":
            return $base * $height;
        default:
            return "Invalid shape. Please choose 'triangle' or 'parallelogram'.";
    }
}

$base = 10;
$height = 5; 
$shape = "triangle"; 

$area = calculateArea($base, $height, $shape);

if (is_numeric($area)) {
    echo "The area of the $shape with base $base and height $height is: $area";
} else {
    echo $area;
}
?>