<?php
function calculateStringLength($str) {
    $length = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $length++;
    }
    return $length;
}

function countWords($str) {
    $wordCount = 0;
    $isWord = false;
    for ($i = 0; isset($str[$i]); $i++) {
        if (ctype_alpha($str[$i])) {
            if (!$isWord) {
                $wordCount++;
                $isWord = true;
            }
        } else {
            $isWord = false;
        }
    }
    return $wordCount;
}

// Example usage
$string = "Makani Manthan Kalpesh Bhai.";
echo "Length of string: " . calculateStringLength($string) . "\n";
echo "Number of words: " . countWords($string) . "\n";
?>