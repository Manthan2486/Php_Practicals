<?php
function displayMultiplicationTable($number) {
    echo "Multiplication table for $number:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<br>$number * $i = $result";
    }
}

$givenNumber = $_REQUEST['mul']; 
displayMultiplicationTable($givenNumber);
?>
