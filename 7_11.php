<?php
class student{
    public $name;
    public $course;
    public function __construct($n){
        $this->name = $n;
    }
    public function setcourse(course $c){
        $this->course = $c;
    }
    public function __clone(){
        $this->course = clone $this->course;
    }
}
class course{
    public $cname;
    public function __construct($cn){
        $this->cname = $cn;
    }
}
$s1 = new student ('a');
$c1 = new course('PHP');
$s1 ->setcourse($c1);
$s2 = clone $s1;// by default copy by reference
$s2->name = 'B';
$s2->course->cname = 'Python'; 
print_r($s1);
echo "<br>";
print_r($s2);
