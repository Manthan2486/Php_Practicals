<?php
class Student{
    public $name;
    public $enroll;
    public $cont;
    public $email;
    public function getdata(){
        $this->name = $_POST['name'];
        $this->enroll = $_POST['enroll'];
        $this->cont = $_POST['cont'];
        $this->email = $_POST['email'];
    }
}
class sem4 extends Student{
    public $cn;
    public $java;
    public $php;
    public $ise;
    public function getdatat(){
        $this->cn = $_POST["cn"];
        $this->java = $_POST["java"];
        $this->php = $_POST["php"];
        $this->ise = $_POST["ise"];
    }
    public function display(){
        echo "Name:".$this->name."<br>";
        echo "Enrollment Number:".$this->enroll."<br>";
        echo "Contact Number:".$this->cont."<br>";
        echo "Email:".$this->email."<br>";
        echo "Your Computer Network Marks:".$this->cn."<br>";
        echo "Your Java Marks:".$this->java."<br>";
        echo "Your PHP Marks:".$this->php."<br>";
        echo "Your Software Engineering Marks:".$this->ise."<br>";
    }
    public function calculatePer(){
        $total = $this->cn + $this->java + $this->php + $this->ise;
        $per = ($total/400) * 100;
        echo "Your Percentage:".$per."<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Name: <input type="text" name="name" placeholder="Enter your Name"><br>
        Enrollment Number: <input type="text" name="enroll" placeholder="Enter your Enrollment Number"><br>
        Contact Number: <input type="text" name="cont" placeholder="Enter your Contact Number"><br>
        Email: <input type="text" name="email" placeholder="Enter your Email"><br>
        CN:<input type="text" name="cn" placeholder="Enter marks of CN"><br>
        Java:<input type="text" name="java" placeholder="Enter marks of Java"><br>
        PHP:<input type="text" name="php" placeholder="Enter marks of PHP"><br>
        Software Engineering:<input type="text" name="ise" placeholder="Enter marks of Software Engineering"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $obj = new sem4();
        $obj->getdata();
        $obj->getdatat();
        $obj->display();
        $obj->calculatePer();
    }
    ?>
</body>
</html>