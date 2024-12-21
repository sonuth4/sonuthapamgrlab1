<?php
function findStringIndex($array, $targetString) {
    foreach ($array as $index => $value) {
        if ($value === $targetString) {
            return $index; 
        }
    }
    return -1;
}

$myArray = ["apple", "banana", "cherry", "date", "fig"];
$searchString = "cherry";

$result = findStringIndex($myArray, $searchString);

if ($result !== -1) {
    echo "The string '$searchString' is found at index: $result";
} else {
    echo "The string '$searchString' was not found in the array.";
}
?>