<?php

// Base class
class Animal {
    public function makeSound() {
        return "Generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}


$animal = new Animal();
echo $animal->makeSound() . "<br>"; 

$dog = new Dog();
echo $dog->makeSound() . "<br>"; 

$cat = new Cat();
echo $cat->makeSound() . "<br>"; 
