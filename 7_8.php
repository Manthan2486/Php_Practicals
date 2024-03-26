<?php
class Shape{
    function __call($nameOfArgument,$arguments){
        if($nameOfArgument == 'area'){
            switch(count($arguments)){
                case 1:
                    return 3.14 * $arguments[0];
                case 2:
                    return $arguments[0] * $arguments[1];
            }
        }
    }
}
$s = new Shape();
echo "Area :".$s->area(5)."<br>";
echo "Area :".$s->area(11,12);