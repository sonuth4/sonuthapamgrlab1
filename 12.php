<?php
function recursiveStringLength($str) {
    if ($str === "") {
        return 0;
    }
    return 1 + recursiveStringLength(substr($str, 1));
}

$string = "Hello, world!";
$length = recursiveStringLength($string);

echo "The length of the string '$string' is: $length";
?>