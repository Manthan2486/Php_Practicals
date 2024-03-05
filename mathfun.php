<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Generate a random number between the given range. </h2>
    <?php

function generateRandomNumber($min, $max) {
    // Use PHP's built-in rand() function to generate a random number
    return rand($min, $max);
}

// Example usage:
$min = 10;
$max = 50;
$randomNumber = generateRandomNumber($min, $max);
echo "Random number between $min and $max: $randomNumber";

?>
<h2>Display the binary, octal and hexadecimal of a given decimal number.</h2>
<?php

function displayNumberRepresentations($decimal) {
    $binary = decbin($decimal);
    $octal = decoct($decimal);
    $hexadecimal = dechex($decimal);
    
    echo "Decimal: $decimal <br>";
    echo "Binary: $binary <br>";
    echo "Octal: $octal <br>";
    echo "Hexadecimal: $hexadecimal <br>";
}

$decimalNumber = 123;
displayNumberRepresentations($decimalNumber);

?>
<h2>Display the sin, cos and tan of the given angle. </h2>
<?php

function trigonometricFunctions($angle_degrees) {
    // Convert degrees to radians
    $angle_radians = deg2rad($angle_degrees);
    
    // Calculate sine, cosine, and tangent
    $sin = sin($angle_radians);
    $cos = cos($angle_radians);
    $tan = tan($angle_radians);
    
    // Display the results
    echo "For angle $angle_degrees degrees: <br>";
    echo "Sine: $sin <br>";
    echo "Cosine: $cos <br>";
    echo "Tangent: $tan <br>";
}

// Example usage:
$angle_degrees = 45;
trigonometricFunctions($angle_degrees);

?>

</body>
</html>