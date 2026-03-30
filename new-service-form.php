<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_service_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST['service_type'];
    $vin = $_POST['VIN'];

    // Get the vehicleID from VIN
    $result = $conn->query("SELECT vehicleID FROM Vehicles WHERE VIN='$vin'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $vehicleID = $row['vehicleID'];

        $sql = "INSERT INTO Service (vehicleID, typeOfService, serviceDate, status) 
                VALUES ('$vehicleID','$service', NOW(), 'Scheduled')";
        if ($conn->query($sql) === TRUE) {
            echo "<h3 style='text-align:center; color:green'>Service added successfully!</h3>";
        } else {
            echo "<h3 style='text-align:center; color:red'>Error: " . $conn->error . "</h3>";
        }
    } else {
        echo "<h3 style='text-align:center; color:red'>Error: Vehicle VIN not found!</h3>";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>New Service</title>
</head>
<body>
<h1 style="text-align:center; font-size:50px;">Add New Service</h1>

<form method="post" action="new-service-form.php" style="text-align:center; font-size:20px;">
    <label>Service Type:</label>
    <input type="text" name="service_type" required><br><br>

    <label>Vehicle Identification Number (VIN):</label>
    <input type="text" name="VIN" required><br><br>

    <input type="submit" value="Confirm" style="padding:10px 20px; font-size:16px;">
</form>

<br>
<div style="text-align:center;">
    <a href="index.php" class="button" style="padding:10px 20px; text-decoration:none; background-color:#067aff; color:white; border-radius:16px;">Go Back</a>
</div>
</body>
</html>