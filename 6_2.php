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
    return $str === strtolower($str);
}

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
    $characters = str_split($str);
    
    $reversedCharacters = array_reverse($characters);
    
    $reversedString = implode('', $reversedCharacters);
    
    return $reversedString;
}

$string = "Hello, World!";
$reversedString = reverseString($string);
echo "Original string: $string <br>";
echo "Reversed string: $reversedString";

?>
<h2>Replace the given word from the given string. </h2>
<?php

function replaceWord($string, $wordToReplace, $replacement) {
    $newString = str_replace($wordToReplace, $replacement, $string);
    
    return $newString;
}

$string = "The quick brown fox jumps over the lazy dog.";
$wordToReplace = "fox";
$replacement = "cat";

$newString = replaceWord($string, $wordToReplace, $replacement);
echo "Original string: $string <br>";
echo "String after replacement: $newString";

?>

</body>
</html>

