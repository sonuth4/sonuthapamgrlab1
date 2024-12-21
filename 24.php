<?php
function convertLastThreeToUpper($input) {
    $length = strlen($input);
    
    if ($length < 3) {
        return strtoupper($input);
    } else {
        $frontPart = substr($input, 0, $length - 3);
        $lastThreeUpper = strtoupper(substr($input, -3));
        return $frontPart . $lastThreeUpper;
    }
}
if (isset($_POST['submit'])) {
    $inputString = $_POST['inputString'];
    $result = convertLastThreeToUpper($inputString);
    echo "Output: " . $result;
}
?>
<form method="POST">
    Enter a string: <input type="text" name="inputString" required><br>
    <input type="submit" name="submit" value="Convert">
</form>
