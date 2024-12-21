<?php
function cars_needed($n) {
    return ceil($n / 5); // Use ceil to round up the division result
}


$n = 12; // Total number of people
echo "Number of cars needed: " . cars_needed($n);
?>
