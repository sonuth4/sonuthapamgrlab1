<?php
if (isset($_POST['submit'])) {
    $n = $_POST['number']; // Get user input

   
    function compute_difference($n) {
        $absolute_diff = abs($n - 51); 
        if ($n > 51) {
            return 3 * $absolute_diff; 
        } else {
            return $absolute_diff; 
        }
    }

    // Display the result
    $result = compute_difference($n);
    echo "The result is: " . $result;
}
?>

<!-- HTML form to get user input -->
<form method="POST">
    Enter a number: <input type="number" name="number" required><br><br>
    <input type="submit" name="submit" value="Compute">
</form>
