<?php

$integer = 5;
$float = 1.0;
$string = "Sonu";
$boolean = "true";
$array = array("Scripting Language", "Basanta Chapagain");
$nullValue = null;

echo "Integer:$integer<br>";
echo "Float:$float<br>";
echo "String:$string<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
echo "Null Value:" . ($nullValue === null ? 'null' : 'not null') . "<br>";



print "Integer:$integer<br>";
print "Float:$float<br>";
print "String:$string<br>";
print "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
print "Null Value:" . ($nullValue === null ? 'null' : 'not null') . "<br>";


echo "Array using print_r:<br>";
print_r($array);


echo "\nArray using var_dump:<br>";
var_dump($array);
