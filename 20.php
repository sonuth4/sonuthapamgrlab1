<?php

function createCopies($input) {
    
    if (strlen($input) < 2) {
        return $input; 
    } else {
        $firstTwoChars = substr($input, 0, 2); 
        return str_repeat($firstTwoChars, 4); 
    }
}

if (isset($_POST['submit'])) {
    $inputString = $_POST['inputString'];
    $result = createCopies($inputString);
    echo "Output: " . $result;
}
?>

<form method="POST">
    Enter a string: <input type="text" name="inputString" required><br>
    <input type="submit" name="submit" value="Generate">
</form>
