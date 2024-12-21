<?php

function addFirst3CharsFrontAndBack($input) {
    $length = strlen($input); 
    
    
    $first3Chars = $length < 3 ? $input : substr($input, 0, 3);
    
    
    return $first3Chars . $input . $first3Chars;
}

if (isset($_POST['submit'])) {
    $inputString = $_POST['inputString']; 
    $result = addFirst3CharsFrontAndBack($inputString);
    echo "Output: " . $result;
}
?>


<form method="POST">
    Enter a string: <input type="text" name="inputString" required><br>
    <input type="submit" name="submit" value="Generate">
</form>
