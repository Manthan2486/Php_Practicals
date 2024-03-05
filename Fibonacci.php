<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h2>Enter The Number You Want Fibonacci Sequence: </h2>
        <input type="number" name="fib">
        <input type="submit" value="Submit">
    </form>
    <?php
        $terms=$_REQUEST["fib"];
        function generateFibonacci($terms) {
            $fibonacci = array(0, 1); 
            for ($i = 2; $i < $terms; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }

            return $fibonacci;
        }

        function displayFibonacci($terms) {
            $fibonacci = generateFibonacci($terms);


            echo "Fibonacci Sequence up to term $terms: ";
            foreach ($fibonacci as $number) {
                echo $number . "<br>";
            }
        }

        displayFibonacci($terms);
    ?>
</body>
</html>

