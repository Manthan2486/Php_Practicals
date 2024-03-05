<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Select Car Name:</h2>
        <form method="post">
            <input type="radio" name="carName" value="Safari">Safari<br>
            <input type="radio" name="carName" value="Nexon">Nexon<br>
            <input type="radio" name="carName" value="Tigor">Tigor<br>
            <input type="radio" name="carName" value="Tiago">Tiago<br>
            <input type="radio" name="carName" value="XUV700">XUV700<br>
            <input type="radio" name="carName" value="XUV300">XUV300<br>
            <input type="radio" name="carName" value="Bolero">Bolero<br>
            <input type="radio" name="carName" value="i20">i20<br>
            <input type="radio" name="carName" value="Verna">Verna<br>
            <input type="radio" name="carName" value="Venue">Venue<br>
            <input type="radio" name="carName" value="Creta">Creta<br>
            <input type="radio" name="carName" value="Swift">Swift<br>
            <input type="radio" name="carName" value="Alto">Alto<br>
            <input type="radio" name="carName" value="Baleno">Baleno<br>
            <input type="radio" name="carName" value="Brezza">Brezza<br>
            <input type="submit" name="sub" class="btn" value="Submit">
        </form>
    </div>
    <?php
function getCompanyName($carName) {
    switch ($carName) {
        case "Safari":
        case "Nexon":
        case "Tigor":
        case "Tiago":
            return "Tata";
        case "XUV700":
        case "XUV300":
        case "Bolero":
            return "Mahindra";
        case "i20":
        case "Verna":
        case "Venue":
        case "Creta":
            return "Hyundai";
        case "Swift":
        case "Alto":
        case "Baleno":
        case "Brezza":
            return "Suzuki";
        default:
            return "Unknown"; // If the car name doesn't match any in the list
    }
}
$carName = $_REQUEST["carName"];
$companyName = getCompanyName($carName);
echo "The car $carName belongs to $companyName.";
?>
</body>
</html>