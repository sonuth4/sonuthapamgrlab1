<?php

$integerVar = 25;
$floatVar = 10.5;
$stringVar = "Hello, SONU!";
$booleanVar = true;
$arrayVar = array("apple", "banana", "cherry");

echo "Using echo:<br>";
echo "Integer: $integerVar<br>";
echo "Float: $floatVar<br>";
echo "String: $stringVar<br>";
echo "Boolean: " . ($booleanVar ? "true" : "false") . "<br>";

print "<br>Using print:<br>";
print "Integer: $integerVar<br>";
print "Float: $floatVar<br>";
print "String: $stringVar<br>";
print "Boolean: " . ($booleanVar ? "true" : "false") . "<br>";


echo "<br>Array content using print_r:<br>";
print_r($arrayVar);

echo "<br><br>Array content using var_dump:<br>";
var_dump($arrayVar);

echo "<br><br>Data type checks:<br>";
echo "Is \$integerVar an integer? " . (is_int($integerVar) ? "Yes" : "No") . "<br>";
echo "Is \$floatVar a float? " . (is_float($floatVar) ? "Yes" : "No") . "<br>";
?>
