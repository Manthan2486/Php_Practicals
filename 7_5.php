<?php
interface Shape{
    public function getArea();
}
interface Color{
    public function getColor();
}
class Square implements Shape,Color{
    private $side;
    private $color;
    public function __construct($side,$color){
        $this->side = $side;
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    public function getArea(){
        return $this->side * $this->side;
    }
}

$square = new Square(5, "red");

echo "The area of the square is: " . $square->getArea() . "<br>";
echo "The color of the square is: " . $square->getColor() . "\n";