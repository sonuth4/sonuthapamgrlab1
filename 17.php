<?php
function compute_sum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b); 
    } else {
        return $a + $b; 
    }
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "Result: " . compute_sum($num1, $num2); // Call the function
}
?>

<form method="POST">
    Enter first number: <input type="number" name="num1" required><br>
    Enter second number: <input type="number" name="num2" required><br>
    <input type="submit" name="submit" value="Compute">
</form>
