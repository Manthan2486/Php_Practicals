<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="string">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$string = $_REQUEST['string'];
$string_lower = strtolower($string);
$assoc_array = array(
    "a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..", 
    "0"=>"-----",
    "1"=>".----", 
    "2"=>"..---", 
    "3"=>"...--", 
    "4"=>"....-", 
    "5"=>".....", 
    "6"=>"-....", 
    "7"=>"--...", 
    "8"=>"---..", 
    "9"=>"----.",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "/"=>"-..-.",
    " "=>" ");
    for($i=0;$i<strlen($string_lower);$i++){
        foreach($assoc_array as $letter => $code){
            if($letter == $string_lower[$i]){
                echo "$code<br/>";
            }
        }
    }
?>