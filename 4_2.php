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
        Enter Marks Of Subject 1: <br><br><input type="number" name="sub1">
        Enter Marks Of Subject 2: <br><br><input type="number" name="sub2">
        Enter Marks Of Subject 3: <br><br><input type="number" name="sub3">
        Enter Marks Of Subject 4: <br><br><input type="number" name="sub4"><br>
        <input type="submit" name="sub" class="btn" value="Submit">
    </form>
    <?php
        function calculateGrade($marks) {
            if ($marks >= 85 && $marks <= 100) {
                return "AA";
            } elseif ($marks >= 75 && $marks <= 84) {
                return "AB";
            } elseif ($marks >= 65 && $marks <= 74) {
                return "BB";
            } elseif ($marks >= 55 && $marks <= 64) {
                return "BC";
            } elseif ($marks >= 45 && $marks <= 54) {
                return "CC";
            } elseif ($marks >= 40 && $marks <= 44) {
                return "CD";
            } elseif ($marks >= 35 && $marks <= 39) {
                return "DD";
            } else {
                return "FF (FAIL)";
            }
        }
        $sub1 = $_REQUEST["sub1"];
        $sub2 = $_REQUEST["sub2"];
        $sub3 = $_REQUEST["sub3"];
        $sub4 = $_REQUEST["sub4"];

        $grade1 = calculateGrade($sub1);
        $grade2 = calculateGrade($sub2);
        $grade3 = calculateGrade($sub3);
        $grade4 = calculateGrade($sub4);

        echo "The Marks Of First Is Subject 1 Is: $sub1 And The Grade Is: $grade1<br>";
        echo "The Marks Of First Is Subject 2 Is: $sub2 And The Grade Is: $grade2<br>";
        echo "The Marks Of First Is Subject 3 Is: $sub3 And The Grade Is: $grade3<br>";
        echo "The Marks Of First Is Subject 4 Is: $sub4 And The Grade Is: $grade4<br>";
    ?>
</body>
</html>