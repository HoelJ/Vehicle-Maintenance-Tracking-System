<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_service_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (isset($_POST['update'])) {
    $vin = $_POST['VIN'];
    $plate = $_POST['license_plate'];
    $year = $_POST['year'];
    $model = $_POST['model'];
    $make = $_POST['make'];
    $color = $_POST['color'];

    $sql = "UPDATE Vehicles SET registrationNum='$plate', year='$year', Model='$model', vehicleType='$make', color='$color' WHERE VIN='$vin'";
    if ($conn->query($sql) === TRUE) {
        echo "<h3 style='text-align:center; color:green'>Vehicle updated successfully!</h3>";
    } else {
        echo "<h3 style='text-align:center; color:red'>Error: " . $conn->error . "</h3>";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Update Vehicle</title>
</head>
<body>
<h1 style="text-align:center; font-size:50px;">Update Vehicle</h1>

<form method="post" action="update-vehicle-form.php" style="text-align:center; font-size:20px;">
    <label>Vehicle Identification Number (VIN):</label>
    <input type="text" name="VIN" required><br><br>

    <label>License Plate Number:</label>
    <input type="text" name="license_plate" required><br><br>

    <label>Year:</label>
    <input type="number" name="year" required><br><br>

    <label>Model:</label>
    <input type="text" name="model" required><br><br>

    <label>Make:</label>
    <input type="text" name="make" required><br><br>

    <label>Color:</label>
    <input type="text" name="color" required><br><br>

    <input type="submit" name="update" value="Update Vehicle" style="padding:10px 20px; font-size:16px;">
</form>

<br>
<div style="text-align:center;">
    <a href="index.php" class="button" style="padding:10px 20px; text-decoration:none; background-color:#067aff; color:white; border-radius:16px;">Go Back</a>
</div>
</body>
</html>