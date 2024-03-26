<?php
class Book{
    private $name;
    private $auther;
    private $costPrice;
    private $sellingPrice;
    public function __construct(){
        $this->name = $_POST['bname'];
        $this->auther = $_POST['aname'];
        $this->costPrice = $_POST['cp'];
        $this->sellingPrice = $_POST['sp'];
    }
    public function display(){
        echo "Book Name:".$this->name."<br>";
        echo "Book Auther:".$this->auther."<br>";
        echo "Book Cost Price:".$this->costPrice."<br>";
        echo "Book Selling Price:".$this->sellingPrice."<br>";
    }
    public function profit(){
        $profit = $this->sellingPrice - $this->costPrice;
        echo "Profit:".$profit."<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Book:<input type="text" name="bname" placeholder="Enter Book Name"><br>
        Auther:<input type="text" name="aname" placeholder="Enter Auther Name"><br>
        Cost Price:<input type="text" name="cp" placeholder="Enter Cost Price"><br>
        Selling Price:<input type="text" name="sp" placeholder="Enter Selling Price"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["bname"];
        $auther = $_POST["aname"];
        $costPrice = $_POST["cp"];
        $sellingPrice = $_POST["sp"];
        $book = new Book();
        $book->display();
        $book->profit();
    }
    ?>
</body>
</html>