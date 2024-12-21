<?php

function addLastCharFrontAndBack($input) {
    $length = strlen($input);
    
   
    if ($length >= 1) {
        $lastChar = substr($input, -1); 
        return $lastChar . $input . $lastChar; 
    } else {
        return "Invalid input!"; 
    }
}

if (isset($_POST['submit'])) {
    $inputString = $_POST['inputString'];
    $result = addLastCharFrontAndBack($inputString);
    echo "Output: " . $result;
}
?>


<form method="POST">
    Enter a string: <input type="text" name="inputString" required><br>
    <input type="submit" name="submit" value="Generate">
</form>
