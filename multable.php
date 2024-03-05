<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="multable_ac.php" method="post">
    Enter Number: <input type="number" name="mul" >
    <input type="submit" name="sub" class="btn" value="Submit">
</form>
<?php
    function displayMultiplicationTable($number) {
        echo "Multiplication table for $number:\n";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<br>$number * $i = $result";
        }
    }

    $givenNumber = $_REQUEST['mul']; 
    displayMultiplicationTable($givenNumber);
?>

</body>
</html>