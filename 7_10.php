<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function compdetail(); 
}
class Car1 extends car{
    public function compdetail(){
        if ($this->name == "Nexon")
        echo "Company name is: TATA";
    elseif ($this->name == "XUV")
        echo "Mahindra's CAR";
    elseif ($this->name == "i20")
    echo "Hundai's CAR";
    }
}

$car1 = new Car1 ("i20");
echo $car1->compdetail();