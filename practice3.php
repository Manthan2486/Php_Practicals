<?php
$a=1234;
$temp=0;
while(true){
    $temp=$a%10;
    $temp=$temp%10;
    $a /=10;
}
echo $temp;

?>