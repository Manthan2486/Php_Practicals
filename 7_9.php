<?php
interface Greeting {
    public function greet();
}
class Hello implements Greeting {
    public function greet() {
        return "Hello, world!";
    }
}

// Usage
$hello = new Hello();
echo $hello->greet();