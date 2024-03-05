<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1"><br><br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="operator">Select Operator:</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } 
                break;
            default:
                echo "Invalid operator";
        }
            echo "Result: $num1 $operator $num2 = $result";
        
    ?>
</body>
</html>