<?php
class Book{
    public $name;
    public $author;
    public $costPrice;
    public $sellingPrice;
    public function __construct($name,$auther,$costPrice,$sellingPrice){
        $this->name = $name;
        $this->author = $auther;
        $this->costPrice = $costPrice;
        $this->sellingPrice = $sellingPrice;
    }
    public function display(){
        echo "Book Name:".$this->name."<br>";
        echo "Book Auther:".$this->author."<br>";
        echo "Book Cost Price:".$this->costPrice."<br>";
        echo "Book Selling Price:".$this->sellingPrice."<br>";
    }
    public function profit(){
        echo"Profit:". $this->sellingPrice - $this->costPrice;
    }
    public function __destruct(){
        echo"<br>Releasing memory....";
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
        $book = new Book($name,$auther,$costPrice,$sellingPrice);
        $book->display();
        $book->profit();
    }
    
    ?>
</body>
</html>