<?php
$a=10;
$b=50;
$sum=0;
while ($a<=$b) {
    if ($a %5 == 0) {
        $sum +=$a;
    }
    $a++;
}
echo $sum;
?>