<?php

$currentTimestamp = time();

echo "Current Date and Time: <br>";
echo "1. Default Format: " . date("Y-m-d H:i:s", $currentTimestamp) . "<br>";
echo "2. Date Only: " . date("Y-m-d", $currentTimestamp) . "<br>";
echo "3. Time Only: " . date("H:i:s", $currentTimestamp) . "<br>";
echo "4. Custom Format: " . date("l, F j, Y, g:i a", $currentTimestamp) . "<br>";

?>
