<?php
function addIfToFront($inputString) {
    if (strpos($inputString, 'if') === 0) {
        return $inputString;
    } else {
        return 'if ' . $inputString; 
    }
}

if (isset($_POST['submit'])) {
    $input = $_POST['inputString'];
    $result = addIfToFront($input);
    echo "Output: " . $result;
}
?>
<form method="POST">
    Enter a string: <input type="text" name="inputString" required><br>
    <input type="submit" name="submit" value="Check">
</form>
