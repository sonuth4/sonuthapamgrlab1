<?php

function findLargest($num1, $num2, $num3) {
   
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1; // $num1 is the largest
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2; // $num2 is the largest
    } else {
        return $num3; // $num3 is the largest
    }
}


if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

   
    $largest = findLargest($num1, $num2, $num3);
    echo "The largest number is: " . $largest;
}
?>


<form method="POST">
    Enter first number: <input type="number" name="num1" required><br>
    Enter second number: <input type="number" name="num2" required><br>
    Enter third number: <input type="number" name="num3" required><br>
    <input type="submit" name="submit" value="Find Largest">
</form>
