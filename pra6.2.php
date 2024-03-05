<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Check if the given string is lowercase or not.</h2>
<?php
function isLowercase($str) {
    // Check if all characters in the string are lowercase
    return $str === strtolower($str);
}

// Example usage:
$string1 = "hello";
$string2 = "Hello";

if (isLowercase($string1)) {
    echo "$string1 is lowercase.<br>";
} else {
    echo "$string1 is not lowercase.<br>";
}

if (isLowercase($string2)) {
    echo "$string2 is lowercase.<br>";
} else {
    echo "$string2 is not lowercase.<br>";
}

?>
<h2>Reverse the given string. </h2>
<?php

function reverseString($str) {
    // Split the string into an array of characters
    $characters = str_split($str);
    
    // Reverse the array of characters
    $reversedCharacters = array_reverse($characters);
    
    // Join the reversed characters back into a string
    $reversedString = implode('', $reversedCharacters);
    
    return $reversedString;
}

// Example usage:
$string = "Hello, World!";
$reversedString = reverseString($string);
echo "Original string: $string <br>";
echo "Reversed string: $reversedString";

?>
<h2>Replace the given word from the given string. </h2>
<?php

function replaceWord($string, $wordToReplace, $replacement) {
    // Use PHP's str_replace function to replace the word
    $newString = str_replace($wordToReplace, $replacement, $string);
    
    return $newString;
}

// Example usage:
$string = "The quick brown fox jumps over the lazy dog.";
$wordToReplace = "fox";
$replacement = "cat";

$newString = replaceWord($string, $wordToReplace, $replacement);
echo "Original string: $string <br>";
echo "String after replacement: $newString";

?>

</body>
</html>

