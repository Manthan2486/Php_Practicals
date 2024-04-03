<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Form</title>
</head>
<body>

<h2>Employee Information Form</h2>

<form method="post" >
    <label for="fullname">Full Name:</label><br>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="contactnum">Contact Number</label><br>
    <input type="tel" name="contact" id="contact"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="bod">Date Of Birth:</label><br>
    <input type="date" name="bod" id="bod"><br><br>

    <label for="lang">Known Programming Language:</label><br>
    <input type="checkbox" name="lang" id="lang"><br><br>

    
    
    <label for="department">Department:</label><br>
    <select id="department" name="department" required>
        <option value="">Select Department</option>
        <option value="HR">Human Resources</option>
        <option value="IT">Information Technology</option>
        <option value="Finance">Finance</option>
        <option value="Sales">Sales</option>
    </select><br><br>
    
    <label for="position">Position:</label><br>
    <input type="text" id="position" name="position" required><br><br>
    
    <input type="submit" value="Submit">
</form>
<?php
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $position = $_POST["position"];
    
    echo "<h2>Employee Information Submitted Successfully</h2>";
    echo "<p><strong>Full Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Department:</strong> $department</p>";
    echo "<p><strong>Position:</strong> $position</p>";

?>
</body>
</html>
