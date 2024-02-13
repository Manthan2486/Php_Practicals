<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Student Information Form</title>
    
</head>
<body>
    <div class="container">
        <h2>Student Information Form</h2>
        <form action="2.action.php" method="post">
            <label for="name">Student Name:</label><br>
            <input type="text" id="name" name="name"><br><br>

            <label for="eno">Student Enrollment Number:</label><br>
            <input type="text" id="eno" name="eno"><br><br>

            <label for="mob">Student Mobile Number:</label><br>
            <input type="text" id="mob" name="mob"><br><br>

            <label for="dep">Student Department:</label><br>
            <input type="text" id="dep" name="dep"><br><br>

            <label for="div">Student Division:</label><br>
            <input type="text" id="div" name="div"><br><br>

            <input type="submit" name="sub" class="btn" value="Submit">
        </form>
    </div>
</body>
</html>
