<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="sum.php">
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
</body>
</html>