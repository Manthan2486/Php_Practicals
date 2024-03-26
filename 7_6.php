<?php
class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
class Dog extends Animal {
    public function bark() {
        return "Woof!";
    }
}
class GermanShepherd extends Dog {
    public function specialAbility() {
        return "Guarding and protecting!";
    }
}
$animal = new Animal("Generic Animal");
echo $animal->getName() . "<br>"; 

$dog = new Dog("Buddy");
echo $dog->getName() . "<br>"; 
echo $dog->bark() . "\n"; 
$germanShepherd = new GermanShepherd("Rex");
echo $germanShepherd->getName() . "<br>"; 
echo $germanShepherd->bark() . "<br>"; 
echo $germanShepherd->specialAbility() . "\n"; 
