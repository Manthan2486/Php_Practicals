<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
<form method="POST">
    Enter Name Of Book:<input type="text" name="name" ><br>
    Enter Cost Price:<input type="text" name="cost"><br>
    Enter Sale Price:<input type="text" name="sell"><br>
    Enter Name Of Book Auther:<input type="text" name="auther"><br>
    <input type="submit" name="sub" class="btn" value="Submit"><br>
</form>


<?php
class Book {
  private $name;  
  private $cprice;
  private $sprice;
  private $auther;
  function __construct($name, $cprice, $sprice, $auther) {
    $this->name = $name;
    $this->cprice = $cprice;
    $this->sprice = $sprice;
    $this->auther = $auther; 
  }
  function __destruct() {
    echo "Profit Is:".$this->sprice-$this->cprice."<br>";
    echo "Book Name Is: ".$this->name."<br>";
    echo "Book Cost Price Is: ".$this->cprice."<br>";
    echo "Book Sale Price Is: ".$this->sprice."<br>";
    echo "Book Auther Is: ".$this->auther."<br>";
  }}


  $apple = new Book($_POST['name'],$_POST['cost'],$_POST['sell'],$_POST['auther']);
?>

</body>
</html>
