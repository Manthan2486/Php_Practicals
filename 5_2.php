<?php

function sortedArray($array) {
    $length = count($array);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    
    return $array;
}

$array = [5, 2, 8, 3, 1];
echo "Original Array: ";
print_r($array);

$sortedArray = sortedArray($array);
echo "<br>"."Sorted Array: ";
print_r($sortedArray);

?>