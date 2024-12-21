<?php
function minutesToSeconds($minutes)
{
    return $minutes * 60;
}


$minutes = 1000;
echo "$minutes minutes is equal to " . minutesToSeconds($minutes) . " seconds.";
